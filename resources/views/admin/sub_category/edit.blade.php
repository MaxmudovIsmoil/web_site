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
                <form action="{{ route('sub-category.update',$subcategory->id) }}" method="POST">
                 {{ method_field('PATCH') }}
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label>{{ __('app.category') }} </label>
                            <select class="select" name="category_id">
                                @isset($category)
                                    @foreach($category as $key => $value)
                                    @if($value->id == $subcategory->category_id)
                                        <option value="{{$subcategory->category_id}}" selected>{{ name($value) }}</option>
                                    @else
                                    <option value="{{ $value->id }}"/>{{ name($value) }}

                                    @endif
                                @endforeach
                                    @endisset
                            </select>
                        </div>
                     </div>   
                    <div class="row">
                        <div class="form-group col-md-12">
                           <label> {{ __('app.subcategory') }} * {{set_text('uz')}} </label>
                           <input type="text" name="name_uz" value="{{ name($subcategory) }}" class="form-control form-control-sm" required/>
                        </div>
                     </div>
                     
                     <div class="row">
                         <div class="form-group col-md-12">
                            <label> {{ __('app.subcategory') }} * {{set_text('ru')}} </label>
                            <input type="text" name="name_ru" value="{{ name($subcategory) }}" class="form-control form-control-sm" required/>
                         </div>
                      </div>
                      <div class="row">
                         <div class="form-group col-md-12">
                            <label> {{ __('app.subcategory') }} * {{set_text('en')}} </label>
                            <input type="text" name="name_en" value="{{ name($subcategory) }}" class="form-control form-control-sm" required/>
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