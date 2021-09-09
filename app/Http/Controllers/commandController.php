<?php

namespace App\Http\Controllers;

use App\CommandCategory;
use App\BlogPage;
use Illuminate\Http\Request;

class commandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $commands = CommandCategory::all();

        return view('command.index', compact('commands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blogs = BlogPage::all();

        return view('main.blog-single', compact('blogs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $commands = new CommandCategory();
        $commands->user_id = $request->user_id;
        $commands->blog_id = $request->blog_id;
        $commands->first_name = $request->first_name;
        $commands->last_name = $request->last_name;
        $commands->subject = $request->subject;
        $commands->message = $request->message;

        $commands->save();

        return redirect()->back()->with('success','Blog Create successfully,');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $commands = CommandCategory::where('id', $id)->get();
        $blogs = BlogPage::where('id', $id)->get();
        $bizningOvqatlar = \App\BlogPage::where('blogCategory_id', 3)->count();

        return view('main.blog-single', compact('commands', 'blogs', 'bizningOvqatlar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $commands = CommandCategory::where('id', $id)->get();
        return view('main.edit-profil', compact('commands'));
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
        
        $commands = CommandCategory::findOrFail($id);
        $commands->user_id = $request->user_id;
        $commands->blog_id = $request->blog_id;
        $commands->first_name = $request->first_name;
        $commands->last_name = $request->last_name;
        $commands->subject = $request->subject;
        $commands->message = $request->message;
        $commands->save();

        return redirect('/command')->with('success','Blog Create successfully,');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $commands = CommandCategory::find($id);
        $commands->delete();

        return redirect()->back()->with('success', 'Blog delete syccessfully');
    }
}
