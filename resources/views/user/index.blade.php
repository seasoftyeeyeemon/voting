@extends('user.layouts.app')

@section('content')
<div class="left_bar col-md-9">
                    <h2>CURRENT EVENTS</h2>
                    <ul class="pl-0">
                     @foreach($events as $event)
                        <li class="row eventBlog ml-0 mr-0 pt-3 pb-3 mb-4">
                            <figure class="col-md-4">
                                <img src="{{asset(url('images/eventPhoto/'.$event->image))}}" alt="" class="w-100">
                            </figure>
                            <div class="col-md-8">
                                <h3>{{$event->title}}</h3>
                                <p>{{$event->description}}</p>
                                <p class="d-flex justify-content-between">
                                    <span>Start Date: {{$event->start_date}}</span>
                                    <span>End Date: {{$event->end_date}}</span>
                                </p>
                                <a href="{{route('events.show',$event->id)}}" class="btn btn-success">More Detail</a>
                            </div>
                        </li>
                    @endforeach
                    </ul>   

                    {{ $events->links() }}
                    <!-- <div aria-label="Page navigation">
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
                    </div> -->

                    <h2>PREVIOUS EVENTS</h2>
                    <ul class="pl-0">
                    @foreach($events as $event)
                        <li class="row eventBlog ml-0 mr-0 pt-3 pb-3 mb-4">
                            <figure class="col-md-4">
                                <img src="{{asset(url('images/eventPhoto/'.$event->image))}}" alt="" class="w-100">
                            </figure>
                            <div class="col-md-8">
                                <h3>{{$event->title}}</h3>
                                <p>{{$event->description}} </p>
                                <p class="d-flex justify-content-between">
                                    <span>Start Date: {{$event->start_date}}</span>
                                    <span>End Date: {{$event->end_date}}</span>
                                </p>
                                <a href="#" class="btn btn-success">More Detail</a>
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
