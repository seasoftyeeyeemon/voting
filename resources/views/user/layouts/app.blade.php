<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/jquery.calendar.min.css')}}">
</head>
<body>
    <main>
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
                <div class="left_bar col-md-9">
                    <nav>
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active col-md-3 col-sm-6" id="nav-all-tab" data-toggle="tab" href="#nav-all" role="tab" aria-controls="nav-all" aria-selected="true">
                                <img src="photo/event.jpg" alt="" class="w-100">
                                <h4>Title1</h4>
                                <p class="mb-0 text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <span class="text-left d-block">Start Date: 1.1.1</span>
                                <span class="text-left d-block">End Date: 1.1.1</span>
                            </a>
                            <a class="nav-item nav-link col-md-3 col-sm-6" id="nav-event01-tab" data-toggle="tab" href="#nav-event01" role="tab" aria-controls="nav-event01" aria-selected="false">
                                <img src="photo/event2.jpg" alt="" class="w-100">
                                <h4>Title2</h4>
                                <p class="mb-0 text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <span class="text-left d-block">Start Date: 1.1.1</span>
                                <span class="text-left d-block">End Date: 1.1.1</span>
                            </a>
                            <a class="nav-item nav-link col-md-3 col-sm-6" id="nav-event02-tab" data-toggle="tab" href="#nav-event02" role="tab" aria-controls="nav-event02" aria-selected="false">
                                <img src="photo/event.jpg" alt="" class="w-100">
                                <h4>Title3</h4>
                                <p class="mb-0 text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <span class="text-left d-block">Start Date: 1.1.1</span>
                                <span class="text-left d-block">End Date: 1.1.1</span>
                            </a>
                            <a class="nav-item nav-link col-md-3 col-sm-6" id="nav-event03-tab" data-toggle="tab" href="#nav-event03" role="tab" aria-controls="nav-event03" aria-selected="false">
                                <img src="photo/event2.jpg" alt="" class="w-100">
                                <h4>Title4</h4>
                                <p class="mb-0 text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <span class="text-left d-block">Start Date: 1.1.1</span>
                                <span class="text-left d-block">End Date: 1.1.1</span>
                            </a>
                        </div>
                    </nav>
                    <div class="tab-content py-3 px-3 px-sm-0 mt-3" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">
                            <h2 class="text-center mb-4">Title1</h2>
                            <div class="row">
                                <div class="col-md-4">
                                    <figure>
                                        <img src="photo/model.jpg" alt="" class="w-100">
                                        <figcaption>
                                            <p class="mb-0">Name: <span>aaa</span></p>
                                            <p class="mb-0">Age: <span>aaa</span></p>
                                            <p class="mb-0">Address: <span>qqq</span></p>
                                            <p class="mb-0">Phone: <span>123</span></p>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-md-4">
                                    <figure>
                                        <img src="photo/model2.jpg" alt="" class="w-100">
                                        <figcaption>
                                            <p class="mb-0">Name: <span>aaa</span></p>
                                            <p class="mb-0">Age: <span>aaa</span></p>
                                            <p class="mb-0">Address: <span>qqq</span></p>
                                            <p class="mb-0">Phone: <span>123</span></p>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-md-4">
                                    <figure>
                                        <img src="photo/model3.jpg" alt="" class="w-100">
                                        <figcaption>
                                            <p class="mb-0">Name: <span>aaa</span></p>
                                            <p class="mb-0">Age: <span>aaa</span></p>
                                            <p class="mb-0">Address: <span>qqq</span></p>
                                            <p class="mb-0">Phone: <span>123</span></p>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-md-4">
                                    <figure>
                                        <img src="photo/model.jpg" alt="" class="w-100">
                                        <figcaption>
                                            <p class="mb-0">Name: <span>aaa</span></p>
                                            <p class="mb-0">Age: <span>aaa</span></p>
                                            <p class="mb-0">Address: <span>qqq</span></p>
                                            <p class="mb-0">Phone: <span>123</span></p>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-md-4">
                                    <figure>
                                        <img src="photo/model2.jpg" alt="" class="w-100">
                                        <figcaption>
                                            <p class="mb-0">Name: <span>aaa</span></p>
                                            <p class="mb-0">Age: <span>aaa</span></p>
                                            <p class="mb-0">Address: <span>qqq</span></p>
                                            <p class="mb-0">Phone: <span>123</span></p>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-md-4">
                                    <figure>
                                        <img src="photo/model3.jpg" alt="" class="w-100">
                                        <figcaption>
                                            <p class="mb-0">Name: <span>aaa</span></p>
                                            <p class="mb-0">Age: <span>aaa</span></p>
                                            <p class="mb-0">Address: <span>qqq</span></p>
                                            <p class="mb-0">Phone: <span>123</span></p>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
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
                        <div class="tab-pane fade" id="nav-event01" role="tabpanel" aria-labelledby="nav-event01-tab">
                            <h2 class="text-center mb-4">Title2</h2>
                            <div class="row">
                                <div class="col-md-4">
                                    <figure>
                                        <img src="photo/model.jpg" alt="" class="w-100">
                                        <figcaption>
                                            <p class="mb-0">Name: <span>aaa</span></p>
                                            <p class="mb-0">Age: <span>aaa</span></p>
                                            <p class="mb-0">Address: <span>qqq</span></p>
                                            <p class="mb-0">Phone: <span>123</span></p>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-md-4">
                                    <figure>
                                        <img src="photo/model.jpg" alt="" class="w-100">
                                        <figcaption>
                                            <p class="mb-0">Name: <span>aaa</span></p>
                                            <p class="mb-0">Age: <span>aaa</span></p>
                                            <p class="mb-0">Address: <span>qqq</span></p>
                                            <p class="mb-0">Phone: <span>123</span></p>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-md-4">
                                    <figure>
                                        <img src="photo/model.jpg" alt="" class="w-100">
                                        <figcaption>
                                            <p class="mb-0">Name: <span>aaa</span></p>
                                            <p class="mb-0">Age: <span>aaa</span></p>
                                            <p class="mb-0">Address: <span>qqq</span></p>
                                            <p class="mb-0">Phone: <span>123</span></p>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-event02" role="tabpanel" aria-labelledby="nav-event02-tab">
                            <h2 class="text-center mb-4">Title3</h2>
                            <div class="row">
                                <div class="col-md-4">
                                    <figure>
                                        <img src="photo/model2.jpg" alt="" class="w-100">
                                        <figcaption>
                                            <p class="mb-0">Name: <span>aaa</span></p>
                                            <p class="mb-0">Age: <span>aaa</span></p>
                                            <p class="mb-0">Address: <span>qqq</span></p>
                                            <p class="mb-0">Phone: <span>123</span></p>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-md-4">
                                    <figure>
                                        <img src="photo/model2.jpg" alt="" class="w-100">
                                        <figcaption>
                                            <p class="mb-0">Name: <span>aaa</span></p>
                                            <p class="mb-0">Age: <span>aaa</span></p>
                                            <p class="mb-0">Address: <span>qqq</span></p>
                                            <p class="mb-0">Phone: <span>123</span></p>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-md-4">
                                    <figure>
                                        <img src="photo/model2.jpg" alt="" class="w-100">
                                        <figcaption>
                                            <p class="mb-0">Name: <span>aaa</span></p>
                                            <p class="mb-0">Age: <span>aaa</span></p>
                                            <p class="mb-0">Address: <span>qqq</span></p>
                                            <p class="mb-0">Phone: <span>123</span></p>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-event03" role="tabpanel" aria-labelledby="nav-event03-tab">
                            <h2 class="text-center mb-4">Title4</h2>
                            <div class="row">
                                <div class="col-md-4">
                                    <figure>
                                        <img src="photo/model3.jpg" alt="" class="w-100">
                                        <figcaption>
                                            <p class="mb-0">Name: <span>aaa</span></p>
                                            <p class="mb-0">Age: <span>aaa</span></p>
                                            <p class="mb-0">Address: <span>qqq</span></p>
                                            <p class="mb-0">Phone: <span>123</span></p>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-md-4">
                                    <figure>
                                        <img src="photo/model3.jpg" alt="" class="w-100">
                                        <figcaption>
                                            <p class="mb-0">Name: <span>aaa</span></p>
                                            <p class="mb-0">Age: <span>aaa</span></p>
                                            <p class="mb-0">Address: <span>qqq</span></p>
                                            <p class="mb-0">Phone: <span>123</span></p>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-md-4">
                                    <figure>
                                        <img src="photo/model3.jpg" alt="" class="w-100">
                                        <figcaption>
                                            <p class="mb-0">Name: <span>aaa</span></p>
                                            <p class="mb-0">Age: <span>aaa</span></p>
                                            <p class="mb-0">Address: <span>qqq</span></p>
                                            <p class="mb-0">Phone: <span>123</span></p>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right_bar col-md-3">
                    <div class="event_list">
                        <h4>Previous Event Lists</h4>
                        <ol>
                            <li>
                                <a href="#event1" class="">Old Events 1</a>
                            </li>
                            <li><a href="#event2" class="">Old Events 2</a></li>
                            <li><a href="#event3" class="">Old Events 3</a></li>
                            <li><a href="#event4" class="">Old Events 4</a></li>
                            <li><a href="#event5" class="">Old Events 5</a></li>
                        </ol>
                    </div>
                    <div id="calendar"></div>
                    <div class="next_event mt-4">
                        <div class="next_event1 row align-items-center m-0 mb-3" style=" box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
                            <div class="col-md-6">
                                <img src="photo/nextevent.jpg" alt="" class="w-100">
                            </div>
                            <div class="col-md-6 pl-0 pt-3">
                                <h5>Next Event 1</h5>
                                <p >Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p> 
                            </div>
                        </div>
                        <div class="next_event1 row align-items-center m-0 mb-3" style=" box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
                            <div class="col-md-6">
                                <img src="photo/nextevent.jpg" alt="" class="w-100">
                            </div>
                            <div class="col-md-6 pl-0 pt-3">
                                <h5>Next Event 2</h5>
                                <p >Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p> 
                            </div>
                        </div>
                        <div class="next_event1 row align-items-center m-0 mb-3" style=" box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
                            <div class="col-md-6">
                                <img src="photo/nextevent.jpg" alt="" class="w-100">
                            </div>
                            <div class="col-md-6 pl-0 pt-3">
                                <h5>Next Event 3</h5>
                                <p >Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </main>
    <footer class="bg-dark p-4 d-flex align-items-center justify-content-around">
        <span class="text-white">Great for yours photo</span>
        <div class="d-flex align-items-center">
            <img src="" alt="">
            <img src="" alt="">
            <img src="" alt="">
        </div>
        <span class="text-white">Copyright @ 2019</span>
    </footer>

    <!-- Old event1 -->
    <div id="event1" class="modal fade" role="dialog">
        <div class="modal-dialog">
        <!-- Old event1 content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Event1 Winner</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            <figure>
                                <img src="photo/model.jpg" alt="" class="w-100">
                                <figcaption>
                                    <p class="mb-0">Name: <span>aaa</span></p>
                                    <p class="mb-0">Age: <span>aaa</span></p>
                                    <p class="mb-0">Address: <span>qqq</span></p>
                                    <p class="mb-0">Phone: <span>123</span></p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-md-4">
                            <figure>
                                <img src="photo/model2.jpg" alt="" class="w-100">
                                <figcaption>
                                    <p class="mb-0">Name: <span>aaa</span></p>
                                    <p class="mb-0">Age: <span>aaa</span></p>
                                    <p class="mb-0">Address: <span>qqq</span></p>
                                    <p class="mb-0">Phone: <span>123</span></p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-md-4">
                            <figure>
                                <img src="photo/model3.jpg" alt="" class="w-100">
                                <figcaption>
                                    <p class="mb-0">Name: <span>aaa</span></p>
                                    <p class="mb-0">Age: <span>aaa</span></p>
                                    <p class="mb-0">Address: <span>qqq</span></p>
                                    <p class="mb-0">Phone: <span>123</span></p>
                                </figcaption>
                            </figure>
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
                    <h4 class="modal-title">Event1 Winner</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            <figure>
                                <img src="photo/model.jpg" alt="" class="w-100">
                                <figcaption>
                                    <p class="mb-0">Name: <span>aaa</span></p>
                                    <p class="mb-0">Age: <span>aaa</span></p>
                                    <p class="mb-0">Address: <span>qqq</span></p>
                                    <p class="mb-0">Phone: <span>123</span></p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-md-4">
                            <figure>
                                <img src="photo/model2.jpg" alt="" class="w-100">
                                <figcaption>
                                    <p class="mb-0">Name: <span>aaa</span></p>
                                    <p class="mb-0">Age: <span>aaa</span></p>
                                    <p class="mb-0">Address: <span>qqq</span></p>
                                    <p class="mb-0">Phone: <span>123</span></p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-md-4">
                            <figure>
                                <img src="photo/model3.jpg" alt="" class="w-100">
                                <figcaption>
                                    <p class="mb-0">Name: <span>aaa</span></p>
                                    <p class="mb-0">Age: <span>aaa</span></p>
                                    <p class="mb-0">Address: <span>qqq</span></p>
                                    <p class="mb-0">Phone: <span>123</span></p>
                                </figcaption>
                            </figure>
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
                    <h4 class="modal-title">Event1 Winner</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            <figure>
                                <img src="photo/model.jpg" alt="" class="w-100">
                                <figcaption>
                                    <p class="mb-0">Name: <span>aaa</span></p>
                                    <p class="mb-0">Age: <span>aaa</span></p>
                                    <p class="mb-0">Address: <span>qqq</span></p>
                                    <p class="mb-0">Phone: <span>123</span></p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-md-4">
                            <figure>
                                <img src="photo/model2.jpg" alt="" class="w-100">
                                <figcaption>
                                    <p class="mb-0">Name: <span>aaa</span></p>
                                    <p class="mb-0">Age: <span>aaa</span></p>
                                    <p class="mb-0">Address: <span>qqq</span></p>
                                    <p class="mb-0">Phone: <span>123</span></p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-md-4">
                            <figure>
                                <img src="photo/model3.jpg" alt="" class="w-100">
                                <figcaption>
                                    <p class="mb-0">Name: <span>aaa</span></p>
                                    <p class="mb-0">Age: <span>aaa</span></p>
                                    <p class="mb-0">Address: <span>qqq</span></p>
                                    <p class="mb-0">Phone: <span>123</span></p>
                                </figcaption>
                            </figure>
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
                    <h4 class="modal-title">Event1 Winner</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            <figure>
                                <img src="photo/model.jpg" alt="" class="w-100">
                                <figcaption>
                                    <p class="mb-0">Name: <span>aaa</span></p>
                                    <p class="mb-0">Age: <span>aaa</span></p>
                                    <p class="mb-0">Address: <span>qqq</span></p>
                                    <p class="mb-0">Phone: <span>123</span></p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-md-4">
                            <figure>
                                <img src="photo/model2.jpg" alt="" class="w-100">
                                <figcaption>
                                    <p class="mb-0">Name: <span>aaa</span></p>
                                    <p class="mb-0">Age: <span>aaa</span></p>
                                    <p class="mb-0">Address: <span>qqq</span></p>
                                    <p class="mb-0">Phone: <span>123</span></p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-md-4">
                            <figure>
                                <img src="photo/model3.jpg" alt="" class="w-100">
                                <figcaption>
                                    <p class="mb-0">Name: <span>aaa</span></p>
                                    <p class="mb-0">Age: <span>aaa</span></p>
                                    <p class="mb-0">Address: <span>qqq</span></p>
                                    <p class="mb-0">Phone: <span>123</span></p>
                                </figcaption>
                            </figure>
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
                    <h4 class="modal-title">Event1 Winner</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            <figure>
                                <img src="photo/model.jpg" alt="" class="w-100">
                                <figcaption>
                                    <p class="mb-0">Name: <span>aaa</span></p>
                                    <p class="mb-0">Age: <span>aaa</span></p>
                                    <p class="mb-0">Address: <span>qqq</span></p>
                                    <p class="mb-0">Phone: <span>123</span></p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-md-4">
                            <figure>
                                <img src="photo/model2.jpg" alt="" class="w-100">
                                <figcaption>
                                    <p class="mb-0">Name: <span>aaa</span></p>
                                    <p class="mb-0">Age: <span>aaa</span></p>
                                    <p class="mb-0">Address: <span>qqq</span></p>
                                    <p class="mb-0">Phone: <span>123</span></p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-md-4">
                            <figure>
                                <img src="photo/model3.jpg" alt="" class="w-100">
                                <figcaption>
                                    <p class="mb-0">Name: <span>aaa</span></p>
                                    <p class="mb-0">Age: <span>aaa</span></p>
                                    <p class="mb-0">Address: <span>qqq</span></p>
                                    <p class="mb-0">Phone: <span>123</span></p>
                                </figcaption>
                            </figure>
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