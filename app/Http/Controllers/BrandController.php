<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::all();

        return view('backend.brands.index',compact('brands'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::all();
       return view('backend.brands.create',compact('brands'));
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
            "photo" => 'required'

        ]);
        //If include file,upload file
            $imageName = time().'.'.$request->photo->extension();
            $request->photo->move(public_path('backend/branddimg'),$imageName);
            $path = 'backend/branddimg/'.$imageName;
        //data insert
            $brand = new Brand;
            $brand->name = $request->name;
            $brand->photo = $path;
            $brand->save();
        //redirect
           return redirect()->route('brands.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
         $brands = Brand::all();
        return view('backend.brands.edit',compact('brands','brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
         //dd($request);
        //validation
         $request->validate([
            "name" => 'required',
            "photo" => 'sometimes',
            "oldphoto" => 'required'

        ]);
        //file upload, if data
         if ($request->hasFile('photo')){
               $imageName = time().'.'.$request->photo->extension();
            $request->photo->move(public_path('backend/branddimg'),$imageName);
            $path = 'backend/branddimg/'.$imageName;

         }else{
                $path = $request->oldphoto;
         }
        //insert data
         $brand->name = $request->name;
         $brand->photo = $path;
        
         $brand->save();
        //redirect

            return redirect()->route('brands.index');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
       //
}
}