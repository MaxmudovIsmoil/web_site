<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Images;

class ImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

        if(isset($request->image))
            {
                $fileName = time().'.'.$request->image->extension();  
                $request->image->move(public_path('uploads'), $fileName);
                $inputs['image'] = $fileName;
            }
        $images = new Images($inputs);
        $images->save();
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
        
        if(isset($request->image))
            {
                $image = Images::find($id);
                    if(isset($image->image))
                    {
                        unlink("uploads/".$image->image);
                    }
                $fileName = time().'.'.$request->image->extension();  
                $request->image->move(public_path('uploads'), $fileName);
                $inputs['image'] = $fileName;
            }
        unset($inputs['_method']);
        unset($inputs['_token']);
            $image_update = Images::where('id', $id)
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
        $delete = Images::find($id)->delete();
        if($delete){
            return redirect()->back()->with('message',(__('message.delete_success')));
        }else{
            return redirect()->back()->with('message',(__('message.delete_error')));
        }
    }
}
