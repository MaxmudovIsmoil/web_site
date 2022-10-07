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
                <form action="{{ route('category.update',$category->id) }}" method="POST">
               {{ method_field('PATCH') }}

                    @csrf
                    <div class="row">
                        <div class="form-group col-md-12">
                           <label> {{ __('app.category') }} * {{set_text('uz')}} </label>
                           <input type="text" name="name_uz" value="{{ $category->name_uz }}" class="form-control form-control-sm" required/>
                        </div>
                     </div>
                     <div class="row">
                         <div class="form-group col-md-12">
                            <label> {{ __('app.category') }} * {{set_text('ru')}} </label>
                            <input type="text" name="name_ru" value="{{ $category->name_ru }}" class="form-control form-control-sm" required/>
                         </div>
                      </div>
                      <div class="row">
                         <div class="form-group col-md-12">
                            <label> {{ __('app.category') }} * {{set_text('en')}} </label>
                            <input type="text" name="name_en" value="{{ $category->name_en }}" class="form-control form-control-sm" required/>
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
<div class="modal fade show" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
     <div class="modal-content">
        <form action="{{ route('category.store') }}" method="POST">
            @csrf
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
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
                              <label> {{ __('app.hospital') }} </label>
                              <input type="text" name="name_uz" class="form-control form-control-sm"/>
                           </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                               <label> {{ __('app.hospital') }} </label>
                               <input type="text" name="name_ru" class="form-control form-control-sm"/>
                            </div>
                         </div>
                         <div class="row">
                            <div class="form-group col-md-12">
                               <label> {{ __('app.hospital') }} </label>
                               <input type="text" name="name_en" class="form-control form-control-sm"/>
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