<?php

namespace App\Http\Controllers;

use App\Subcategory;
use App\Category;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $subcategories= Subcategory::all();

        return view('backend.subcategories.index',compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $subcategories= Subcategory::all();
       $categories = Category::all();
       return view('backend.subcategories.create',compact('subcategories','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // dd($request);
        //validation
        $request->validate([
            "name" => 'required',
            "category" => 'required'

        ]);
        //If include file,upload file
            //dd($request);
        //data insert
            $subcategory = new Subcategory;
            $subcategory->name = $request->name;
           $subcategory->category_id = $request->category;
            $subcategory->save();
        //redirect
           return redirect()->route('subcategories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function show(Subcategory $subcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Subcategory $subcategory)
    {
        $subcategories= Subcategory::all();
       $categories = Category::all();
        return view('backend.subcategories.edit',compact('subcategories','categories','subcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subcategory $subcategory)
    {
        // dd($request);
        //validation
        $request->validate([
            "name" => 'required',
            "category" => 'required'

        ]);
        //If include file,upload file
            $imageName = time().'.'.$request->photo->extension();
            $request->photo->move(public_path('backend/subcategorieimg'),$imageName);
            $path = 'backend/subcategorieimg/'.$imageName;
        //data insert
            $category = new Category;
            $category->name = $request->name;
           $category->category_id = $request->category;
            $category->save();
        //redirect
           return redirect()->route('subcategories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subcategory $subcategory)
    {
        //
    }
}