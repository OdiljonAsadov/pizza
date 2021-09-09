<?php

namespace App\Http\Controllers;

use App\ReplyCommandCategory;
use App\BlogPage;
use App\CommandCategory;
use App\BlogCategory;
use Illuminate\Http\Request;

class reply_commandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $replyCommands = ReplyCommandCategory::all();

        return view('replyCommand.index', compact('replyCommands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($blog_id, $id)
    {
        $blogs = BlogPage::where('id', $blog_id)->get();
        $commands = CommandCategory::where('id', $id)->get();
        $blogCategories = BlogCategory::all();

        return view('main.blog-single', compact('blogs', 'commands', 'blogCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $replyCommands = new ReplyCommandCategory();
        $replyCommands->role_id = $request->role_id;
        $replyCommands->first_name = $request->first_name;
        $replyCommands->last_name = $request->last_name;
        $replyCommands->email = $request->email;
        $replyCommands->password = $request->password;
        $replyCommands->phone = $request->phone;

        $replyCommands->save();

        return redirect('/registration')->with('success','Blog Create successfully,');
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
        $replyCommands = ReplyCommandCategory::where('id', $id)->get();
        return view('main.edit-profil', compact('replyCommands'));
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
        
        $replyCommands = ReplyCommandCategory::findOrFail($id);
        $replyCommands->role_id = $request->role_id;
        $replyCommands->first_name = $request->first_name;
        $replyCommands->last_name = $request->last_name;
        $replyCommands->email = $request->email;
        $replyCommands->password = $request->password;
        $replyCommands->phone = $request->phone;
        $replyCommands->viloyat = $request->viloyat;
        $replyCommands->tuman = $request->tuman;
        $replyCommands->uy = $request->uy;
        if ($request->image != null) {
            $imageName = asset("uploads" . "/" . time() . "." . $request->image->extension());
            $request->image->move(public_path('uploads/'), $imageName);
            $replyCommands->image = $imageName;
          }
        $replyCommands->save();

        return redirect('/reply-command')->with('success','Blog Create successfully,');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $replyCommands = ReplyCommandCategory::find($id);
        $replyCommands->delete();

        return redirect()->back()->with('success', 'Blog delete syccessfully');
    }
}
