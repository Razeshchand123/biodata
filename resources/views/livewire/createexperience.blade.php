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
            <h3>Add work experience</h3>
         </div>
           
        
       
     <form wire:submit.prevent="addworkexperience" class="form-group">
   
       <input type="text" wire:model="Organization" class="form-control" placeholder="oraganization name     Eg:Aabtechenology Pvt.Ltd">
        @error('Organization') <span class="text-danger">{{$message}}</span> @enderror <br>
           
       <input type="text" wire:model="joining_year" class="form-control" placeholder=" joinning year     Eg:2017-3-9">
       @error('joining_year') <span class="text-danger">{{$message}}</span> @enderror <br>
       <input type="text" wire:model="engaged_year" class="form-control" placeholder=" work duration     Eg:2year">
       @error('engaged_year') <span class="text-danger">{{$message}}</span> @enderror <br>
       <input type="text" wire:model="Position" class="form-control" placeholder="position     Eg: manager"> 
       @error('Position') <span class="text-danger">{{$message}}</span> @enderror <br>
         <input type="submit" value="update" class="btn btn-outline-dark btn-block">
     </form>
   
   
   
   
            </div>
   
        </div>
        
    </div>










</div>
