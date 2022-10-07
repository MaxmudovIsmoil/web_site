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
   
    
     
     <div class="card">
      <div class="card-header">
        <h5 class="card-title d-flex justify-content-between">
          <span> </span>
          <a class="btn btn-sm btn-white" href="{{ route('contact.edit',$contact[0]->id) }}"><i class="fas fa-edit mr-1"></i></a>
         </a>
        </h5>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
      <div class="card">
      <div class="card-body">
      <div class="table-responsive">
    <table class="table mb-0">
      <thead>
        <tr>
          <th>tel </th>
          <th>email </th>
          <th>adress </th>
          <th>page banner </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>{{$contact[0]->phone}} </td>
          <td>{{$contact[0]->email}} </td>
          <td>{{$contact[0]->adress}} </td>
          <td><img src="{{asset('img/'.$contact[0]->image)}}" height="30px"> </td>
        </tr>
      </tbody>
    </table>
      
   </div>
   </div>
   </div>
   </div>
   </div>
</div>
@endsection