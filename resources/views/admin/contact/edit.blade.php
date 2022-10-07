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
                <form action="{{ route('contact.update',$contact->id) }}" method="POST" enctype="multipart/form-data">
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
                                          <label> Phone </label>
                                          <input type="text" name="phone" value="{{$contact->phone}}" class="form-control form-control-sm"/>
                                       </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                           <label> Email </label>
                                           <input type="email" name="email" value="{{$contact->email}}" class="form-control form-control-sm"/>
                                        </div>
                                     </div>
                                     <div class="row">
                                        <div class="form-group col-md-12">
                                           <label> Adress </label>
                                           <input type="text" name="adress" value="{{$contact->adress}}" class="form-control form-control-sm"/>
                                        </div>
                                     </div>
                                   <div class="row">
                                    <div class="form-group col-md-3">
                                        <img src="{{asset('img/'.$contact->image)}}" width="30px">

                                     </div>
                                    
                                    <div class="form-group col-md-3">
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