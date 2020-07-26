<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\education;
class Addedducation extends Component
{
    public $test;
    
    public $Passed_year;
    public $instute;
    public $level;
    public $retreive;




    public function addeducation(){


        $this->validate([
            'instute'=>"required|min:5|max:50",
            "level"=>"required|min:5|max:10",
           "retreive"=>"required",
           "Passed_year"=>"required",
        ]);
        // $this->test="addeducation";
        $std=new education;

        $std->instute=$this->instute;
        $std->level=$this->level;
        $std->retreive=$this->retreive;
        $std->Passed_year=$this->Passed_year;
        $result=$std->save();
    if($result){
        session()->flash("donemsg","data successfully Added");
         $this->instute ="";
         $this->level ="";
         $this->retreive="";
         $this->Passed_year="";
        
    }

    }




    public function updated($field){
        $this->validateOnly($field,[
            'instute'=>"required|min:5|max:50",
            "level"=>"required|min:5|max:10",
           "retreive"=>"required",
           "Passed_year"=>"required",
        ]);
    }
    

    public function render()
    {
        return view('livewire.addedducation');
    }
}
