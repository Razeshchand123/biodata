<div>
   

<div class="container" style="margin-top:-6%;">
    <div class="row">
       <div class="col-sm-10 m-auto  wrapper">
      

 <div class="row">
    <div class="cover col-lg-8 ">
     <img src="{{ Storage::url( $pic) }}"  class=" img-fluid rounded mainimg " style=" filter:sepia(50%);"/>

   <div class="parda text-content  animate__animated animate__jello animate__delay-3s animate__slower animate__infinite ">
   
         <i class="text-white text-capitalize">you are the hero for your own world</i>
   </div> 
   
    </div>

  <div class="col-lg-4">
   
       @foreach($firstpostdata as $firstpostvalue)

          <div class="bg-light mt-5">

            <h5 class="mb-0 p-2 text-capitalize">{{$firstpostvalue->ptitle}} </h5>
           <p  class=" description" style="text-align:justify;padding:4%;">
          
           @if(strlen($firstpostvalue->pdescription)>340)
            <!-- {{Str::limit($firstpostvalue->pdescription,330, $end='') }}  -->
            {{substr($firstpostvalue->pdescription,0,130)}}<br>
            {{substr($firstpostvalue->pdescription,130,100)}}
            <br>
            <i class="far fa-clock text-primary pl-1 "></i>
              <small class="text-dark"> {{$firstpostvalue->created_at->diffForHumans()}}</small>
           <button type="button" class="btn btn-link " data-toggle="modal" data-target="#exampleModaltotalpost{{$firstpostvalue->id}}">
                 Read more
                </button>
            
            {{-- model code --}}
            <!-- Button trigger modal -->
<!-- Modal -->
    <div class="modal fade" id="exampleModaltotalpost{{$firstpostvalue->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-heart text-danger fa-2x" ></i></h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
         
         <h5 class="mb-0 mt-3" style="font-family: 'Exo', sans-serif;">{{$firstpostvalue->ptitle}} </h5>
           
          {{substr($firstpostvalue->pdescription,0,290)}}-<br><br>
          -{{substr($firstpostvalue->pdescription,290,200)}}-<br><br>
          -{{substr($firstpostvalue->pdescription,490,260)}}-<br><br> 
          -{{substr($firstpostvalue->pdescription,750,1000)}}<br><br> 
          <!-- {{$firstpostvalue->pdescription}} -->
         <br>
         <i class="far fa-clock text-primary pl-1 "></i>
         <small class="text-dark"> {{$firstpostvalue->created_at->diffForHumans()}}</small>
      </p>



       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-outline-danger" data-dismiss="modal"><i class="fas fa-times text-danger"></i><small>close</small></button>
         </div>
     </div>
   </div>
 </div>
            <!-- model coode  -->
 
 <!-- model body endd -->
                   
         @endif  
               </p>       
 </div>
 <hr>
  @endforeach
  </div>

 
     </div>
       </div>
    </div>
    
</div>





<div class="container mt-5">
    <div class="row" >
        <div class="col-sm-8 m-auto" >
<h1 id="blog " class="text-center text-primary text-capitalize mt-5">blogs</h1>
<hr class="w-25 mx-auto bg-primary">

@foreach($postdata as $postvalue)
 <div class="row  mt-3 p-3 p-md-2 bg-light d-flex flex-column" data-aos='flip-down'>
     <h4 style="padding-left: 2.5%;" class="text-capitalize">{{$postvalue->ptitle}}</h4>
    <p class="description pl-3" > 


     @if(strlen($postvalue->pdescription)>1490)
      {{substr($postvalue->pdescription,0,500)}}-<br><br>
      -{{substr($postvalue->pdescription,500,440)}}-<br><br>
      -{{substr($postvalue->pdescription,940,550)}}-<br><br> 
      -{{substr($postvalue->pdescription,1490,400)}}.<br>

      @elseif(strlen($postvalue->pdescription)>940 && strlen($postvalue->pdescription)<=1490)
      {{substr($postvalue->pdescription,0,500)}}-<br><br>
      -{{substr($postvalue->pdescription,500,440)}}<br><br>
      -{{substr($postvalue->pdescription,940,550)}}-<br>

      @elseif(strlen($postvalue->pdescription)>500 && strlen($postvalue->pdescription)<=940)
      {{substr($postvalue->pdescription,0,500)}}-<br><br>
      -{{substr($postvalue->pdescription,500,440)}}<br>

      @elseif(strlen($postvalue->pdescription)<=500)
      {{substr($postvalue->pdescription,0,500)}}<br>
      @endif

      <i class="far fa-clock text-primary pl-1 "></i> <small class="text-info mt-0"> {{$postvalue->created_at->diffForHumans()}}</small>
   </p>

    
 </div>
<hr>
@endforeach




</div>
</div>
</div>



<div class="heart">
   
   <button wire:click="heart" class="btn btn-sm">  <i class="fas fa-heart fa-3x animate__animated animate__heartBeat animate__delay-2s animate__slower animate__infinite	infinite"></i></button>
   {{$heart}}
</div>


<div class="d-flex justify-content-center">
  <small class="mt-2">{{$postdata->links()}}</small>
</div>




</div>
<script src="/path/to/noframework.waypoints.min.js"></script>
