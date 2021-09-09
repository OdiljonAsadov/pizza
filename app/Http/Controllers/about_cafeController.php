<?php

namespace App\Http\Controllers;

use App\AboutCafe;
use App\BlogPage;
use App\Product;
use App\Category;
use App\Chefs;
use App\Menu;
use Illuminate\Http\Request;

class about_cafeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aboutCafes = AboutCafe::all();

        return view('aboutCafe.index', compact('aboutCafes'));
    }

    public function aboutCafe()
    {
        $aboutCafes = AboutCafe::all();
        $products = Product::all();
        $categories = Category::all();
        $pizzas = Product::where('category_id', 1)->get();
        $drinks = Product::where('category_id', 2)->get();
        $burgers = Product::where('category_id', 3)->get();
        $pastas = Product::where('category_id', 4)->get();
        $menus = Menu::all();
        $blogs = BlogPage::all();
        

        return view('main.index', compact('aboutCafes', 'products', 'pizzas', 'drinks', 'categories', 'burgers', 'pastas', 'menus', 'blogs'));
    }
    
    public function about_aboutCafe()
    {
        $aboutCafes = AboutCafe::all();
        $chefs = Chefs::all();

        return view('main.about', compact('aboutCafes', 'chefs'));
    }
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('aboutCafe.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $aboutCafes = new AboutCafe();
        $aboutCafes->title = $request->title;
        $aboutCafes->description = $request->description;
        if ($request->image != null) {
            $imageName = asset("uploads" . "/" . time() . "." . $request->image->extension());
            $request->image->move(public_path('uploads/'), $imageName);
            $aboutCafes->image = $imageName;
          }
        $aboutCafes->save();

        return redirect('/aboutCafe')->with('success','Blog Create successfully,');
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
        $aboutCafes = AboutCafe::where('id', $id)->get();
        return view('aboutCafe.edit', compact('aboutCafes'));
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
        $aboutCafes = AboutCafe::findOrFail($id);
        $aboutCafes->title = $request->title;
        $aboutCafes->description = $request->description;
        if ($request->image != null) {
            $imageName = asset("uploads" . "/" . time() . "." . $request->image->extension());
            $request->image->move(public_path('uploads/'), $imageName);
            $aboutCafes->image = $imageName;
          }
        $aboutCafes->save();

        return redirect('/aboutCafe')->with('success','Blog Create successfully,');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aboutCafes = AboutCafe::find($id);
        $aboutCafes->delete();

        return redirect()->back()->with('success', 'Blog delete syccessfully');
    }
}
