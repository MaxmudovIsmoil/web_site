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
                <form action="{{ route('news.update',$news->id) }}" method="POST" enctype="multipart/form-data">
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
                                          <label> {{ __('app.category') }} * {{set_text('ru')}} </label>
                                          <input type="text" name="title_uz" value="{{$news->title_uz}}" class="form-control form-control-sm"/>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="form-group col-md-12">
                                          <label> {{ __('app.hospital') }} * {{set_text('ru')}}</label>
                                          <input type="text" name="title_ru" value="{{$news->title_ru}}" class="form-control form-control-sm"/>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="form-group col-md-12">
                                          <label> {{ __('app.hospital') }} * {{set_text('ru')}} </label>
                                          <input type="text" name="title_en" value="{{$news->title_en}}" class="form-control form-control-sm"/>
                                       </div>
                                    </div>
                                    <div class="row">
                                         <div class="form-group col-md-12">
                                             <label>Your Message: * {{set_text('ru')}}</label>
                                             <textarea rows="5" cols="5" name="desc_uz" class="form-control" placeholder="Enter message">{{$news->desc_uz}}</textarea>
                                         </div>
                                         
                                     </div>
                                    
                                     <div class="row">
                                       <div class="form-group col-md-12">
                                           <label>Your Message: * {{set_text('ru')}}</label>
                                           <textarea rows="5" cols="5" name="desc_ru" class="form-control" placeholder="Enter message">{{$news->desc_ru}}</textarea>
                                       </div>
                                   </div>
                                    
                                     <div class="row">
                                       <div class="form-group col-md-12">
                                           <label>Your Message: * {{set_text('ru')}}</label>
                                           <textarea rows="5" cols="5" name="desc_en" class="form-control" placeholder="Enter message">{{$news->desc_en}}</textarea>
                                       </div>
                                   </div>
                                   <div class="row">
                                    @if (isset($news->image))
                                    <div class="form-group col-md-4">
                                        <img src="{{asset('uploads/'.$news->image)}}" width="30px">

                                     </div>
                                           
                                       @endif
                                    
                                    <div class="form-group col-md-4">
                                       <label> {{ __('app.hospital') }} </label>
                                       <input type="file" name="image" class="form-control form-control-sm"/>
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