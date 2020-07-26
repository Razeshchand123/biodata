<div>



{{-- logout --}}
<div style="position: absolute;top:10%;left:3%;">
  <button wire:click="logout" class="btn btn-sm animate__animated animate__heartBeat animate__delay-3s animate__slower animate__infinite"><i class="fas fa-power-off text-danger fa-2x"></i></button>
</div>
{{-- loggout --}}



  
  <div style="margin-top:-10%;">
    <h1 class="text-center the">Control Your Data</h1>

    @if(session()->has("donemsg"))
    <p class="text-center text-success">{{session()->get("donemsg")}}</p>
    @endif

    <div class="container">
     <div class="row">
       <div class="col-sm-10 m-auto bg-primery">




     <div class="row">
    <div class="col-sm-6 bg-theme p-3">
      <h4 class="text-center"><a href="" class="the">Personal Data</a></h4> 
    
    
   
       <img src="{{ Storage::url($pic) }}" height="100" alt=""/>
      
      <div wire:loading wire:target="pic">   Uploading...</div>

       <form  wire:submit.prevent="personaldata" class="form-group">
       <label for="setprofile" id="labeforsetprofile">
                                    <span id="imgspan">set profile image</span>
                                    <i class="far fa-images fa-2x the"></i>                            
        <input type="file" id="setprofile"  wire:model="pic" name="setprofile"  class="d-none">
</label>
        <br> <input type="text" wire:model="name" class="form-control" placeholder=" Set your Name">
         @error('name') <small class="text-white">{{$message}}</small> @enderror <br>

         <input type="text" wire:model="address"  class="form-control" placeholder=" Set your Address">
         @error('address') <small class="text-white">{{$message}}</small> @enderror <br>
         <input type="text" wire:model="email"  class="form-control" placeholder=" Set your Email"> 
         @error('email') <small class="text-white">{{$message}}</small> @enderror <br>
         <input type="text" wire:model="number"  class="form-control" placeholder=" Set your contect number">
         @error('number') <small class="text-white">{{$message}}</small> @enderror
         <br>
         <input type="submit" class="btn btn-block bg-theme-btn"  class="form-control">
       </form>

    </div>
    {{-- socail control --}}
    <div class="col-sm-6 bg-theme p-3" style="border-left:2px solid red;">
      <h4 class="text-center"><a href="" class="the" >Social links</a></h4> 
      <br>
      <br>
    
       <form  wire:submit.prevent="sociallinkcontrol" class="form-group">
        
         <input type="text" wire:model="facebooklink" class="form-control" placeholder="paste your facebooklink"><br>
         <input type="text" wire:model="youtubelink"  class="form-control" placeholder=" paste your youtube channel link"><br>
         <input type="text" wire:model="instalink"  class="form-control" placeholder=" paste your instagram link"> <br>
         <input type="text" wire:model="glink"  class="form-control" placeholder=" paste your gmail link"><br>
         <input type="text" wire:model="github"  class="form-control" placeholder=" paste your github link"><br><br>
      
         <input type="submit" class="btn btn-block bg-theme-btn"  class="form-control">
       </form>
    </div>
     {{-- socailcontrol --}}


     </div>
    
