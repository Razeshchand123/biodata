<div>

 <div class="container " style="margin-top:-11%;">
     <div class="row">
         <div class="col-sm-7 m-auto">

           <div>
                @if(session()->has("donemsg"))
            <p class="text-center text-success">{{session()->get("donemsg")}}</p>
          
            @endif
        </div>
        <div class=" d-flex justify-content-between">
            <a href="/admin"><i class="fas fa-arrow-left fa-2x text-primary"></i></a>
            <h3>Edit your work</h3>
         </div>
    
  <form wire:submit.prevent="editformcontrol" class="form-group">

  <input type="text" wire:model="Organization" class="form-control">
  @error("Organization") <span class="text-danger">{{$message}}</span> @enderror <br>

      <input type="text" wire:model="joining_year" class="form-control">
      @error("joining_year") <span class="text-danger">{{$message}}</span> @enderror <br>
      <input type="text" wire:model="engaged_year" class="form-control">
      @error("engaged_year") <span class="text-danger">{{$message}}</span> @enderror <br>
      <input type="text" wire:model="Position" class="form-control">
      @error("Position") <span class="text-danger">{{$message}}</span> @enderror <br>

      <input type="submit" value="update" class="btn btn-outline-primary btn-block">
  </form>




         </div>

     </div>
     
 </div>



 <style>
    .footer{
        position: absolute;
        bottom: 0;
        width:100%;
    }
</style>

</div>
