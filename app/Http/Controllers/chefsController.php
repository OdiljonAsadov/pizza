<?php

namespace App\Http\Controllers;

use App\Chefs;
use Illuminate\Http\Request;

class chefsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chefs = Chefs::all();

        return view('chefs.index', compact('chefs'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('chefs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $chefs = new Chefs();
        $chefs->name = $request->name;
        $chefs->name_profession = $request->name_profession;
        $chefs->description = $request->description;
        if ($request->image != null) {
            $imageName = asset("uploads" . "/" . time() . "." . $request->image->extension());
            $request->image->move(public_path('uploads/'), $imageName);
            $chefs->image = $imageName;
          }
        $chefs->save();

        return redirect('/chefs')->with('success','Blog Create successfully,');
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
        $chefs = Chefs::where('id', $id)->get();
        return view('chefs.edit', compact('chefs'));
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
        $chefs = Chefs::findOrFail($id);
        $chefs->name = $request->name;
        $chefs->name_profession = $request->name_profession;
        $chefs->description = $request->description;
        if ($request->image != null) {
            $imageName = asset("uploads" . "/" . time() . "." . $request->image->extension());
            $request->image->move(public_path('uploads/'), $imageName);
            $chefs->image = $imageName;
          }
        $chefs->save();

        return redirect('/chefs')->with('success','Blog Create successfully,');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $chefs = Chefs::find($id);
        $chefs->delete();

        return redirect()->back()->with('success', 'Blog delete syccessfully');
    }
}
