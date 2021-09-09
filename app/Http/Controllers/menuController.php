<?php

namespace App\Http\Controllers;

use App\Menu;
use Illuminate\Http\Request;
use App\Product;
use App\Category;

class menuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::all();

        return view('menu.index', compact('menus'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $menus = new Menu();
        $menus->name = $request->name;
        $menus->price = $request->price;
        $menus->description = $request->description;
        $menus->summernote = $request->summernote;
        if ($request->image != null) {
            $imageName = asset("uploads" . "/" . time() . "." . $request->image->extension());
            $request->image->move(public_path('uploads/'), $imageName);
            $menus->image = $imageName;
          }
        $menus->save();

        return redirect('/menu')->with('success','Blog Create successfully,');
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
        $menus = Menu::where('id', $id)->get();
        return view('menu.edit', compact('menus'));
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
        $menus = Menu::findOrFail($id);
        $menus->name = $request->name;
        $menus->price = $request->price;
        $menus->description = $request->description;
        $menus->summernote = $request->summernote;
        if ($request->image != null) {
            $imageName = asset("uploads" . "/" . time() . "." . $request->image->extension());
            $request->image->move(public_path('uploads/'), $imageName);
            $menus->image = $imageName;
          }
        $menus->save();

        return redirect('/menu')->with('success','Blog Create successfully,');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menus = Menu::find($id);
        $menus->delete();

        return redirect()->back()->with('success', 'Blog delete syccessfully');
    }

    public function menuPage()
    {
        $menus = Menu::all();
        $categories = Category::all();
        $products = Product::all();
        $pizzas = Product::where('category_id', 1)->get();
        $drinks = Product::where('category_id', 2)->get();
        $burgers = Product::where('category_id', 3)->get();
        $pastas = Product::where('category_id', 4)->get();

        return view('main.menu', compact('menus', 'categories', 'pizzas', 'drinks', 'products', 'burgers', 'pastas'));
    }
}
