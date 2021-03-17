@extends('files.app')
@section('content')
<section class="bg-intro">
    <div class="container">
    <div class="row">
        <div style="padding:10px;" class="text-center col-lg-5">
                <img src="{{asset('image/dunstan3.png')}}" alt=""width="300" height="300">
        </div>
        <div class="p-10 col-lg-5">
                <h1 class="hi">Hello,</h1>
                    <div class="desc">
                        <p>
                            I am Safu Dunstan, a Web and Desktop Developer.
                            I use my skill to develop softwares or program that can solve
                            community problem at faster and more efficient way.
                        </p>
                    </div>
        </div>
    </div> 
    </div>  
</section>
<hr>
<section class="statke">
    <div class="container">
        <div class="row" style="padding-top: 50px;">
            <div class="text-center col-lg-5">
                <img src="{{asset('image/dev1.png')}}" height="300" width="100%">
                
            </div>
            <div class="text-center state col-lg-6">
               <h1>MISSION</h1>
                <p id="myp">To produce products that change the world appearance 
                    and ease movement of data in Technology</p>
            </div>
            
        </div>
    </div>
</section>
<section class="statke">
    <div class="container">
        <div class="row" style="padding-top: 50px;">
            <div class="text-center state2 col-lg-5">
                <h1>VISION</h1>
                <p id="myp">
                    The Tech, by what it does directly and through others, helps build a civil society that enables everyone, especially low-income young people,
                     to succeed in a world driven by technology. 
                </p>
             </div>
            <div class="text-center col-lg-6">
                <img src="{{asset('image/dev2.png')}}" height="300" width="100%">
                
            </div>
            
            
        </div>
    </div>
</section>
<section style="margin-bottom: 2px;">
    <div class="container">
        <div class="row" style="padding-top: 50px;">
            <div class="text-center col-lg-5">
                <img src="{{asset('image/dev3.png')}}" height="300" width="100%">
                
            </div>
            <div class="text-center state col-lg-6">
               <h1>OBJECTIVE</h1>
               <p id="myp">
                To recognize the unique value and creative potential in everyone
            </p>
            </div>
            
        </div>
    </div>
</section>



@endsection