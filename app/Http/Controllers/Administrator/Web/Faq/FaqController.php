<?php

namespace App\Http\Controllers\Administrator\Web\Faq;

use App\Http\Controllers\Controller;
use App\Web\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FaqController extends Controller
{

    public function __construct()
    {
        return $this->middleware(['auth','role:administrator']);
    }

    protected $view = 'administrator.faq.faq.';
    protected $route = 'faq.';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view($this->view.'index', [
            'faqs' => Faq::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = DB::table('faq_categories')->pluck('name', 'id')->prepend('Select', 0);
        return view($this->view.'create', [
            'faq' => new Faq,
            'categories' => $categories
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
        $faq = new Faq;
        $faq->saveEdit($faq, $request);
        return redirect()->route($this->route.'index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Web\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function show(Faq $faq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Web\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function edit(Faq $faq)
    {
        $categories = DB::table('faq_categories')->pluck('name', 'id')->prepend('Select', 0);
        return view($this->view.'edit', [
            'faq' => $faq,
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Web\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faq $faq)
    {
        $faq->saveEdit($faq, $request);
        return redirect()->route($this->route.'index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Web\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faq $faq)
    {
        $faq->delete();
        return redirect()->back();
    }
}
