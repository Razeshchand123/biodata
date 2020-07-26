<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\userexperience;
class Workeedit extends Component
{

    public $test;
    // work experience
public $Organization;
public $joining_year;
public $engaged_year;
public $Position;

public $tid;



public function mount($id){

$std=new userexperience;
$data=$std->find($id);
$this->tid=$id;

 $this->Organization=$data->oraganization;
$this->joining_year=$data->joining;
$this->engaged_year=$data->duration;
$this->Position=$data->position;



}




public function editformcontrol(){

    $this->validate([
        'Organization'=>"required|min:3|max:35",
        "joining_year"=>"required|min:4|max:25",
       "engaged_year"=>"required|max:10",
       "Position"=>"required|min:3|max:15",
       
        ]);

    $std= userexperience::find($this->tid);
    $std->oraganization=$this->Organization;
    $std->joining=$this->joining_year;
    $std->duration=$this->engaged_year;
    $std->position=$this->Position;
    $result=$std->save();
    if($result){
        session()->flash("donemsg","data successfully updated");
        // return redirect()->to('/admin');
    }
}



public function updated($field){
    $this->validateOnly($field,[
                    'Organization'=>"required|min:3|max:35",
                    "joining_year"=>"required|min:4|max:25",
                    "engaged_year"=>"required|max:10",
                    "Position"=>"required|min:3|max:15",
   
    ]);

}




    public function render()
    {
        return view('livewire.workeedit');
    }


}
