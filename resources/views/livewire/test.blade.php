<div>


<label for="setprofile" id="labeforsetprofile" class="mt-2">
                         @if ($productimg )
                         <img src="{{ $productimg->temporaryUrl() }}" height="100">
                    
                         @endif
                             <small id="imgspan">समान को फोटो </small>
                             <span wire:loading wire:target="productimg" >Uploading...<i class=" ml-2 mt-4 fas fa-spinner text-danger fa-2x"></i></span>

                      
                            <i class="far fa-images fa-2x"></i>
                            </label>
                             <input  type="file"  wire:model="productimg"  class="d-none" id="setprofile">
                             @error("productimg") <small class="text-danger">{{$message}}</small> @enderror<br>
     


      <!-- -------------------------------------------------------------------                       -->
      <label for="setprofile2" id="labeforsetprofile" class="mt-2">
                         @if ($productimg2 )
                         <img src="{{ $productimg2->temporaryUrl() }}" height="100"><br>
                    
                         @endif
                             <small id="imgspan" >समान को फोटो </small>
                             <span wire:loading wire:target="productimg2" >Uploading...<i class=" ml-2 mt-4 fas fa-spinner text-danger fa-2x"></i></span>

                      
                            <i class="far fa-images fa-2x"></i>
                            </label>
                             <input  type="file"  wire:model="productimg2"  class="d-none" id="setprofile2">
                             @error("productimg2") <small class="text-danger">{{$message}}</small> @enderror<br>
    


                            



<!-- 
<div wire:loading></div>
<div wire:loading.remove></div>
<div wire:loading.class=""></div>
<div wire:loading.class.remove=""></div>
<div wire:loading.attr=""></div>
<div wire:loading wire:target=""></div>

<div wire:poll></div>
<div wire:poll.5000ms></div>
<div wire:poll target="function"></div>

<div wire:offline></div>
<div wire:offline.remove></div>
<div wire:offline.class=""></div>
<div wire:offline.class.remove=""></div>
<div wire:offline.attr=""></div>
 -->






</div>