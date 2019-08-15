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
                @foreach($events as $event)
                <tr>
                    <td>{{$event->id}}</td>
                    <td>{{$event->title}}</td>
                    <td>{{$event->description}}</td>
                    <td>{{$event->start_date}}</td>
                    <td>{{$event->end_date}}</td>
                    <td>
                        <a href="{{route('events.edit', $event->id)}}" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('events.destroy', $event->id)}}" method="post">
                            @method('DELETE')
                            @csrf 
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{route('events.create')}}" class="btn btn-success">+Add</a>
    </div>

@endsection