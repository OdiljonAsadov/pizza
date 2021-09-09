<?php

namespace App\Http\Controllers;

use App\BlogCategory;
use Illuminate\Http\Request;
use DB;

class blog_categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogCategories = BlogCategory::all();
        $count = DB::table('blog_categories')->count();
        $bizningOvqatlar = \App\BlogPage::where('blogCategory_id', 3)->count();

        return view('blogCategory.index', compact('blogCategories', 'count', 'bizningOvqatlar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blogCategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blogCategories = new BlogCategory();
        $blogCategories->name = $request->name;
        $blogCategories->save();
        return redirect('/blogCategory');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blogCategories = BlogCategory::where('id', $id)->get();
        return view('blogCategory.edit', compact('blogCategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blogCategories = BlogCategory::findOrFail($id);
        $blogCategories->name = $request->name;
        $blogCategories->save();
        return redirect('/blogCategory');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blogCategories = BlogCategory::find($id);
        $blogCategories->delete();

        return redirect()->back()->with('success', 'Blog delete syccessfully');
    }
}
