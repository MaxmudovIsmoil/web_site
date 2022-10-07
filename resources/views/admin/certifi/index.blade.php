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
                             <th> certifi name </th>
                             <th> image </th>
                             <th class="text-right"> {{ __('app.action') }} </th>
                          </tr>
                       </thead>
                       <tbody>
                           @isset($certifi)
                           @foreach($certifi as $key => $value)
                           <tr>
                            <td> {{ $key+1 }} </td>
                            <td> {{ $value->certifi }} </td>
                            @if (isset($value->image))
                            <td> <img src="{{asset('uploads/'.$value->image)}}" width="30px" height="30px"></td>
                            @else
                            <td> <i class="fas fa-times ml-3"> </td>
                            @endif
                            <td class="text-right">
                               <a href="{{ route('certifi.edit',$value->id) }}" class="btn btn-sm btn-white text-success mr-2"><i class="fas fa-edit mr-1"></i></a>
                               
                               <a href="{{ route('certifi.delete',$value->id) }}" data-method="delete" class="btn btn-sm btn-white text-danger mr-2"><i class="far fa-trash-alt mr-1"></i></a>
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
        <form action="{{ route('certifi.store') }}" method="POST" class="needs-validation" novalidate="" enctype="multipart/form-data">
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
                              <input type="text" name="certifi" class="form-control form-control-sm"/>
                           </div>
                        </div>
                       <div class="row">
                        <div class="form-group col-md-6">
                           <label> {{ __('app.hospital') }} </label>
                           <input type="file" name="image" class="form-control form-control-sm" required/>
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