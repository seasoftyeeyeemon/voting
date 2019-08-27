<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/jquery.calendar.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <main>
        <div class="bg-dark pt-1 pb-1">
            <div class="container d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <img src="photo/logoevent.png" alt="" style="width: 100px;">
                    <span class="text-white">Great for yours photo</span>
                </div>
                <!-- <ul class="d-flex align-items-center mb-0">
                    <li>
                        <a href="#" class="text-white">Login</a>
                    </li>
                    <li class="ml-2 mr-2 text-white">|</li>
                    <li>
                        <a href="#" class="text-white">Register</a>
                    </li>
                </ul> -->
                <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
            </div>
        </div>
        <div class="banner">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active carousel-item-left">
                        <img src="photo/banner.jpg" alt="" class="w-100">
                        <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                    <div class="carousel-item carousel-item-next carousel-item-left">
                        <img src="photo/banner2.jpg" alt="" class="w-100">
                        <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="photo/banner3.jpg" alt="" class="w-100">
                        <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div class="container mt-5">
            <div class="row">
               @yield('content')
                <div class="right_bar col-md-3">
                    <div class="event_list">
                        <h4>Previous Event Lists</h4>
                        <ol class="pl-4">
                            <li>
                                <a href="#event1" class="">Winners of Old Events 1</a>
                            </li>
                            <li><a href="#event2" class="">Winners of Old Events 2</a></li>
                            <li><a href="#event3" class="">Winners of Old Events 3</a></li>
                            <li><a href="#event4" class="">Winners of Old Events 4</a></li>
                            <li><a href="#event5" class="">Winners of Old Events 5</a></li>
                        </ol>
                    </div>
                    <div id="calendar"></div>
                    <div class="next_event mt-4">
                 
                        <div class="next_event1 row align-items-center m-0 mb-3 pt-2 pb-2">
                            <div class="col-md-6">
                                <img src="{{asset(url('images/eventPhoto/'.$event->image))}}" alt="" class="w-100">
                            </div>
                            <div class="col-md-6 pl-0 pt-3">
                                <h5></h5>
                                <p ></p> 
                            </div>
                        </div>
                   
                    </div>
                </div>
            </div>
        </div>
        
    </main>
    <footer class="bg-dark">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="w-25 d-flex flex-column align-items-center">
                <img src="photo/logoevent.png" alt="" class="w-25">
                <span class="text-white d-block w-100">Great for yours photo! Your Welcome.</span>
            </div>
            <div class="text-center w-50">
                <img src="photo/socialIcon.png" alt="" class="w-50">
            </div>
            <span class="text-white d-block w-25 text-right">Copyright @ 2019 Photo Events</span>
        </div>
    </footer>

    <!-- Old event1 -->
    <div id="event1" class="modal fade" role="dialog">
        <div class="modal-dialog">
        <!-- Old event1 content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title w-100 text-center">Event1 Winner</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="eventPhotoBlog mb-4">
                                <figure>
                                    <img src="photo/model.jpg" alt="" class="w-100">
                                    <figcaption class="vote w-100 text-center pt-1 pb-1 d-flex align-items-center justify-content-center">
                                        <img src="photo/firstWinner.png" alt="">
                                        <div class="ml-2">
                                            <p class="text-white font-weight-bold mb-0">First Winner</p>
                                            <span class="text-white font-weight-bold">100 Votes</span>
                                        </div>
                                    </figcaption>
                                </figure>
                                <div class="photoDesp">
                                    <p class="mb-0">Name: <span>aaa</span></p>
                                    <p class="mb-0">Age: <span>aaa</span></p>
                                    <p class="mb-0">Address: <span>qqq</span></p>
                                    <p class="mb-0">Phone: <span>123</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="eventPhotoBlog mb-4">
                                <figure>
                                    <img src="photo/model.jpg" alt="" class="w-100">
                                    <figcaption class="vote w-100 text-center pt-1 pb-1 d-flex align-items-center justify-content-center">
                                        <img src="photo/secondWinner.png" alt="">
                                        <div class="ml-2">
                                            <p class="text-white font-weight-bold mb-0">Second Winner</p>
                                            <span class="text-white font-weight-bold">100 Votes</span>
                                        </div>
                                    </figcaption>
                                </figure>
                                <div class="photoDesp">
                                    <p class="mb-0">Name: <span>aaa</span></p>
                                    <p class="mb-0">Age: <span>aaa</span></p>
                                    <p class="mb-0">Address: <span>qqq</span></p>
                                    <p class="mb-0">Phone: <span>123</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="eventPhotoBlog mb-4">
                                <figure>
                                    <img src="photo/model.jpg" alt="" class="w-100">
                                    <figcaption class="vote w-100 text-center pt-1 pb-1 d-flex align-items-center justify-content-center">
                                        <img src="photo/thirdWinner.png" alt="">
                                        <div class="ml-2">
                                            <p class="text-white font-weight-bold mb-0">Third Winner</p>
                                            <span class="text-white font-weight-bold">100 Votes</span>
                                        </div>
                                    </figcaption>
                                </figure>
                                <div class="photoDesp">
                                    <p class="mb-0">Name: <span>aaa</span></p>
                                    <p class="mb-0">Age: <span>aaa</span></p>
                                    <p class="mb-0">Address: <span>qqq</span></p>
                                    <p class="mb-0">Phone: <span>123</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

    <!-- Old event2 -->
    <div id="event2" class="modal fade" role="dialog">
        <div class="modal-dialog">
        <!-- Old event1 content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title w-100 text-center">Event1 Winner</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="eventPhotoBlog mb-4">
                                <figure>
                                    <img src="photo/model.jpg" alt="" class="w-100">
                                    <figcaption class="vote w-100 text-center pt-1 pb-1 d-flex align-items-center justify-content-center">
                                        <img src="photo/firstWinner.png" alt="">
                                        <div class="ml-2">
                                            <p class="text-white font-weight-bold mb-0">First Winner</p>
                                            <span class="text-white font-weight-bold">100 Votes</span>
                                        </div>
                                    </figcaption>
                                </figure>
                                <div class="photoDesp">
                                    <p class="mb-0">Name: <span>aaa</span></p>
                                    <p class="mb-0">Age: <span>aaa</span></p>
                                    <p class="mb-0">Address: <span>qqq</span></p>
                                    <p class="mb-0">Phone: <span>123</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="eventPhotoBlog mb-4">
                                <figure>
                                    <img src="photo/model.jpg" alt="" class="w-100">
                                    <figcaption class="vote w-100 text-center pt-1 pb-1 d-flex align-items-center justify-content-center">
                                        <img src="photo/secondWinner.png" alt="">
                                        <div class="ml-2">
                                            <p class="text-white font-weight-bold mb-0">Second Winner</p>
                                            <span class="text-white font-weight-bold">100 Votes</span>
                                        </div>
                                    </figcaption>
                                </figure>
                                <div class="photoDesp">
                                    <p class="mb-0">Name: <span>aaa</span></p>
                                    <p class="mb-0">Age: <span>aaa</span></p>
                                    <p class="mb-0">Address: <span>qqq</span></p>
                                    <p class="mb-0">Phone: <span>123</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="eventPhotoBlog mb-4">
                                <figure>
                                    <img src="photo/model.jpg" alt="" class="w-100">
                                    <figcaption class="vote w-100 text-center pt-1 pb-1 d-flex align-items-center justify-content-center">
                                        <img src="photo/thirdWinner.png" alt="">
                                        <div class="ml-2">
                                            <p class="text-white font-weight-bold mb-0">Third Winner</p>
                                            <span class="text-white font-weight-bold">100 Votes</span>
                                        </div>
                                    </figcaption>
                                </figure>
                                <div class="photoDesp">
                                    <p class="mb-0">Name: <span>aaa</span></p>
                                    <p class="mb-0">Age: <span>aaa</span></p>
                                    <p class="mb-0">Address: <span>qqq</span></p>
                                    <p class="mb-0">Phone: <span>123</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

    <!-- Old event3 -->
    <div id="event3" class="modal fade" role="dialog">
        <div class="modal-dialog">
        <!-- Old event1 content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title w-100 text-center">Event1 Winner</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="eventPhotoBlog mb-4">
                                <figure>
                                    <img src="photo/model.jpg" alt="" class="w-100">
                                    <figcaption class="vote w-100 text-center pt-1 pb-1 d-flex align-items-center justify-content-center">
                                        <img src="photo/firstWinner.png" alt="">
                                        <div class="ml-2">
                                            <p class="text-white font-weight-bold mb-0">First Winner</p>
                                            <span class="text-white font-weight-bold">100 Votes</span>
                                        </div>
                                    </figcaption>
                                </figure>
                                <div class="photoDesp">
                                    <p class="mb-0">Name: <span>aaa</span></p>
                                    <p class="mb-0">Age: <span>aaa</span></p>
                                    <p class="mb-0">Address: <span>qqq</span></p>
                                    <p class="mb-0">Phone: <span>123</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="eventPhotoBlog mb-4">
                                <figure>
                                    <img src="photo/model.jpg" alt="" class="w-100">
                                    <figcaption class="vote w-100 text-center pt-1 pb-1 d-flex align-items-center justify-content-center">
                                        <img src="photo/secondWinner.png" alt="">
                                        <div class="ml-2">
                                            <p class="text-white font-weight-bold mb-0">Second Winner</p>
                                            <span class="text-white font-weight-bold">100 Votes</span>
                                        </div>
                                    </figcaption>
                                </figure>
                                <div class="photoDesp">
                                    <p class="mb-0">Name: <span>aaa</span></p>
                                    <p class="mb-0">Age: <span>aaa</span></p>
                                    <p class="mb-0">Address: <span>qqq</span></p>
                                    <p class="mb-0">Phone: <span>123</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="eventPhotoBlog mb-4">
                                <figure>
                                    <img src="photo/model.jpg" alt="" class="w-100">
                                    <figcaption class="vote w-100 text-center pt-1 pb-1 d-flex align-items-center justify-content-center">
                                        <img src="photo/thirdWinner.png" alt="">
                                        <div class="ml-2">
                                            <p class="text-white font-weight-bold mb-0">Third Winner</p>
                                            <span class="text-white font-weight-bold">100 Votes</span>
                                        </div>
                                    </figcaption>
                                </figure>
                                <div class="photoDesp">
                                    <p class="mb-0">Name: <span>aaa</span></p>
                                    <p class="mb-0">Age: <span>aaa</span></p>
                                    <p class="mb-0">Address: <span>qqq</span></p>
                                    <p class="mb-0">Phone: <span>123</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

    <!-- Old event4 -->
    <div id="event4" class="modal fade" role="dialog">
        <div class="modal-dialog">
        <!-- Old event1 content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title w-100 text-center">Event1 Winner</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="eventPhotoBlog mb-4">
                                <figure>
                                    <img src="photo/model.jpg" alt="" class="w-100">
                                    <figcaption class="vote w-100 text-center pt-1 pb-1 d-flex align-items-center justify-content-center">
                                        <img src="photo/firstWinner.png" alt="">
                                        <div class="ml-2">
                                            <p class="text-white font-weight-bold mb-0">First Winner</p>
                                            <span class="text-white font-weight-bold">100 Votes</span>
                                        </div>
                                    </figcaption>
                                </figure>
                                <div class="photoDesp">
                                    <p class="mb-0">Name: <span>aaa</span></p>
                                    <p class="mb-0">Age: <span>aaa</span></p>
                                    <p class="mb-0">Address: <span>qqq</span></p>
                                    <p class="mb-0">Phone: <span>123</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="eventPhotoBlog mb-4">
                                <figure>
                                    <img src="photo/model.jpg" alt="" class="w-100">
                                    <figcaption class="vote w-100 text-center pt-1 pb-1 d-flex align-items-center justify-content-center">
                                        <img src="photo/secondWinner.png" alt="">
                                        <div class="ml-2">
                                            <p class="text-white font-weight-bold mb-0">Second Winner</p>
                                            <span class="text-white font-weight-bold">100 Votes</span>
                                        </div>
                                    </figcaption>
                                </figure>
                                <div class="photoDesp">
                                    <p class="mb-0">Name: <span>aaa</span></p>
                                    <p class="mb-0">Age: <span>aaa</span></p>
                                    <p class="mb-0">Address: <span>qqq</span></p>
                                    <p class="mb-0">Phone: <span>123</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="eventPhotoBlog mb-4">
                                <figure>
                                    <img src="photo/model.jpg" alt="" class="w-100">
                                    <figcaption class="vote w-100 text-center pt-1 pb-1 d-flex align-items-center justify-content-center">
                                        <img src="photo/thirdWinner.png" alt="">
                                        <div class="ml-2">
                                            <p class="text-white font-weight-bold mb-0">Third Winner</p>
                                            <span class="text-white font-weight-bold">100 Votes</span>
                                        </div>
                                    </figcaption>
                                </figure>
                                <div class="photoDesp">
                                    <p class="mb-0">Name: <span>aaa</span></p>
                                    <p class="mb-0">Age: <span>aaa</span></p>
                                    <p class="mb-0">Address: <span>qqq</span></p>
                                    <p class="mb-0">Phone: <span>123</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

    <!-- Old event5 -->
    <div id="event5" class="modal fade" role="dialog">
        <div class="modal-dialog">
        <!-- Old event1 content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title w-100 text-center">Event1 Winner</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    
                </div>
                <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="eventPhotoBlog mb-4">
                            <figure>
                                <img src="photo/model.jpg" alt="" class="w-100">
                                <figcaption class="vote w-100 text-center pt-1 pb-1 d-flex align-items-center justify-content-center">
                                    <img src="photo/firstWinner.png" alt="">
                                    <div class="ml-2">
                                        <p class="text-white font-weight-bold mb-0">First Winner</p>
                                        <span class="text-white font-weight-bold">100 Votes</span>
                                    </div>
                                </figcaption>
                            </figure>
                            <div class="photoDesp">
                                <p class="mb-0">Name: <span>aaa</span></p>
                                <p class="mb-0">Age: <span>aaa</span></p>
                                <p class="mb-0">Address: <span>qqq</span></p>
                                <p class="mb-0">Phone: <span>123</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="eventPhotoBlog mb-4">
                            <figure>
                                <img src="photo/model.jpg" alt="" class="w-100">
                                <figcaption class="vote w-100 text-center pt-1 pb-1 d-flex align-items-center justify-content-center">
                                    <img src="photo/secondWinner.png" alt="">
                                    <div class="ml-2">
                                        <p class="text-white font-weight-bold mb-0">Second Winner</p>
                                        <span class="text-white font-weight-bold">100 Votes</span>
                                    </div>
                                </figcaption>
                            </figure>
                            <div class="photoDesp">
                                <p class="mb-0">Name: <span>aaa</span></p>
                                <p class="mb-0">Age: <span>aaa</span></p>
                                <p class="mb-0">Address: <span>qqq</span></p>
                                <p class="mb-0">Phone: <span>123</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="eventPhotoBlog mb-4">
                            <figure>
                                <img src="photo/model.jpg" alt="" class="w-100">
                                <figcaption class="vote w-100 text-center pt-1 pb-1 d-flex align-items-center justify-content-center">
                                    <img src="photo/thirdWinner.png" alt="">
                                    <div class="ml-2">
                                        <p class="text-white font-weight-bold mb-0">Third Winner</p>
                                        <span class="text-white font-weight-bold">100 Votes</span>
                                    </div>
                                </figcaption>
                            </figure>
                            <div class="photoDesp">
                                <p class="mb-0">Name: <span>aaa</span></p>
                                <p class="mb-0">Age: <span>aaa</span></p>
                                <p class="mb-0">Address: <span>qqq</span></p>
                                <p class="mb-0">Phone: <span>123</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{asset('js/jquery.calendar.min.js')}}"></script>
    <script>
        $('a[href$="#event1"]').on( "click", function() {
        $('#event1').modal('show');
        });

        $('a[href$="#event2"]').on( "click", function() {
        $('#event2').modal('show');
        });

        $('a[href$="#event3"]').on( "click", function() {
        $('#event3').modal('show');
        });

        $('a[href$="#event4"]').on( "click", function() {
        $('#event4').modal('show');
        });

        $('a[href$="#event5"]').on( "click", function() {
        $('#event5').modal('show');
        });

        $(function () {
        $('#calendar').calendar();
        });
    </script>
</body>
</html>