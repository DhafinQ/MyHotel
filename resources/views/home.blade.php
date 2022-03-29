@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-2 menu">
            <ul>
              <li><a href="{{route('hotel.index')}}" style="color:#fff; width:100%;">Home</a></li>
              <li><a href="{{route('about.index')}}" style="color:#fff; width:100%;">About</a></li>
              @auth
                <li><a href="{{url('/profile/' . Auth::user()->id)}}" style="color:#fff; width:100%;">Profiles</a></li>
              @endauth
              @can('crud')
                  <li><a href="{{route('hotel.create')}}" style="color:#fff; width:100%;">Add Hotel</a></li>
              @endcan
            </ul>
        </div>
        <div class="col-md-8 flex" style="width: 80%">
            @foreach ($hotels as $hotel)
            <div class="card max-h-50 max-w-30 ml-4 mt-2">
                <div class="card-header" style="font-weight: 500">{{ $hotel->name }}</div>
                <div class="card-body">
                   <table>
                       <tr>
                           <td><img src="/storage/{{ $hotel->image }}" class="content-center" alt="Hotel Image" width="160" height="90"></td>
                       </tr>
                       <tr>
                           <td >Stars : <br>
                               <strong>{{ $hotel->review }}/5</strong></td>
                       </tr>
                       <tr>
                           <td>Description : <br>
                               <strong>{{ $hotel->description }}</strong> </td>
                       </tr>
                       <tr>
                           <td>Address : <br>
                            <strong>{{ $hotel->address }}</strong></td>
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
