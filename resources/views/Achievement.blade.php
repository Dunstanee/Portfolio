@extends('files.app')
@section('content')
    <div class="container contac">
        <h1 class="text-center">Achievement</h1>
        <hr>
        <div class="row">
            
            <div class="text-center col-lg-4">
                <img style="margin: 5px;" src="{{asset('image/engineer/asset transfer.png')}}" width="100%" height="200" alt="" srcset="">
            </div>
            
            <div class="text-center col-lg-6">
            <h4>RESOURCE MANAGEMENT SYSYTEM (Desktop Application)</h4>

                <p>
                This system is used to manage resources in a company. It helps to allocate a resource to an individual belonging to 
                a certain company. This helps to track of items and printing of reports.
                </p>
                <button class="text-center btn btn-success disabled" type="submit">Request</button>
            </div>
            
        </div>
        <div style="margin-top: 5%;" class=" row">
            <h4>CLUB MANAGEMENT SYSTEM</h4>
            <div class="text-center col-lg-5">
               <p>
                   This is a club management system used to manage all activity reated to the club. This activities may include 
                   posting of alert messages, upcoming activity, payment of activity by individual accounts, Generation of reports for management use.
                   Development languages used are MYSQL and php, Html, CSS.
               </p>
               <button class="text-center btn btn-success disabled" type="submit">Request</button>

            </div>
            <div class="text-center col-lg-5">
                <img style="margin: 5px;" src="{{asset('image/mictec2.png')}}" width="100%" height="200" alt="" srcset="">
            </div>
            
            
        </div>
        <div style="margin-top: 5%;" class=" row">
           
            <div class="text-center col-lg-6">
                <img style="margin: 5px;" src="{{asset('image/music.png')}}" width="100%" height="300" alt="" srcset="">
            </div>
            <div class="text-center col-lg-6">
                <h4>MUSIC APPLICATION (Desktop Application)</h4>
                <p>
                    This a music application developed in java and javafx environment. It works same as other music players
                    but specific for windows machine only.
                </p>
               <a href="https://drive.google.com/file/d/1vn2QaHwowNFkB33ufLb0kOYc_IE6F_uY/view?usp=sharing" class="text-center btn btn-success " type="submit">Download</a>

            </div>
            
            
        </div>
    </div>
@endsection