<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>my blog</title>


 <!-- Fonts -->
 <link rel="dns-prefetch" href="//fonts.gstatic.com">
 <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@1,300&display=swap" rel="stylesheet">

 <!-- Styles -->

<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
 <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" media="all">
 <!-- <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet"> -->
 @livewireStyles
 
   <!-- Scripts -->
   @livewireScripts
   <script src="{{ asset('js/app.js') }}" ></script>
   <script src="https://kit.fontawesome.com/a8a1b7735d.js" crossorigin="anonymous"></script>
   <script src="{{ asset('js/custom.js') }}" ></script>
</head>
<body>

<div class="container-fluid rdark" >
  <div class="row">
    <div class="col-sm-8  ">

        <nav class="navbar navbar-expand-sm  navbar-fixed-top rdark">
            <a class="navbar-brand text-white" href="/">Razesh</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              {{-- <span class="navbar-toggler-icon"></span> --}}
              <i class="fas fa-bars text-white"></i>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                <a class="nav-link text-white" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-white" href="{{url('/about')}}">About </a>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link text-white" href="#blog">Blog </a>
                  </li>
                 -->
                <li>
                  <a class="nav-link  text-white" href="/admin"><i class="fas fa-user-cog"></i></a>
                </li>
                {{-- <li class="nav-item dropdown">
                  <a class="nav-link text-white dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item " href="#">Action</a>
                    <a class="dropdown-item " href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item " href="#">Something else here</a>
                  </div>
                </li> --}}
               
              </ul>
            </div>
           
          </nav>
    </div>
          
    <div class="col-sm-3 offset-sm-1 mt-2  ">
      <livewire:social-icon/>
    </div>





   
</div>
</div>
 <div class="svgwrapper">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,224L34.3,224C68.6,224,137,224,206,192C274.3,160,343,96,411,85.3C480,75,549,117,617,117.3C685.7,117,754,75,823,74.7C891.4,75,960,117,1029,144C1097.1,171,1166,181,1234,202.7C1302.9,224,1371,256,1406,272L1440,288L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path></svg>
   </div>
    @yield('content')
   
    





<br><br>

<div class="d-flex justify-content-center p-3 footer" style=" background:#0099ff;width: 100%;">

  <a href="" class="text-white">All 	&copy; Right Reserve to Razesh chand</a>
</div>


<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
        delay:0,
        duration:600,
        easing: 'ease-in-out',
    });
  </script>


</body>
</html>