@extends('layout')

@section('content')
    <div class="card mt-5 event_create_form">
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

            <form class="forms-sample" method="post" action="{{ route('events.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="form-group event_image_div">
                <span class="btn_upload">
                    <input type="file" id="imag" title="" class="input-img" name="event_photo"/>
                    Choose Image
                    </span>
                <img id="ImgPreview" src="" class="preview1" />
                <input type="button" id="removeImage1" value="x" class="btn-rmv1" />
            </div>

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
                <input class="form-control" type="date" id="startdate" name="event_start">
            </div>
            <div class="form-group">
                <label for="enddate">End Date</label>
                <input class="form-control" type="date" id="enddate" name="event_end">
            </div>
            <button type="submit" class="btn btn-success mr-2">Create</button>
            </form>
        </div>
    </div>
    <script
        src="http://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
    <script>
        function readURL(input, imgControlName) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
            $(imgControlName).attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
        }

        $("#imag").change(function() {
        // add your logic to decide which image control you'll use
        var imgControlName = "#ImgPreview";
        readURL(this, imgControlName);
        $('.preview1').addClass('it');
        $('.btn-rmv1').addClass('rmv');
        });

        $("#removeImage1").click(function(e) {
        e.preventDefault();
        $("#imag").val("");
        $("#ImgPreview").attr("src", "");
        $('.preview1').removeClass('it');
        $('.btn-rmv1').removeClass('rmv');
        });
    </script>
    
@endsection