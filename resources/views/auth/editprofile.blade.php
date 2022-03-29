@include('layouts.app')
@section('container')
<div class="container">
    @if ($errors->all())
    <div class="row content-center">
        <div class="card">
            <div class="card-body">
                <h2>Error</h2>
                @foreach ($errors->all() as $error)
                    <ul>
                        <li>{{$error}}</li>
                    </ul>
                @endforeach
            </div>
        </div>
    </div>
    @endif
    @if (session('success'))
    <div class="row content-center">
        <div class="card">
            <div class="card-body">
                <h2>Success</h2>
                {{session('success')}}
            </div>
        </div>
    </div>
    @endif
    <div class="row content-center">
        <div class="card">
            <div class="card-header">
                Edit Profile
            </div>
            <div class="card-body">
                <form action="{{url('/profile/update/' . Auth::user()->id)}}" method="post">
                    @csrf
                    <input type="text" name="name" placeholder="Name" value="{{$user->name}}" class="mb-2"><br>
                    <input type="email" name="email" placeholder="Stars" max="5" min="1"  class="mb-2" value="{{$user->email}}"><br>
                    <input type="password" name="password" placeholder="Password" class="mb-2"><br>
                    <input type="password" name="password_confirmation" placeholder="Confirm Password" class="mb-2"><br>
                    <input type="submit" value="Edit Profile">
                </form>
            </div>
        </div>
        
    </div>
</div>
@if ($errors->all())
    @foreach ($errors as $error)
        <ul>
            <li>{{$error}}</li>
        </ul>
    @endforeach
@endif