{{-- ////////////// --}}
<br>

<div class="row p-2">
  <div class="col-sm-12 bg-theme p-3 ">
   
    <div class="d-flex justify-content-around">
      <h4><a href="" class="the ">Working Experiences</a></h4> 
       <a href="/createexperience" class="text-white"> Add<i class="fas fa-plus-circle the ml-2"></i></a>  
     </div>
     @if(session()->has("donemsg"))
     <p class="text-center text-white">{{session()->get("donemsg")}}</p>
     @endif

<table class="table table-borded table-stripted table-sm w-100">

  <thead class="text-uppercase" >
    <th >Organization</th>
    <th>joining yeaar</th>
    <th>engaged year</th>
    <th>position</th>
    <th colspan="2">Action</th>
  </thead>
  <tbody>
    

    @foreach( $wdata as $value)
    <tr>
    <td>{{$value->oraganization}}</td>
      <td>{{$value->joining}}</td>
      <td>{{$value->duration}}</td>
      <td>{{$value->position}}</td>
     
      {{-- <td><a href=""><i class="fas fa-edit text-primary"></i></a></td> --}}
    <td><a href="/workeedit/{{$value->id}}"><i class="fas fa-edit text-white mt-2"></i></a> </td>  
    {{-- <td><button wire:click="delete({{$value->id}})" class="btn "><i class="fas fa-times text-danger"></i></button></td> --}}
    <td>
    <button   type="button"  class="btn " data-toggle="modal" data-target="#exampleModalfirst{{$value->id}}">
        <i class="fas fa-times text-danger"></i>
      </button>
      <div class="modal fade" id="exampleModalfirst{{$value->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-danger" id="exampleModalLabel">You want delete this</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <ul>
                <li class="text-capitalize">{{$value->oraganization}}</li>
                  <li class="text-capitalize">{{$value->joining}}</li>
                    <li class="text-capitalize"> {{$value->duration}}</li>
                      <li class="text-capitalize">{{$value->position}}</li>
              </ul>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-danger" data-dismiss="modal"> <i class="fas fa-times text-danger"></i> No</button>
              <button wire:click="delete({{$value->id}})" type="button" class="btn btn-outline-success" data-dismiss="modal"><i class="fas fa-check text-success"></i>Yes</button>
            </div>
          </div>
        </div>
      </div>
    </td>
  </tr>

    @endforeach


  </tbody>
</table>

  </div>

</div>

{{-- ////////////// --}}
{{-- ////////////// --}}
<br>
<div class="row p-2">
  <div class="col-sm-12 bg-theme p-3 ">
    
  <div class="d-flex justify-content-around ">
   <h4><a href="" class="the">Education</a></h4> 
    <a href="/addedducation" class="text-white"> Add<i class="fas fa-plus-circle the ml-2"></i></a>  
  </div>

   <br>
   @if(session()->has("insmasg"))
   <p class="text-center text-white">{{session()->get("insmasg")}}</p>
   @endif

<table class="table table-borded table-stripted table-sm w-100">
  <thead class="text-uppercase ">
    <th>Instute</th>
    <th>level</th>
    <th>Retreie</th>
    <th>passed year</th>
    <th colspan="2">Action</th>
  </thead>
  <tbody>
   

    @foreach( $edata as $value)
    <tr>
    <td>{{$value->instute}}</td>
      <td>{{$value->level}}</td>
      <td>{{$value->retreive}}</td>
      <td>{{$value->Passed_year}}</td>
     

    <td><a href="/education-edit/{{$value->id}}"><i class="fas fa-edit text-white mt-2"></i></a> </td>
   
    <td>
      <button   type="button"  class="btn " data-toggle="modal" data-target="#exampleModal{{$value->id}}">
        <i class="fas fa-times text-danger"></i>
      </button>
      <div class="modal fade" id="exampleModal{{$value->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-danger" id="exampleModalLabel">You want delete this</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <ul>
                <li class="text-capitalize"> {{$value->instute}}</li>
                  <li class="text-capitalize">{{$value->level}}</li>
                    <li class="text-capitalize"> {{$value->retreive}}</li>
                      <li class="text-capitalize">{{$value->Passed_year}}</li>
              </ul>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-danger " data-dismiss="modal"> <i class="fas fa-times text-danger"></i> No</button>
              <button wire:click="educationdelete({{$value->id}})" type="button" class="btn btn-outline-success " data-dismiss="modal"><i class="fas fa-check text-success"></i>Yes</button>
            </div>
          </div>
        </div>
      </div>
    </td>
      
      </tr>

    @endforeach


  </tbody>
</table>



  </div>

</div>

{{-- ////////////// --}}



    
<br><br>
     
<div class="row p-2">
  <div class="col-sm-12 bg-theme p-3 ">

        <div class="d-flex justify-content-around ">
          <h4 class=""><a href="" >Posts</a></h4> 
          <a href="/createpost" class="text-white"> Add <i class="fas fa-plus-circle the ml-2"></i></a>  
        </div>

        @if(session()->has("post"))
        <p class="text-center text-white">{{session()->get("post")}}</p>
        @endif
     
    
      <table class="table ">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col" colspan="2">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($postdata as $postvalue)
          <tr>
          <th scope="row">{{$postvalue->id}}</th>
            <td>{{$postvalue->ptitle}}</td>
            <td class="description">{{substr($postvalue->pdescription,0,70)}}</td>
          


            <td><a href="/education-edit/{{$postvalue->id}}"><i class="fas fa-edit text-white mt-2"></i></a> </td>
   
            <td>
              <button   type="button"  class="btn " data-toggle="modal" data-target="#exampleModalpost{{$postvalue->id}}">
                <i class="fas fa-times text-danger"></i>
              </button>
              <div class="modal fade" id="exampleModalpost{{$postvalue->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header ">
                      <h5 class="modal-title text-danger " id="exampleModalLabel">You want delete this</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <ul>
                        <li class="text-capitalize "> {{$postvalue->ptitle}}</li>
                          <li class="text-capitalize description">{{$postvalue->pdescription}}</li>
                           
                      </ul>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-outline-danger " data-dismiss="modal"> <i class="fas fa-times text-danger"></i> No</button>
                      <button wire:click="postelete({{$postvalue->id}})" type="button" class="btn btn-outline-success " data-dismiss="modal"><i class="fas fa-check text-success"></i>Yes</button>
                    </div>
                  </div>
                </div>
              </div>
            </td>
          </tr>
          @endforeach
          

        </tbody>
      </table>
     </div>
      
</div>
       </div>











      


       <!-- git push -u origin master -->



       </div>
       {{-- running project --}}
      <br><br>
      
       <div class="row">
       <div class="col-sm-10 mx-auto bg-theme p-3">
       <span class="text-center pt-3 h4"><a href="" class="the" >Running Projects</a></span>
      <br>
      <br>
     
    @if(session()->has("addurl"))
    <p class="text-white text-center"> {{session()->get("addurl")}}</p> 
    
    @endif
     <br><small>Paste your new LIVE project URL</small>
      <form  wire:submit.prevent="addproject" class="form-group d-flex">
       <input type="text" wire:model="nurl" class="form-control" placeholder="paste your live project URL"> 
       <button type="submit" class="text-white btn"><i class="fas fa-check-circle text-white fa-2x"></i>
       
       </button>
       </form>
       <hr>
       
    @forelse($urldata as $url)
    <table class="table bg-theme table-hover">
    <tr>
    <td>
    {{$url->url}}
    </td>
    <td>
    <button wire:click="urldelete({{$url->id}})" class="btn"><i class="fas fa-times text-danger fa-2x"></i></button>
    </td>
    </tr>
    </table>
    @empty
    <p class="text-center h4 text-danger text-capitalize">no live project yet </p>
    @endforelse
  
    
    </div>
       </div>
  
     {{-- running peoject--}}
   </div>
    </div>
  </div>


<style>
/* input[type] {
  background: none;
    border: none;
  
} */
</style>
<script>
  $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
</script>




</div>