<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::all();
        return view('admin.about.index',compact('about'));
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
            if(isset($request->video))
            {
                $fileName = time().'.'.$request->video->extension();  
                $request->video->move(public_path('uploads'), $fileName);
                $inputs['video'] = $fileName;
            }
        $about = new About($inputs);
        $about->save();
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
        $about = About::findorFail($id);
        return view('admin.about.edit',compact('about'));
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
                $about = About::find($id);
                if(isset($about->image))
                {
                    unlink("uploads/".$about->image);
                }
                $fileName = time().'.'.$request->image->extension();  
                $request->image->move(public_path('uploads'), $fileName);
                $inputs['image'] = $fileName;
            }
            if(isset($request->video))
            {
                $about = About::find($id);
                if(isset($about->video))
                {
                    unlink("uploads/".$about->video);
                }
                $fileName = time().'.'.$request->video->extension();  
                $request->video->move(public_path('uploads'), $fileName);
                $inputs['video'] = $fileName;
            }

        unset($inputs['_method']);
        unset($inputs['_token']);
            $about_update = About::where('id', $id)
            ->update($inputs);
        return redirect()->route('about.index')->with('message', 'succesfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = About::find($id)->delete();
        if($delete){
            return redirect()->back()->with('message',(__('message.delete_success')));
        }else{
            return redirect()->back()->with('message',(__('message.delete_error')));
        }
    }
}
