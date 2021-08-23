<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Announcements extends Model
{

    protected $fillable = [
        'hub_id',
        'title',
        'description',
        'attachment'
    ];

    protected $guarded = [
        'hub_id',
        'title',
        'description',
        'attachment'
    ];

    public function hub() {
        return $this->belongsTo('App\Hub', 'hub_id');
    }

    public function announcement($announcement, $request){
        $announcement->hub_id = $request->hub;
        $announcement->title = $request->title;
        $announcement->description = $request->description;
        if ($request->hasFile('attachment')) {
            $files = $request->file('attachment');
            $attachment = Str::uuid().'-'.time().'.'.$files->getClientOriginalExtension();
            $attachmentOpt = $files->move(public_path('assets/images/upload/'), $attachment);
            $announcement->attachment = $attachment;
        }
        $announcement->save();
    }

}
