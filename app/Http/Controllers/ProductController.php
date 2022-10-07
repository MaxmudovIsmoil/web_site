<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Product;
use App\Models\Images;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $product = Product::with('subcategory')->get();
        $images = Images::with('product')->get();
        $sub_categories = SubCategory::with('category')->get();
        return view('admin.product.index',compact('categories','sub_categories','product','images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = $request->all();

        if(isset($inputs['best']))
        {
            $inputs['best'] = true;
        }else{
            $inputs['best'] = false;
        }

        unset($inputs['category_id']);
        if(isset($request->image))
        {
            $fileName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('uploads'), $fileName);
        $inputs['image'] = $fileName;
        }
        
        $product = new Product($inputs);
        $product->save();
        return redirect()->back();
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
        $product = Product::findorFail($id);
        $categories = Category::all();
        $subcategory = SubCategory::findorFail($product->sub_category_id);
        $subcategories = SubCategory::where('category_id',$subcategory->category_id)->get();
        return view('admin.product.edit',compact('subcategories','categories','product','subcategory'));
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
        $inputs = $request->all();
        
        if(isset($inputs['best']))
        {
            $inputs['best'] = true;
        }else{
            $inputs['best'] = false;
        }
        if(isset($request->image))
            {
                $product = Product::find($id);
                if(isset($product->image))
                {
                    unlink("uploads/".$product->image);
                }
                $fileName = time().'.'.$request->image->extension();  
                $request->image->move(public_path('uploads'), $fileName);
                $inputs['image'] = $fileName;
            }
        unset($inputs['_method']);
        unset($inputs['_token']);
        unset($inputs['category_id']);
            $product_update = Product::where('id', $id)
            ->update($inputs);
        return redirect()->route('product.index')->with('message', 'succesfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Product::find($id)->delete();
        if($delete){
            return redirect()->back()->with('message',(__('message.delete_success')));
        }else{
            return redirect()->back()->with('message',(__('message.delete_error')));
        }
    }
}
