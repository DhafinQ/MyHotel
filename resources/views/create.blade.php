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
                Add Hotel
            </div>
            <div class="card-body">
                <form action="{{route('hotel.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="name" placeholder="Hotel Name.." class="mb-2"><br>
                    <input type="number" name="review" placeholder="Stars" max="5" min="1"  class="mb-2"><br>
                    <input type="number" name="bill" placeholder="Hotel Bill per days" class="mb-2"><br>
                    <textarea name="description" cols="30" rows="20" style="resize: none"  class="mb-2" placeholder="Hotel Description"></textarea><br>
                    <textarea name="address" cols="30" rows="20" style="resize: none"  class="mb-2" placeholder="Hotel Address"></textarea><br>
                    <label for="image" class="mb-2">Hotel Image </label><br>
                    <input type="file" id="image" name="image"  class="mb-2"><br>
                    <input type="submit" value="Add New">
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

