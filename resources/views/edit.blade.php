@include('layouts.app')
@section('container')
<div class="container">
    @if ($errors->all())
    @foreach ($errors as $error)
        <ul>
            <li>{{$error}}</li>
        </ul>
    @endforeach
    @endif
    <div class="row content-center">
        <div class="card">
            <div class="card-header">
                Edit Hotel
            </div>
            <div class="card-body">
                <form action="{{route('hotel.update' , $hotel->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <input type="text" name="name" placeholder="Hotel Name.." class="mb-2" value="{{$hotel->name}}"><br>
                    <input type="number" name="review" placeholder="Stars" max="5" min="1"  class="mb-2" value="{{$hotel->review}}"><br>
                    <input type="number" name="bill" placeholder="Hotel Bill per days" class="mb-2" value="{{$hotel->bill}}"><br>
                    <textarea name="description" cols="30" rows="20" style="resize: none"  class="mb-2" placeholder="Hotel Description">{{$hotel->description}}</textarea><br>
                    <textarea name="address" cols="30" rows="20" style="resize: none"  class="mb-2" placeholder="Hotel Address">{{$hotel->address}}</textarea><br>
                    <label for="image" class="mb-2">Hotel Image </label><br>
                    <input type="file" id="image" name="image"  class="mb-2"><br>
                    <input type="submit" value="Add New">
                </form>
            </div>
        </div>
        
    </div>
</div>

