@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="row justify-content-center">
        <div class="col-2 menu">
            <ul>
              <li><a href="{{route('hotel.index')}}" style="color:#fff; width:100%;">Home</a></li>
              <li><a href="{{route('hotel.index')}}" style="color:#fff; width:100%;">Profiles</a></li>
              <li><a href="{{route('hotel.index')}}" style="color:#fff; width:100%;">About</a></li>
              @can('crud')
                  <li><a href="{{route('hotel.create')}}" style="color:#fff; width:100%;">Add Hotel</a></li>
              @endcan
            </ul>
        </div>
        <div class="col-md-8 flex" style="width: 80%">
            @foreach ($hotels as $hotel)
            <div class="card max-h-auto max-w-30 ml-4">
                <div class="card-header" style="font-weight: 500">{{ $hotel->name }}</div>
                <div class="card-body">
                   <table>
                       <tr>
                           <td><img src="/storage/{{ $hotel->image }}" class="content-center" alt="Hotel Image" width="160" height="90"></td>
                       </tr>
                       <tr>
                           <td >Stars : {{ $hotel->review }}</td>
                       </tr>
                       <tr>
                           <td>{{ $hotel->description }} </td>
                       </tr>
                       <tr>
                           <td>{{ $hotel->address }}</td>
                       </tr>
                       <tr>
                        <td class="mt-4">
                            <br>
                            <a href="{{route('hotel.show' , $hotel->id)}}" class="btn btn-primary">See More..</a> 
                        </td>
                    </tr>
                   </table>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</div>
@endsection
