<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view("admin.product.index",compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::where('parent_id','!=',0)->get();
        // dd($category);
        return view("admin.product.create",compact('category'));
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
            'name'=>'required|string|max:240',
            'description'=>'nullable|string|max:2000',
            'price'=>'required|numeric|gt:0',
            'availability'=>'nullable|integer',
            'photo.*'=>'nullable|mimes:jpg,jpeg, png, webp, svg',
            'featured_photo'=>'nullable|mimes:jpg,jpeg, png, webp, svg',
            'category_id'=>'required|integer'
        ]);
        
        $data = $request->all();

        if($request->hasFile('featured_photo')){
            $filenameWithExt = $request->file('featured_photo')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('featured_photo')->getClientOriginalExtension();
            $photo = $filename.'_'.time().".".$extension;
            $path = $request->file('featured_photo')->storeAs('public/images/product', $photo);
            $data['featured_photo'] = $photo;
        }
        if($request->hasFile('photo'))
        {
            foreach($request->file('photo') as $file)
            {
                $FilenameWithExtension1 = $file->getClientOriginalName();
                $Filename1 = pathinfo($FilenameWithExtension1, PATHINFO_FILENAME);
                $Extension1 = $file->getClientOriginalExtension();
                $FileToStore1 = $Filename1.'_'.time().'.'.$Extension1;
                $path1 = $file->storeAs('public/images/product',$FileToStore1);
                $img[] = $FileToStore1; 
            }
            $data['photo'] = json_encode($img);   

            
        }
        // dd($data);
        Product::create($data);
        return redirect('admin/product')->with('success','Product added successfully');

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
        $product = Product::find($id);
        $category = Category::where('parent_id','!=','0')->get();
        return view('admin.product.edit',compact('product','category'));
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

        $data = $request->all();
        // dd($data);
        $pro = Product::find($id);
        if($request->hasFile('featured_photo')){
            $filenameWithExt = $request->file('featured_photo')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('featured_photo')->getClientOriginalExtension();
            $photo = $filename.'_'.time().".".$extension;
            Storage::delete('public/images/product/'.$pro->featured_photo);
            $path = $request->file('featured_photo')->storeAs('public/images/product', $photo);
            $data['featured_photo'] = $photo;
        }
        if($request->hasFile('photo'))
        {
            foreach($request->file('photo') as $file)
            {
                $FilenameWithExtension1 = $file->getClientOriginalName();
                $Filename1 = pathinfo($FilenameWithExtension1, PATHINFO_FILENAME);
                $Extension1 = $file->getClientOriginalExtension();
                $FileToStore1 = $Filename1.'_'.time().'.'.$Extension1;
                $path1 = $file->storeAs('public/images/product',$FileToStore1);
                if(isset($pro->photo))
                {
                    foreach(json_decode($pro->photo) as $img)
                    Storage::delete('public/images/product/'.$img);
                }

                $image[] = $FileToStore1; 
            }
            $data['photo'] = json_encode($image);    
        }
            if(isset($request->availability) && $request->availability=="on")
            {
                $data['availability'] = 1;

            }else{
                $data['availability'] = 0;
            }
        // dd($data);

        $pro->update($data);
        return redirect('admin/product')->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pro = Product::find($id);
        Storage::delete('public/images/product/'.$pro->featured_photo);
        if(isset($pro->photo))
        {
            foreach(json_decode($pro->photo) as $img)
            Storage::delete('public/images/product/'.$img);
        }
        $pro->delete();
        return redirect()->back()->with('success','Product deleted successfully');
    }
}
