<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class usersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
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
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|email|unique:users',
            'phone'=>'required',
            'password'=>'required|min:5|max:12',
        ]);

        $users = new User();
        $users->role_id = $request->role_id;
        $users->first_name = $request->first_name;
        $users->last_name = $request->last_name;
        $users->email = $request->email;
        $users->password = Hash::make($request->password);
        $users->phone = $request->phone;

        $users->save();

        if ($users) {
            return back()->with('success', 'You have registeted successfuly');
        } else {
            return back()->with('fail', 'Something wrong');
        }

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
    // public function edit($id)
    // {
    //     $users = User::where('id', $id)->get();
    //     return view('main.edit-profil', compact('users'));
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
        
    //     $users = User::findOrFail($id);
    //     $users->role_id = $request->role_id;
    //     $users->first_name = $request->first_name;
    //     $users->last_name = $request->last_name;
    //     $users->email = $request->email;
    //     $users->password = $request->password;
    //     $users->phone = $request->phone;
    //     $users->viloyat = $request->viloyat;
    //     $users->tuman = $request->tuman;
    //     $users->uy = $request->uy;
    //     if ($request->image != null) {
    //         $imageName = asset("uploads" . "/" . time() . "." . $request->image->extension());
    //         $request->image->move(public_path('uploads/'), $imageName);
    //         $users->image = $imageName;
    //       }
    //     $users->save();

    //     return redirect('/user')->with('success','Blog Create successfully,');
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editUser($id)
    {
        $users = User::where('id', $id)->get();
        return view('main.edit-profil', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateUser(Request $request, $id)
    {
        
        $users = User::findOrFail($id);
        $users->role_id = $request->role_id;
        $users->first_name = $request->first_name;
        $users->last_name = $request->last_name;
        $users->email = $request->email;
        $users->password = $request->password;
        $users->phone = $request->phone;
        $users->viloyat = $request->viloyat;
        $users->tuman = $request->tuman;
        $users->uy = $request->uy;
        if ($request->image != null) {
            $imageName = asset("uploads" . "/" . time() . "." . $request->image->extension());
            $request->image->move(public_path('uploads/'), $imageName);
            $users->image = $imageName;
          }
        $users->save();

        return redirect('/user')->with('success','Blog Create successfully,');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete();

        return redirect()->back()->with('success', 'Blog delete syccessfully');
    }
}
