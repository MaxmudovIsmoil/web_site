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
   
    
     <div class="row">AC
        <div class="col-sm-12">
           <div class="card">
              <div class="card-body">
                <form action="{{ route('text.update',$text->id) }}" method="POST">
               {{ method_field('PATCH') }}

                    @csrf
                    <div class="row">
                        <div class="form-group col-md-12">
                           <label> {{ __('app.text') }} * {{set_text('uz')}} </label>
                           <input type="text" name="name_uz" value="{{ $text->name_uz }}" class="form-control form-control-sm" required/>
                        </div>
                     </div>
                     <div class="row">
                         <div class="form-group col-md-12">
                            <label> {{ __('app.text') }} * {{set_text('ru')}} </label>
                            <input type="text" name="name_ru" value="{{ $text->name_ru }}" class="form-control form-control-sm" required/>
                         </div>
                      </div>
                      <div class="row">
                         <div class="form-group col-md-12">
                            <label> {{ __('app.text') }} * {{set_text('en')}} </label>
                            <input type="text" name="name_en" value="{{ $text->name_en }}" class="form-control form-control-sm" required/>
                         </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-md-12">
                           <label> {{ __('app.text') }} * {{set_text('uz')}} </label>
                           <textarea rows="5" cols="5" name="desc_uz" class="form-control" placeholder="Enter message">{{$text->desc_uz}}</textarea>

                        </div>
                     </div><div class="row">
                        <div class="form-group col-md-12">
                           <label> {{ __('app.text') }} * {{set_text('uz')}} </label>
                           <textarea rows="5" cols="5" name="desc_ru" class="form-control" placeholder="Enter message">{{$text->desc_ru}}</textarea>
                        </div>
                     </div><div class="row">
                        <div class="form-group col-md-12">
                           <label> {{ __('app.text') }} * {{set_text('uz')}} </label>
                           <textarea rows="5" cols="5" name="desc_en" class="form-control" placeholder="Enter message">{{$text->desc_en}}</textarea>

                        </div>
                     </div>
                     <div class="text-right">
                        <button type="submit" class="btn btn-primary">{{ __('app.update') }}</button>
                        </div>

                </form>
              </div>
           </div>
        </div>
     </div>
    
      </div>
@endsection