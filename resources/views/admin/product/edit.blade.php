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
                <form action="{{ route('product.update',$product->id) }}" method="POST" enctype="multipart/form-data">
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
                                <div class="row mb-1">
                                    <div class="col-md-6">
                                        <label>{{ __('app.category') }} </label>
                                        <select class="select" name="category_id" id="cat2">
                                            @isset($categories  )
                                            @foreach($categories as $key => $value)
                                            @if($value->id == $subcategory->category_id)
                                                <option value="{{$value->id}}" selected>{{ name($value) }}</option>
                                            @else
                                            <option value="{{ $value->id }}"/>{{ name($value) }}
        
                                            @endif
                                        @endforeach
                                            @endisset
                                        </select>
                                    </div>
                                    <div class="col-md-6" id="for_subcat2">
                                        <label>{{ __('app.subcategory') }} </label>
                                        <select class="select" name="sub_category_id">
                                            @isset($subcategories)
                                            @foreach($subcategories as $keys => $values)
                                            @if($values->id == $product->sub_category_id)
                                                <option value="{{$values->id}}" selected>{{ name($values) }}</option>
                                            @else
                                            <option value="{{ $values->id }}"/>{{ name($values) }}
        
                                            @endif
                                        @endforeach
                                            @endisset
                                        </select>
                                    </div>
                                    <div class="col-md-6" style="display: none" id="subcat2">
                                        <label id="add_select2"> {{ __('app.subcategory') }} </label>
                                     </div>
                                </div>
                                    <div class="row">
                                       <div class="form-group col-md-12">
                                          <label> {{ __('app.product') }} * {{set_text('uz')}} </label>
                                          <input type="text" name="name_uz" value="{{ $product->name_uz }}" class="form-control form-control-sm" required/>
                                       </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                           <label> {{ __('app.product') }} * {{set_text('ru')}} </label>
                                           <input type="text" name="name_ru" value="{{ $product->name_ru }}" class="form-control form-control-sm" required/>
                                        </div>
                                     </div>
                                     <div class="row">
                                        <div class="form-group col-md-12">
                                           <label> {{ __('app.product') }} * {{set_text('en')}} </label>
                                           <input type="text" name="name_en" value="{{ $product->name_en }}" class="form-control form-control-sm" required/>
                                        </div>
                                     </div>
                                     <div class="row">
                                        <div class="form-group col-md-12">
                                            <label>{{ __('app.desc') }} * {{set_text('en')}}</label>
                                            <textarea  name="desc_uz" class="form-control" required>{{ $product->desc_uz }}</textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label>{{ __('app.desc') }} * {{set_text('ru')}}</label>
                                            <textarea  name="desc_ru" class="form-control" required>{{ $product->desc_ru }}</textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label>{{ __('app.desc') }} * {{set_text('en')}}</label>
                                            <textarea  name="desc_en" class="form-control" required>{{ $product->desc_en }}</textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                       <div class="form-group col-md-6">
                                           <label>{{ __('app.madel') }}</label>
                                           <input type="text" name="madel" value="{{ $product->madel }}"  class="form-control form-control-sm" required/>
                                       </div>
                                       <div class="form-group col-md-6">
                                          <label> {{ __('app.price') }} </label>
                                          <input type="number" name="price" value="{{ $product->price }}" class="form-control form-control-sm" required/>
                                       </div>
                                   </div>
                                    <div class="row">
                                       <div class="form-group col-md-3">
                                           <label> {{ __('app.pop') }} </label>
                                           @if ($product->best == true)
                                           <input type="checkbox" name="best" value="true" checked false class="form-control" style="height: 20px"/>
                                            @else
                                           <input type="checkbox" name="best" value="true" class="form-control" style="height: 20px"/>

                                           @endif
                                       </div>
                                       @if (isset($partner->image))
                                    <div class="form-group col-md-3">
                                        <img src="{{asset('uploads/'.$partner->image)}}" width="30px">

                                     </div>
                                           
                                       @endif
                                       <div class="form-group col-md-3">
                                        <img src="{{asset('uploads/'.$product->image)}}" alt="">
                                    </div>
                                       <div class="form-group col-md-4">
                                          <label> {{ __('app.image') }} </label>
                                          <input type="file" name="image" class="form-control form-control-sm"/>
                                       </div>
                                   </div>
                              </div>
                           </div>
                        </div>
                     </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">{{ __('app.saved') }}</button>
                    </div>
                </form>
              </div>
           </div>
        </div>
     </div>
    
      </div>
@endsection
@section('script')
    <script>
        $(document).ready(function(){
        $("#cat2").change(function(){
            var cat = $("#cat2").val();
            var _token   = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
            url: "/cat/get_subcat",
            type:"POST",
            data:{
               data:cat,
               _token: _token
            },
            success:function(response){
               // $("#place_dist").val('');
               $("#for_subcat2").remove();
               $("#subcat2").css("display","block");
               // array.forEach(response.district => {
               //    $( "#add_option" ).after( "<option style='display: none' value=''></option>" );
               // });


               $(`#place_dist2`).remove();
               $( "#add_select2" ).after(`<select class='select form-control form-control-lg' name='sub_category_id' id='place_dist2' required>
                                 <option value='' disabled selected hidden id='add_option2'></option>
                              </select>`);
               $.each(response.subcategory, function(index, value){
                  $( "#add_option2" ).after(`<option value='${value.id}' required>${value.name_ru}</option>`);
               });
               $("#subcat .select2-container--default").remove();
               

            },
            error: function(error) {
               console.log(error);
            }
            });
        });
    });
    </script>
@endsection