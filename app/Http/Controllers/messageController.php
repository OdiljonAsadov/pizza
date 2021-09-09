<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class messageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = Message::all();

        return view('messages.index', compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('main.contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = new Message();
        $messages->status = $request->status;
        $messages->user_id = $request->user_id;
        $messages->first_name = $request->first_name;
        $messages->last_name = $request->last_name;
        $messages->email = $request->email;
        $messages->subject = $request->subject;
        $messages->message = $request->message;
        $messages->save();

        return redirect('/contact')->with('success', 'Sizning xabaringiz muvaffaqiyatli yuborildi. Qisqa vaqt ichida biz sizga javob qaytaramiz. Ushbu javobni mening profilimdan bilishingiz mumkin');
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
        $messages = Message::where('id', $id)->get();
        return view('messages.index', compact('messages'));
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
        $messages = Message::findOrFail($id);
        $messages->status = 1;
        $messages->user_id = $request->user_id;
        $messages->first_name = $request->first_name;
        $messages->last_name = $request->last_name;
        $messages->email = $request->email;
        $messages->subject = $request->subject;
        $messages->message = $request->message;
        $messages->save();

        return redirect('/messages')->with('success','Blog Create successfully,');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $messages = Message::find($id);
        $messages->delete();

        return redirect()->back()->with('success', 'Blog delete syccessfully');
    }


    // public function editR($id)
    // {
    //     $messages = Message::where('id', $id)->get();
    //     return view('messages.read', compact('messages'));
    // }


    public function read($id)
    {
        $messages = Message::findOrFail($id);

        $messages->status = 1;
        
        $messages->save();
        
        return redirect()->back()->with('success', 'Status changed to 1');
    }
}
