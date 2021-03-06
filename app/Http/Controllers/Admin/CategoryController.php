<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $arr['categories'] = Category::all();
        return view ('admin.category.index') ->with($arr);
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Category $category)
    {
        $validatedData = $this->validate($request, [
            'category_name'         => 'required|min:3|max:255',
            'slug'          => 'required|min:3|max:255|unique:categories',
        ]);
    
      $validatedData['slug'] = Str::slug($validatedData['slug'], '-');
      Category::create($validatedData);
      return redirect() -> route('admin.category.index')->with('success','New Category Added');
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
    public function edit(Category $category)
    {
        $arr['category'] = $category;
        return view('admin.category.edit')->with($arr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $validatedData = $this->validate($request, [
            'title'         => 'required|min:3|max:255',
            'slug'          => 'required|min:3|max:255|unique:categories,id,' . $category->slug,
          ]);
    
          $validatedData['slug'] = Str::slug($validatedData['slug'], '-');
    
          $category->update($validatedData);

        return redirect() -> route('admin.category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::destroy($id);
        return redirect() -> route('admin.category.index');
    }
}
