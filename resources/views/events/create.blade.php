@extends('layout')

@section('content')
    <div class="card mt-5">
        <div class="card-body">
            <h4 class="card-title">Event Create</h4>

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
            @endif

            <form class="forms-sample" method="post" action="{{ route('events.store') }}">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" placeholder="Name" name="event_title">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" rows="2" name="event_desp"></textarea>
            </div>
            <div class="form-group">
                <label for="startdate">Start Date</label>
                <input type="date" id="startdate" name="event_start">
            </div>
            <div class="form-group">
                <label for="enddate">End Date</label>
                <input type="date" id="enddate" name="event_end">
            </div>
            <button type="submit" class="btn btn-success mr-2">Create</button>
            </form>
        </div>
        </div>
    
@endsection