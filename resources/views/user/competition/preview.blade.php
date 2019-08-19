@extends('layouts.app')

@section('content')
    <h1>Add New Product - Step 3</h1>
    <hr>
    <h3>Review Product Details</h3>
    <form action="/competitions/store" method="post" >
        {{ csrf_field() }}
        <table class="table">
            <tr>
                <td>Model Name:</td>
                <td><strong><img alt="Product Image" src="{{url('images/'.$competition->featured_image)}}"/ class="img"></strong></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><strong>{{$competition->address}}</strong></td>
            </tr>
            <tr>
                <td>Product Company:</td>
                <td><strong>{{$competition->age}}</strong></td>
            </tr>
            <tr>
                <td>Product Available:</td>
                <td><strong></strong></td>
            </tr>
            <tr>
                <td>Product Description:</td>
                <td><strong></strong></td>
            </tr>
            <tr>
                <td>Product Image:</td>
            </tr>
        </table>
        <a type="button" href="/competitions/create-step1" class="btn btn-warning">Back to Step 1</a>
       
        <button type="submit" class="btn btn-primary">Create Product</button>
    </form>
@endsection