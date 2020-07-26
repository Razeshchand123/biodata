<div>
   

<div class="container" style="margin-top:-10%;">
    <div class="row">
       
        <div class="col-sm-7 m-auto">

            <div class=" d-flex justify-content-between">
                <a href="/admin"><i class="fas fa-arrow-left fa-2x text-primary"></i></a>
                <h3>Add blog posts</h3>
             </div>
            @if(session()->has("post"))
            <p class="text-center text-success">{{session()->get("post")}}</p>
            @endif
            <form wire:submit.prevent="addblog" class="form-group">
    
                <input type="text" wire:model="blogtitle" class="form-control" placeholder="Title">
                 @error('blogtitle') <span class="text-danger">{{$message}}</span> @enderror <br>
                    
                <textarea  rows="6" class="form-control" placeholder="Description" wire:model="blogdescription">
                </textarea>
                @error('blogdescription') <span class="text-danger">{{$message}}</span> @enderror <br>
                
                
                  <input type="submit" value="save" class="btn btn-outline-dark btn-block">
              </form>
        </div>
    </div>
</div>


</div>
