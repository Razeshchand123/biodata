<div>
    
@php
    foreach($data as $sovalue){
     $facebooklink =$sovalue->furl;
     $youtubelink =$sovalue->uurl; 
     $instalink =$sovalue->iurl;
     $glink =$sovalue->gurl;
     $githublink=$sovalue->github;
     }
@endphp

    <div class=" social animate__animated animate__headShake animate__delay-3s animate__slower animate__infinite" >
    <a href="{{$facebooklink}}" target="_blank"><i class="fab fa-facebook fa-2x"></i></a>
     <a href="{{$instalink}}" target="_blank"><i class="fab fa-instagram-square fa-2x"></i></a>
    <a href="{{$glink}}" target="_blank"><i class="fab fa-google-plus fa-2x"></i></a>
    <a href="{{$youtubelink}}" target="_blank"> <i class="fab fa-youtube fa-2x"></i></a>
    <a href="{{$githublink}}" target="_blank"> <i class="fab fa-github fa-2x " aria-hidden="true"></i></a>
    
</div>



      
<style>
    .fa-2x{
        color:white;
        padding: 2%;
        transition:1s;
    }
    .fa-2x:hover{
        text-shadow: 1px 2px 1px red;
        color:lime
    }
    .social{
        text-align: center;
    }
</style>







</div>
