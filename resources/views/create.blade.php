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
                    <input type="checkbox" name="services[]" value="Wifi"> Wifi<br>
                    <input type="checkbox" name="services[]" value="Swimming Pool"> Swimming Pool<br>
                    <input type="checkbox" name="services[]" value="Breakfast & Dinner"> Breakfast & Dinner<br>
                    <input type="checkbox" name="services[]" value="Laundry Service"> Laundry Service<br>
                    <input type="checkbox" name="services[]" value="Gaming Room" class="mb-2"> Gaming Room<br>
                    <input type="submit" value="Add New">
                </form>
            </div>
        </div>
    </div>
</div>


