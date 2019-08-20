    @extends('user.layouts.app')
    @section('content')
    <div class="left_bar col-md-9">
                    <h2>EVENT TITLE</h2>
                    <hr>
                    <div class="row eventBlogdetail ml-0 mr-0 pt-3 pb-3 mb-4">
                        <figure class="col-md-4 pl-0">
                            <img src="photo/event.jpg" alt="" class="w-100">
                        </figure>
                        <div class="col-md-8">
                            <h3>{{$event->title}}</h3>
                            <p>{{$event->description}}</p>
                            <p class="d-flex justify-content-between">
                                <span>Start Date: {{$event->start_date}}</span>
                                <span>End Date: {{$event->end_date}}</span>
                            </p>
                        </div>
                    </div>
                    <ul class="pl-0 row">
                        <li class="col-md-4">
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
                        </li>
                        <li class="col-md-4">
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
                        </li>
                        <li class="col-md-4">
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
                        </li>
                        <li class="col-md-4">
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
                        </li>
                        <li class="col-md-4">
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
                        </li>
                        <li class="col-md-4">
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
                        </li>
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
        
 


    

