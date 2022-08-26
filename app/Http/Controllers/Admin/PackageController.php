<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arr['packages'] = Package::all();
        return view ('admin.package.index') ->with($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.package.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $this->validate($request, [
            'package_name' => 'required',
            'package_amount' => 'required',
            'package_duration' => 'required',
            'package_featured' => 'nullable',
            'description' => 'required',
        ]);
    
      Package::create($validatedData);
      return redirect() -> route('admin.package.index')->with('success','Succesfully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function show(Package $package)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function edit(Package $package)
    {
       $arr['package'] = $package;
       return view('admin.package.edit')->with($arr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Package $package)
    {
        $validatedData = $this->validate($request, [
            'package_name' => 'required',
            'package_amount' => 'required',
            'package_duration' => 'required',
            'package_featured' => 'nullable',
            'description' => 'required',
        ]);
    
      $package->update($validatedData);
      return redirect() -> route('admin.package.index')->with('success','Succesfully Added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      
            Package::destroy($id);
            return redirect() -> route('admin.package.index');
   
    }
}
