<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Models\Partner;



class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partner = Partner::all();
        return view('admin.partner.index',compact('partner'));
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
        $partner = new Partner($inputs);
        $partner->save();
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
        $partner = Partner::findorFail($id);
        return view('admin.partner.edit',compact('partner'));
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
                $partner = Partner::find($id);
                if(isset($partner->image))
                {
                    unlink("uploads/".$partner->image);
                }
                $fileName = time().'.'.$request->image->extension();  
                $request->image->move(public_path('uploads'), $fileName);
                $inputs['image'] = $fileName;
            }
        unset($inputs['_method']);
        unset($inputs['_token']);
            $partner_update = Partner::where('id', $id)
            ->update($inputs);
        return redirect()->route('partner.index')->with('message', 'succesfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Partner::find($id)->delete();
        if($delete){
            return redirect()->back()->with('message',(__('message.delete_success')));
        }else{
            return redirect()->back()->with('message',(__('message.delete_error')));
        }
    }
}
