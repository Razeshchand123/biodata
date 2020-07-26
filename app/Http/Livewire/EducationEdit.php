<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\education;

class EducationEdit extends Component
{

public $targetid; 

public $instute;
public $level;
public $retreive;
public $Passed_year;

 public function mount($id){
     $this->targetid=$id;
     $std=education::find($id);
     $this->instute=$std->instute;
     $this->level=$std->level;
     $this->retreive=$std->retreive;
     $this->Passed_year=$std->Passed_year;


 }


    public function editeducation(){

        $this->validate([
            'instute'=>"required|min:5|max:50",
            "level"=>"required|min:5|max:10",
           "retreive"=>"required",
           "Passed_year"=>"required",
        ]);
      
        $std=education::find( $this->targetid);
        $std->instute=$this->instute;
        $std->level=$this->level;
        $std->retreive=$this->retreive;
        $std->Passed_year=$this->Passed_year;
        $result=$std->save();
    if($result){
        session()->flash("donemsg","data successfully updated");

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
        return view('livewire.education-edit');
    }
}
