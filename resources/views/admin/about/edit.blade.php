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
   
    
     <div class="row">
        <div class="col-sm-12">
           <div class="card">
              <div class="card-body">
                <form action="{{ route('about.update',$about->id) }}" method="POST" enctype="multipart/form-data">
                 {{ method_field('PATCH') }}
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
                                          <label> {{ __('app.name') }} * {{set_text('ru')}} </label>
                                          <input type="text" name="title_uz" value="{{$about->title_uz}}" class="form-control form-control-sm"/>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="form-group col-md-12">
                                          <label> {{ __('app.name') }} * {{set_text('ru')}}</label>
                                          <input type="text" name="title_ru" value="{{$about->title_ru}}" class="form-control form-control-sm"/>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="form-group col-md-12">
                                          <label> {{ __('app.name') }} * {{set_text('ru')}} </label>
                                          <input type="text" name="title_en" value="{{$about->title_en}}" class="form-control form-control-sm"/>
                                       </div>
                                    </div>
                                    <div class="row">
                                         <div class="form-group col-md-12">
                                             <label>{{ __('app.desc') }} * {{set_text('ru')}}</label>
                                             <textarea rows="5" cols="5" name="desc_uz" class="form-control" placeholder="Enter message">{{$about->desc_uz}}</textarea>
                                         </div>
                                         
                                     </div>
                                    
                                     <div class="row">
                                       <div class="form-group col-md-12">
                                           <label>{{ __('app.desc') }} * {{set_text('ru')}}</label>
                                           <textarea rows="5" cols="5" name="desc_ru" class="form-control" placeholder="Enter message">{{$about->desc_ru}}</textarea>
                                       </div>
                                   </div>
                                    
                                     <div class="row">
                                       <div class="form-group col-md-12">
                                           <label>{{ __('app.desc') }} * {{set_text('ru')}}</label>
                                           <textarea rows="5" cols="5" name="desc_en" class="form-control" placeholder="Enter message">{{$about->desc_en}}</textarea>
                                       </div>
                                   </div>
                                   <div class="row">
                                    @if (isset($about->image))
                                    <div class="form-group col-md-4">
                                        <img src="{{asset('uploads/'.$about->image)}}" width="30px">

                                     </div>
                                    
                                       @endif
                                       <div class="form-group col-md-6">
                                        <label> {{ __('app.image') }} </label>
                                        <input type="file" name="image" class="form-control form-control-sm"/>
                                     </div>
                                    <div class="form-group col-md-4">
                                        <div
                                width="30px" height="30px"
                                func-id="1"
                                cms-sort="list-video"
                                config_cms_number=""
                                >
                                <!-- CUSTOM 0/VIDEO/PUBLIC_VIDEO_6:2045 BEGIN -->
                                <!-- tem04-video -->
                                <video width="300px" height="200px"
                                    controls
                                    src="{{asset('uploads/'.$about->video)}}"
                                    poster="{{asset('uploads/'.$about->image)}}"
                                ></video>
                                </div>
                                    </div>
                                    <div class="form-group col-md-3">
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
     </div>
    
      </div>
@endsection