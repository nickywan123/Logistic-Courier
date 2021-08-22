<?php

namespace App\Http\Controllers\Administrator;

use App\Announcements;
use App\Http\Controllers\Controller;
use App\Hub;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class AnnouncementsController extends Controller
{

    public function __construct()
    {
        return $this->middleware(['auth','role:administrator']);
    }

    protected $view = 'administrator.announcements.';
    protected $route = 'announcements.';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view($this->view.'index', [
            'announcements' => Announcements::with('hub')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hubs = DB::table('hubs')->pluck('hub_name', 'id')->prepend('ALL HUBS', 0);
        return view($this->view.'create', [
            'announcement' => new Announcements,
            'hubs' => $hubs
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'attachment' => 'mimes:jpeg,png,pdf'
        ]);
        if ($request->hub > 0) {
            $announcement = new Announcements;
            $announcement->announcement($announcement, $request);
        } else {
            $hubs = Hub::all();
            if ($request->hasFile('attachment')) {
                $files = $request->file('attachment');
                $attachment = Str::uuid().'-'.time().'.'.$files->getClientOriginalExtension();
                $attachmentOpt = $files->move(public_path('assets/images/upload/'), $attachment);
            }
            foreach ($hubs as $hub){
                $announcement = new Announcements;
                $announcement->hub_id = $hub->id;
                $announcement->title = $request->title;
                $announcement->description = $request->description;
                $announcement->attachment = $attachment;
                $announcement->save();
            };
        }
        return redirect()->route($this->route.'index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Announcements  $announcements
     * @return \Illuminate\Http\Response
     */
    public function show(Announcements $announcement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Announcements  $announcements
     * @return \Illuminate\Http\Response
     */
    public function edit(Announcements $announcement)
    {
        $hubs = DB::table('hubs')->pluck('hub_name', 'id')->prepend('ALL HUBS', 0);
        return view($this->view.'edit', [
            'announcement' => $announcement,
            'hubs' => $hubs
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Announcements  $announcements
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Announcements $announcement)
    {
        if ($request->hub > 0) {
            $announcement->announcement($announcement, $request);
        } else {
            $attachment = $request->edit_attachment;
            $hubs = Hub::all();
            if ($request->hasFile('attachment')) {
                $files = $request->file('attachment');
                $attachment = Str::uuid().'-'.time().'.'.$files->getClientOriginalExtension();
                $attachmentOpt = $files->move(public_path('assets/images/upload/'), $attachment);
            }
            foreach ($hubs as $hub){
                $announcement = new Announcements;
                $announcement->hub_id = $hub->id;
                $announcement->title = $request->title;
                $announcement->description = $request->description;
                $announcement->attachment = $attachment;
                $announcement->save();
            };
        }
        return redirect()->route($this->route.'index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Announcements  $announcements
     * @return \Illuminate\Http\Response
     */
    public function destroy(Announcements $announcement)
    {
        //  File::delete(public_path('assets/images/upload/').$announcement->attachment);
        $announcement->delete();
        return redirect()->back();
    }


    // Mass delete
    public function deleteall(Request $request)
    {
        $ids = $request->ids;
        //  foreach((array) $ids as $id){
        //      $announcement = Announcements::find($id);
        //      File::delete(public_path('assets/images/upload/').$announcement->attachment);
        //  }
        DB::table('announcements')->whereIn('id', explode(',', $ids))->delete();
        return response()->json(['success' => 'Announcements deleted successfully.']);
    }

}
