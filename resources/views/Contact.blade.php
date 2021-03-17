@extends('files.app')
@section('content')
    <div class="container contac">
        <div class="row">
            <div class=" col-lg-5">
                <h1>Contact</h1>
                <p> <img src="{{asset('image/mail.png')}}" >: dunstansafu@gmail.com</p>
                <p> <img src="{{asset('image/contact.png')}}" >: +254797031782</p>
                <p> <img src="{{asset('image/contact.png')}}" >: +254798399469</p>
            </div>
            <div class="col-lg-5">
                <h1>Send Message</h1>
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Enter Your Email</label>
                        <input type="text" class="form-control" id="formGroupExampleInput">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Subject</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" >
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary disabled">Submit</button>
                      </div>
                </form>
            </div>
        </div>
    </div>
@endsection