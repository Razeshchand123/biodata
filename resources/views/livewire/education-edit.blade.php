<div>
    


   
    <div class="container " style="margin-top:-10%;">
        <div class="row">
            <div class="col-sm-7 m-auto">
   
              <div>
                   @if(session()->has("donemsg"))
               <p class="text-center text-success">{{session()->get("donemsg")}}</p>
             
               @endif
           </div>
           <div class=" d-flex justify-content-between">
            <a href="/admin"><i class="fas fa-arrow-left fa-2x text-primary"></i></a>
            <h3>Edit education</h3>
         </div>

        
       
     <form wire:submit.prevent="editeducation" class="form-group">
       
       <input type="text" wire:model="instute" class="form-control" placeholder="Instute name">
       @error('instute') <span class="text-danger">{{$message}}</span> @enderror <br>
         <input type="text" wire:model="level" class="form-control" placeholder="Level of course">
         @error('level') <span class="text-danger">{{$message}}</span> @enderror <br>
         <input type="text" wire:model="retreive" class="form-control" placeholder=" Retreive">
         @error('retreive') <span class="text-danger">{{$message}}</span> @enderror <br>
         <input type="text" wire:model="Passed_year" class="form-control" placeholder="passed year"> 
         @error('Passed_year') <span class="text-danger">{{$message}}</span> @enderror <br>
   
         <input type="submit" value="Update" class="btn btn-outline-dark btn-block">
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
