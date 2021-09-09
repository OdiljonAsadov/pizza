<?php

namespace App\Http\Controllers;

use App\BlogPage;
use App\BlogCategory;
use App\CommandCategory;
use Illuminate\Http\Request;

class blog_pageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = BlogPage::all();

        return view('blogPage.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blogCategories = BlogCategory::all();
        return view('blogPage.create', compact('blogCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blogs = new BlogPage();
        $blogs->blogCategory_id = $request->blogCategory_id;
        $blogs->name = $request->name;
        $blogs->date = $request->date;
        $blogs->description = $request->description;
        $blogs->summernote = $request->summernote;
        if ($request->image != null) {
            $imageName = asset("uploads" . "/" . time() . "." . $request->image->extension());
            $request->image->move(public_path('uploads/'), $imageName);
            $blogs->image = $imageName;
          }
        $blogs->save();

        return redirect('/blog')->with('success','Blog Create successfully,');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blogs = BlogPage::where('id', $id)->get();
        $blogCategories = BlogCategory::all();
        $commands = CommandCategory::where('blog_id', $id)->get();
        $bizningOvqatlar = \App\BlogPage::where('blogCategory_id', 3)->count();

        return view('main.blog-single', compact('blogs', 'blogCategories', 'commands', 'bizningOvqatlar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blogs = BlogPage::where('id', $id)->get();
        return view('blogPage.edit', compact('blogs'));
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
        $blogs = BlogPage::findOrFail($id);
        $blogs->blogCategory_id = $request->blogCategory_id;
        $blogs->name = $request->name;
        $blogs->date = $request->date;
        $blogs->description = $request->description;
        $blogs->summernote = $request->summernote;
        if ($request->image != null) {
            $imageName = asset("uploads" . "/" . time() . "." . $request->image->extension());
            $request->image->move(public_path('uploads/'), $imageName);
            $blogs->image = $imageName;
          }
        $blogs->save();

        return redirect('/blog')->with('success','Blog Create successfully,');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blogs = BlogPage::find($id);
        $blogs->delete();

        return redirect()->back()->with('success', 'Blog delete syccessfully');
    }
}
