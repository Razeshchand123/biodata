<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\userexperience;
class Createexperience extends Component
{
    public $Organization;
public $joining_year;
public $engaged_year;
public $Position;




public function addworkexperience(){

    $this->validate([
        'Organization'=>"required|min:5|max:50",
        "joining_year"=>"required|min:5|max:25",
       "engaged_year"=>"required",
       "Position"=>"required|min:3|max:30",
       
        ]);


  $std=new userexperience;
    $std->oraganization=$this->Organization;
    $std->joining=$this->joining_year;
    $std->duration=$this->engaged_year;
    $std->position=$this->Position;
    $result=$std->save();
    if($result){
        session()->flash("donemsg","data successfully Added");
         $this->Organization ="";
         $this->joining_year ="";
         $this->engaged_year ="";
         $this->Position ="";
        
    }
    



}



public function updated($field){
    $this->validateOnly($field,[
                            'Organization'=>"required|min:5|max:50",
                            "joining_year"=>"required|min:5|max:25",
                        "engaged_year"=>"required",
                        "Position"=>"required|min:3|max:30",
   
    ]);

}






    public function render()
    {
        return view('livewire.createexperience');
    }
}
