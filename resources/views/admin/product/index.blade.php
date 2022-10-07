@extends('admin.app')
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
                <div class="d-none" > <button type="button" data-toggle="modal" data-target="#exampleModalCenter3" id="awer" class="btn btn-outline-primary"> {{ __('app.saved')}} </button> </div>
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
                             <th> {{ __('app.madel') }} </th>
                             <th> {{ __('app.price') }} </th>
                             <th> {{ __('app.pop') }} </th>
                             <th> {{ __('app.image') }} </th>
                             <th class="text-right"> {{ __('app.action') }} </th>
                          </tr>
                       </thead>
                       <tbody>
                           @isset($product)
                           @foreach($product as $key => $value)
                           <tr>
                            <td> {{ $key+1 }} </td>
                            <td> {{ name($value) }}</td>
                            <td> {{ $value->madel }}</td>
                            <td> {{ $value->price }}</td>
                            @if ($value->best == false)
                            <td>  </td>
                                
                            @else
                            <td> <span class="badge bg-info-light"> {{ __('app.pop') }} </span> </td>
                                
                            @endif
                            @if (isset($value->image))
                            <td> <img src="{{asset('uploads/'.$value->image)}}" width="30px" height="30px">
                                 @isset($images)
                                    @foreach($images as $image)
                                       @if ($image->product_id == $value->id)
                                       <img src="{{asset('uploads/'.$image->image)}}" width="30px" height="30px" onclick="imageEdit('image/{{$image->id}}','uploads/{{$image->image}}')"/>
                                          
                                       @endif
                                    @endforeach
                                 @endisset
                           </td>
                            @else
                            <td>  </td>
                            @endif
                            <td class="text-right">
                              {{-- <input type="file" name="image" style="width: 123px"/> --}}
                              <button type="button" data-toggle="modal" data-target="#exampleModalCenter2" class="btn btn-outline-primary" onclick="setValue({{$value->id}})"> + </button>
                               <a href="{{ route('product.edit',$value->id) }}" class="btn btn-sm btn-white text-success mr-2"><i class="fas fa-edit mr-1"></i></a>
                               
                               <a href="{{ route('product.delete',$value->id) }}" data-method="delete" class="btn btn-sm btn-white text-danger mr-2"><i class="far fa-trash-alt mr-1"></i></a>
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
        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
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
                            <select class="select" name="category_id" id="cat" required>
                                @isset($categories)
                                     <option value="" disabled selected hidden></option>
       
                                     @foreach($categories as $key => $value)
                                     <option value="{{ $value->id }}"/>{{ name($value) }}
                                  @endforeach
                                     @endisset
                            </select>
                        </div>
                        <div class="col-md-6" id="for_subcat">
                            <label>{{ __('app.category') }} </label>
                            <select class="select" name="sub_category_id" >
                              <option  disabled  hidden required></option>

                            </select>
                        </div>
                        <div class="col-md-6" style="display: none" id="subcat">
                            <label id="add_select"> {{ __('app.category') }} </label>
                            
                         </div>
                    </div>
                        <div class="row">
                           <div class="form-group col-md-12">
                              <label> {{ __('app.subcategory') }} * {{set_text('uz')}} </label>
                              <input type="text" name="name_uz" class="form-control form-control-sm" required/>
                           </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                               <label> {{ __('app.subcategory') }} * {{set_text('ru')}} </label>
                               <input type="text" name="name_ru" class="form-control form-control-sm" required/>
                            </div>
                         </div>
                         <div class="row">
                            <div class="form-group col-md-12">
                               <label> {{ __('app.subcategory') }} * {{set_text('en')}} </label>
                               <input type="text" name="name_en" class="form-control form-control-sm" required/>
                            </div>
                         </div>
                         <div class="row">
                            <div class="form-group col-md-12">
                                <label>Description * {{set_text('en')}}</label>
                                <textarea id="mytextarea" name="desc_uz" class="form-control" placeholder="Enter message" required></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label>Description * {{set_text('ru')}}</label>
                                <textarea id="mytextarea" name="desc_ru" class="form-control" placeholder="Enter message" required></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label>Description * {{set_text('uz')}}</label>
                                <textarea id="mytextarea" name="desc_en" class="form-control" placeholder="Enter message" required></textarea>
                            </div>
                        </div>
                        <div class="row">
                           <div class="form-group col-md-6">
                               <label>Model</label>
                               <input type="text" name="madel"  class="form-control form-control-sm" required/>
                           </div>
                           <div class="form-group col-md-6">
                              <label> Price </label>
                              <input type="number" name="price" class="form-control form-control-sm" required/>
                           </div>
                       </div>
                        <div class="row">
                           <div class="form-group col-md-3">
                               <label>The Best</label>
                               <input type="checkbox" name="best" value="true" class="form-control" style="height: 20px"/>
                           </div>
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
            <button type="submit" class="btn btn-primary">{{ __('app.saved') }}</button>
        </div>
    </form>

     </div>
   </div>
</div>
<div class="modal fade show" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 1000px">
     <div class="modal-content">
        <form action="{{ route('image.store') }}" method="POST" enctype="multipart/form-data">
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
                           <div class="form-group col-md-3 d-none">
                               <label>The Best</label>
                               <input type="text" name="product_id" id="pimage" class="form-control" style="height: 20px"/>
                           </div>
                           <div class="form-group col-md-6">
                              <label> {{ __('app.hospital') }} </label>
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
<div class="modal fade show" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 1000px">
     <div class="modal-content">
      <form action="" method="POST" enctype="multipart/form-data" id="editform">
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
                           <div class="form-group col-md-4">
                              <img src="" width="30px" id="imageAjax">
                           </div>
                           <div class="form-group col-md-4">
                              <input type="file" name="image" class="form-control form-control-sm" required />

                           </div>
                           <div class="form-group col-md-4 " >
                              <button type="submit" class="btn btn-primary" id="afterjs">{{ __('app.update') }}</button>

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
@endsection
@section('script')
    <script>
      function imageEdit(id,image)
      {
         $('#imageAjax').attr('src',image);
         $('#editform').attr('action',id)
         $('#afterjs').after("<a href="+id+"/delete class='btn btn-sm btn-white text-success ml-4'><i class='far fa-trash-alt mr-1'></i></a>");
      
         $('#awer').click();
         
      }
      function setValue(id)
      {
         $('#pimage').val(id);
      }
        $(document).ready(function(){
        $("#cat").change(function(){
            var cat = $("#cat").val();
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
               $("#for_subcat").remove();
               $("#subcat").css("display","block");
               // array.forEach(response.district => {
               //    $( "#add_option" ).after( "<option style='display: none' value=''></option>" );
               // });

               
               $(`#place_dist`).remove();
               $( "#add_select" ).after(`<select class='select form-control form-control-lg' name='sub_category_id' id='place_dist' required>
                                 <option value='' disabled selected hidden id='add_option'></option>
                              </select>`);
               $.each(response.subcategory, function(index, value){
                  $( "#add_option" ).after(`<option value='${value.id}' required>${value.name_ru}</option>`);
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