@include('layouts.app')
@section('container')

<div class="container">
    <div class="row">
        <div class="col-2 menu">
          <ul>
            <li><a href="{{route('hotel.index')}}" style="color:#fff; width:100%;">Home</a></li>
            <li><a href="{{route('hotel.index')}}" style="color:#fff; width:100%;">Profiles</a></li>
            <li><a href="{{route('hotel.index')}}" style="color:#fff; width:100%;">About</a></li>
            <li><a href="{{route('hotel.create')}}" style="color:#fff; width:100%;">Add Hotel</a></li>
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
            <div class="card">
                <div class="card-header">
                    {{$hotel->name}}
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
                                Star : {{$hotel->review}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Description : <br>
                                {{$hotel->description}}
                            </td>
                            <td>
                                
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Bills / Days : {{$hotel->bill}}$
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Address : <br>
                                {{$hotel->address}}
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    
    
    </div>

</div>