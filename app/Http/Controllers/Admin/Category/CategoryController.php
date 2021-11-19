<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
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
        $category = Category::all();
        return view('admin.category.index',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats = Category::where('parent_id',0)->get();
        // dd($cats);
        return view('admin.category.create',compact('cats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
        [
            'name'=>'required|max:255',
            'description'=>'nullable|max:600',
            'parent_id'=>'required'
        ]);

        // dd($request->all());
        Category::create($request->all());
        return redirect('/admin/category')->with('success','Category added successfully');
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
        $category = Category::find($id);
        $cats = Category::where('parent_id',0)->get();
        $categories = Category::all();
        return view('admin.category.edit',compact('category'    ,'categories'));
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
        $this->validate($request,
        [
            'name'=>'required|max:255',
            'description'=>'nullable|max:600',
            'parent_id'=>'required'
        ]);
        // dd($request->all());

        Category::find($id)->update($request->all());
        return redirect('/admin/category')->with('success','Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = Category::where('parent_id',$id)->get();
        foreach($del as $d){
            $d->delete();
        }
        Category::find($id)->delete();
        return redirect('/admin/category')->with('success','Category deleted successfully');

    }
}
