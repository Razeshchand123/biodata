<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\post;
class Createpost extends Component
{

    // blog
public $blogdescription;
public $blogtitle;





public function addblog(){


    $this->validate([
        'blogtitle'=>"required|min:10|max:700",
        "blogdescription"=>"required|min:200|max:2000",
       
       
        ]);

    $std=new post;
    $std->ptitle=$this->blogtitle;
    $std->pdescription=$this->blogdescription;
    
    $result=$std->save();
    if($result){
        session()->flash("post","post added");
    }
    
    
    
}



public function updated($field){
    $this->validateOnly($field,[
        'blogtitle'=>"required|min:20|max:200",
        "blogdescription"=>"required|min:344|max:2000",
   
    ]);

}


    public function render()
    {
        return view('livewire.createpost');
    }
}
