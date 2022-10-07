@extends('admin.app')
@section('css')

@endsection
@section('content')

<div class="content container-fluid">
    @include('admin.partials.alert')
    <div class="page-header">
    <div class="row align-items-center">
        <div class="col-md-12">
            <div class="d-flex align-items-center">
                <ul class="breadcrumb ml-2">
                {{-- <li class="breadcrumb-item"><a href="/"><i class="fas fa-home"></i></a></li> --}}
                {{-- <li class="breadcrumb-item active">{{ __('app.add_hospital') }} </li> --}}
                </ul>
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
                             <th class="text-right"> {{ __('app.action') }} </th>
                          </tr>
                       </thead>
                       <tbody>
                           @isset($categories)
                           @foreach($categories as $key => $value)
                           <tr>
                            <td> {{ $key+1 }} </td>
                            <td> {{ name($value) }} </td>
                            <td class="text-right">
                               <a href="{{ route('category.edit',$value->id) }}" class="btn btn-sm btn-white text-success mr-2"><i class="fas fa-edit mr-1"></i></a>
                               
                               <a href="{{ route('category.delete',$value->id) }}" data-method="delete" class="btn btn-sm btn-white text-danger mr-2"><i class="far fa-trash-alt mr-1"></i></a>
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
   <div class="modal-dialog modal-dialog-centered" role="document">
     <div class="modal-content">
        <form action="{{ route('category.store') }}" method="POST">
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
                              <label> {{ __('app.category') }} * {{set_text('uz')}} </label>
                              <input type="text" name="name_uz" class="form-control form-control-sm" required/>
                           </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                               <label> {{ __('app.category') }} * {{set_text('ru')}}</label>
                               <input type="text" name="name_ru" class="form-control form-control-sm" required/>
                            </div>
                         </div>
                         <div class="row">
                            <div class="form-group col-md-12">
                               <label> {{ __('app.category') }} * {{set_text('en')}} </label>
                               <input type="text" name="name_en" class="form-control form-control-sm" required/>
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