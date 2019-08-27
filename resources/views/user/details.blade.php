@extends('user.layouts.app')

@section('content')

<div class="left_bar col-md-9">
    <div class="d-flex align-items-center justify-content-between">
        <h2>{{$event->title}}</h2>
        @if(Auth::user() == null)
        <a href="/register" class="btn btn-secondary">To joint this event</a>
        @else
        @foreach($event_participate_competitiors as $event_participate_competitior)
        @if($event_participate_competitior->user_id==Auth::user()->id)
       
           <button>You already join this event</button>
       
        @else
        <a href="{{route('competitions.create',$event->id)}}" class="btn btn-secondary">To joint this event</a>
        @endif
        @endforeach
        @endif
    </div>
    <hr>
   
    <div class="row eventBlogdetail ml-0 mr-0 pt-3 pb-3 mb-4">
        <figure class="col-md-4 pl-0">
            <img src="photo/event.jpg" alt="" class="w-100">

            <figcaption class="vote w-100 text-center pt-1 pb-1 d-flex align-items-center justify-content-center">
                    <button class="btn btn-success bg-danger"><img src="photo/voteIcon.png" alt=""></button>    
                    <div class="ml-2">
                        <span class="text-white font-weight-bold">100 Votes</span>
                    </div>
                </figcaption>
        </figure>

        <div class="col-md-8">
            <p>{{$event->description}}</p>
            <p class="d-flex justify-content-between">
                <span>Start Date: {{$event->start_date}}</span>
                <span>End Date: {{$event->event_date}}</span>
            </p>
        </div>
        
    </div>
    
    <ul class="pl-0 row list-unstyled">
    @foreach($event_participate_competitiors as $event_participate_competitior)
        <li class="col-md-4 mb-4">
            <div class="eventPhotoBlog mb-4">
                <figure>
                <img alt="Product Image" src="{{url('images/featuredImg/'.$event_participate_competitior->photo)}}"/ class="w-100">
                    <figcaption class="vote w-100 text-center pt-1 pb-1 d-flex align-items-center justify-content-center">
                        <img src="photo/firstWinner.png" alt="">
                        <div class="ml-2">
                            <p class="text-white font-weight-bold mb-0">First Winner</p>
                            <span class="text-white font-weight-bold">100 Votes</span>
                        </div>
                    </figcaption>
                </figure>
                <div class="photoDesp">
                    <p class="mb-0">Name: <span>{{ $event_participate_competitior->name}}</span></p>
                    <p class="mb-0">Age: <span>{{ $event_participate_competitior->age}}</span></p>
                    <p class="mb-0">Address: <span>{{ $event_participate_competitior->address}}</span></p>
                    <p class="mb-0">Phone: <span>{{ $event_participate_competitior->phone}}</span></p>
                    <p class="mb-0">Phone: <span>{{ $event_participate_competitior->education}}</span></p>
                </div>
            </div>
        </li>
    @endforeach  
    </ul>  

    <div aria-label="Page navigation">
        <ul class="pagination justify-content-center">
            <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
            </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
            </a>
            </li>
        </ul>
    </div>
    
</div>

@endsection

