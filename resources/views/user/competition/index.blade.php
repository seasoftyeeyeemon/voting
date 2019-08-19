@extends('layout')

@section('content')

    <div class="container mt-5">

        @if(session()->get('success'))
        <div class="alert alert-success">
        {{ session()->get('success') }}  
        </div><br />
        @endif

        <table class="table table-striped">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Title</td>
                    <td>Description</td>
                    <td>Start Date</td>
                    <td>End Date</td>
                    <td>Update</td>
                    <td>Delete</td>
                </tr>
            </thead>
            <tbody>
                
                @foreach($competitions as $competition)
                <tr>
                    <img src="{{url('images/'.$competition->photo)}}" alt="">
                    
                </tr>
                @endforeach
            </tbody>
        </table>
       
    </div>

@endsection