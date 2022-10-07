@extends('admin.app')
@section('css')

@endsection
@section('content')

<div class="content container-fluid">
   @if ($errors->any())
   <div class="alert alert-danger" id="message">
       <ul>
           @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
           @endforeach
       </ul>
   </div>
   @endif
   @if (Session::has('message'))
   <div class="alert alert-primary" id="message">
       <ul>
            <li>{{ Session::get('message') }}</li>
       </ul>
   </div>
   @endif
    <div class="page-header">
    <div class="row align-items-center">
        <div class="col-md-12">
            <div class="d-flex align-items-center">
                <div class="ml-auto" > <button type="button" data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-outline-primary"> {{ __('app.saved')}} </button> </div>
            </div>
        </div>
    </div>
    </div>
   
    
     <div class="row">
        <div class="col-sm-12">
           <div class="card">
              <div class="card-body">
                 <div class="table-responsive">
                    <table class="datatable table table-stripped">
                       <thead>
                          <tr>
                             <th> № </th>
                             <th> {{ __('app.name') }} </th>
                             <th> {{ __('app.desc') }} </th>
                             <th> {{ __('app.image') }} </th>
                             <th> {{ __('app.video') }} </th>
                             <th class="text-right"> {{ __('app.action') }} </th>
                          </tr>
                       </thead>
                       <tbody>
                           @isset($about)
                           @foreach($about as $key => $value)
                           <tr>
                            <td> {{ $key+1 }} </td>
                            <td> {{ title($value) }} </td>
                            <td> {{ desc($value) }} </td>
                            <td> <img src="{{asset('uploads/'.$value->image)}}" width="30px" height="30px"></td>
                            <td> 
                                <div
                                width="30px" height="30px"
                                func-id="1"
                                cms-sort="list-video"
                                config_cms_number=""
                                >
                                <!-- CUSTOM 0/VIDEO/PUBLIC_VIDEO_6:2045 BEGIN -->
                                <!-- tem04-video -->
                                <video width="300px" height="100px"
                                    controls
                                    src="{{asset('uploads/'.$value->video)}}"
                                    poster="{{asset('uploads/'.$value->image)}}"
                                ></video>
                                </div>
                            </td>
                            <td class="text-right">
                               <a href="{{ route('about.edit',$value->id) }}" class="btn btn-sm btn-white text-success mr-2"><i class="fas fa-edit mr-1"></i></a>
                               
                               {{-- <a href="{{ route('about.delete',$value->id) }}" data-method="delete" class="btn btn-sm btn-white text-danger mr-2"><i class="far fa-trash-alt mr-1"></i></a> --}}
                            </td>
                         </tr> 
                           @endforeach
                           @endisset
                       </tbody>
                    </table>
                 </div>
              </div>
           </div>
        </div>
     </div>
    
      </div>
<div class="modal fade show" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 1000px">
     <div class="modal-content">
        <form action="{{ route('about.store') }}" method="POST" class="needs-validation" novalidate="" enctype="multipart/form-data">
            @csrf
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="col-md-12">
               <div class="card">
                  <div class="card-body">
                        <div class="row">
                           <div class="form-group col-md-12">
                              <label> {{ __('app.title') }} * {{set_text('ru')}} </label>
                              <input type="text" name="title_uz" class="form-control form-control-sm"/>
                           </div>
                        </div>
                        <div class="row">
                           <div class="form-group col-md-12">
                              <label> {{ __('app.title') }} * {{set_text('ru')}}</label>
                              <input type="text" name="title_ru" class="form-control form-control-sm"/>
                           </div>
                        </div>
                        <div class="row">
                           <div class="form-group col-md-12">
                              <label> {{ __('app.title') }} * {{set_text('ru')}} </label>
                              <input type="text" name="title_en" class="form-control form-control-sm"/>
                           </div>
                        </div>
                        <div class="row">
                             <div class="form-group col-md-12">
                                 <label> {{ __('app.desc') }} * {{set_text('ru')}}</label>
                                 <textarea rows="5" cols="5" name="desc_uz" class="form-control" placeholder="Enter message"></textarea>
                             </div>
                             
                         </div>
                        
                         <div class="row">
                           <div class="form-group col-md-12">
                               <label> {{ __('app.desc') }} * {{set_text('ru')}}</label>
                               <textarea rows="5" cols="5" name="desc_ru" class="form-control" placeholder="Enter message"></textarea>
                           </div>
                       </div>
                        
                         <div class="row">
                           <div class="form-group col-md-12">
                               <label> {{ __('app.desc') }} * {{set_text('ru')}}</label>
                               <textarea rows="5" cols="5" name="desc_en" class="form-control" placeholder="Enter message"></textarea>
                           </div>
                       </div>
                       <div class="row">
                        <div class="form-group col-md-4">
                            <label> {{ __('app.image') }} </label>
                            <input type="file" name="image" class="form-control form-control-sm"/>
                         </div>
                        <div class="form-group col-md-4">
                           <label> {{ __('app.video') }} </label>
                           <input type="file" name="video" class="form-control form-control-sm"/>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
    </form>
     </div>
   </div>
</div>
@endsection