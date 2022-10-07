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
                {{-- <div class="ml-auto" > <button type="button" data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-outline-primary"> {{ __('app.saved')}} </button> </div> --}}
            </div>
        </div>
    </div>
    </div>
   
    
     <div class="row">
        <div class="col-sm-12">
           <div class="card">
              <div class="card-body">
                 <div class="table-responsive">
                    <form action="{{route('section.store')}}" method="POST"> 
                        @csrf
                    <table class="table table-stripped">
                       <thead>
                          <tr>
                             <th> № </th>
                             <th> {{ __('app.name') }} </th>
                             <th> {{ __('app.action') }} </th>
                          </tr>
                       </thead>
                       <tbody>
                           @isset($section)
                           @foreach($section as $key => $text)
                           <tr>
                            <td> {{ $key+1 }} </td>
                            <td> 
                                {{$text->section}}
                                <input type="text" name="best{{$text->id}}{{$text->id}}" value="{{$text->id}}"  false class="form-control d-none " style="height: 20px"/>

                            </td>
                            @if( $text->best == 1)
                            <td>

                            <input type="checkbox" name="best{{$text->id}}" value="true" checked false class="form-control" style="height: 20px"/>

                            </td>

                            @else
                            <td> 
                                
                                <input type="checkbox" name="best{{$text->id}}" value="false"  false class="form-control" style="height: 20px"/>
                            </td>
                            @endif
                         </tr> 
                           @endforeach
                           @endisset
                       </tbody>
                    </table>
                    <div class="text-right mt-3">
                        <button type="submit" class="btn btn-primary">{{ __('app.update') }}</button>
                        </div>
                </form>
                 </div>
              </div>
           </div>
        </div>
     </div>
    
      </div>
@endsection