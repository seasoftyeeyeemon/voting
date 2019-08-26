@extends('layouts.app')

@section('content')
    <h1>Add New Product - Step 3</h1>
    <hr>
    <h3>Review Product Details</h3>
    <form action="{{route('competitions.upload')}}" method="post" >
        {{ csrf_field() }}
        <table class="table">
            <tr>
                <td>Model Photo:</td>
                <td><strong><img alt="Product Image" src="{{url('images/featuredImg/'.$competition->photo)}}"/ class="img"></strong></td>
            </tr>
            <tr>
                <td>Model Name:</td>
                <td><strong>{{$competition->name}}</strong></td>
            </tr>
            <tr>
                <td>Age:</td>
                <td><strong>{{$competition->age}}</strong></td>
            </tr>
            <tr>
                <td>Education:</td>
                <td><strong>{{$competition->education}}</strong></td>
            </tr>
            <tr>
                <td>Activity:</td>
                <td><strong>{{$competition->activity}}</strong></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><strong>{{$competition->address}}</strong></td>
            </tr>
        </table>
        <a type="button" href="{{route('competitions.create',$competition->event_id)}}" class="btn btn-warning">Back to Step 1</a>
       
        <button type="submit" class="btn btn-primary">Upload Profile</button>
    </form>
@endsection