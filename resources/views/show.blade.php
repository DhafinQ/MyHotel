@include('layouts.app')
@section('container')

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

        <div class="col-9">
            @can('crud')
            <form action="{{route('hotel.destroy' , $hotel->id)}}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete" class="btn btn-danger mr-4">
                    <a href="{{route('hotel.edit' , $hotel->id)}}" class="btn btn-success mt-4" style="max-height: 5%">Edit</a>
            </form>
            @endcan
            <div class="card mt-2">
                <div class="card-header">
                    <strong>{{$hotel->name}}</strong>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <td>
                                <img src="/storage/{{$hotel->image}}" width="320" height="180s">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Star : <br>
                                <strong>{{$hotel->review}}/5</strong>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Services : <br>
                                <strong>{{$hotel->services}}</strong>
                            </td>
                        </tr>
                        <tr>
                        <tr>
                            <td>
                                Bills / Days : <br>
                                <strong id="bill">{{$hotel->bill}}$</strong>
                                <br>
                                <form>
                                    <label for="days">Amount Days</label>
                                    <input type="number" id="days" value="0" min="0">
                                    <input type="button" id="plus" onclick="calculateUp()" value="+">
                                    <input type="button" id="min" onclick="calculateDown()" value="-"><br><br>
                                    <input type="text" id="amount" readonly placeholder="Amount Bill" >
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Address : <br>
                                <strong>{{$hotel->address}}</strong>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Description : <br>
                                <strong>{{$hotel->description}}</strong>
                            </td>
                            <td>
                                
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    
    
    </div>
</div>

<script>
    function calculateUp()
    {
        document.getElementById('days').value++
        var value = parseInt(document.getElementById('days').value);

        
        value = value*{{$hotel->bill}};
        if(value <= 0){
            value = 0
        }
        document.getElementById('amount').value = value + "$";
    }
    function calculateDown()
    {
        document.getElementById('days').value--
        var value = parseInt(document.getElementById('days').value);

        
        value = value*{{$hotel->bill}};
        if(value <= 0){
            value = 0
        }
        document.getElementById('amount').value = value + "$";
    }
</script>