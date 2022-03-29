@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="row justify-content-center">
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
            <h2>This Is A Simple Hotel App With Laravel :D</h2>            
        </div>
    </div>
</div>
@endsection
