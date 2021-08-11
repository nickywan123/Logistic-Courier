<?php

namespace App\Http\Controllers\Administrator\Web\Faq;

use App\Http\Controllers\Controller;
use App\Web\FaqCategory;
use Illuminate\Http\Request;

class FaqCategoryController extends Controller
{

    public function __construct()
    {
        return $this->middleware(['auth','role:administrator']);
    }

    protected $view = 'administrator.faq.category.';
    protected $route = 'faq-category.';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view($this->view.'index', [
            'categories' => FaqCategory::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->view.'create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        foreach ($request->category as $key => $value) {
            FaqCategory::create($value);
        }
        return redirect()->route($this->route.'index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Web\FaqCategory  $faqCategory
     * @return \Illuminate\Http\Response
     */
    public function show(FaqCategory $faqCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Web\FaqCategory  $faqCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = FaqCategory::find($id);
        return view($this->view.'edit', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Web\FaqCategory  $faqCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = FaqCategory::find($id);
        $category->fill(['name' => $request->name]);
        $category->update();
        return redirect()->route($this->route.'index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Web\FaqCategory  $faqCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = FaqCategory::find($id);
        $category->delete();
        return redirect()->back();
    }
}
