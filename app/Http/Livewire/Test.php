<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\myblog;
use App\social;
use App\education;
use App\userexperience;

use Illuminate\Support\Facades\storage;
class Test extends Component
{
    use WithFileUploads;
    public $photo;
    public $filename;

    public $test="ra";
public function mount(){

    if($this->test !="ram"){
        $this->test="woow";
    }

}
    public function save()
    {
        $this->validate([
            'photo' => 'image|max:1024', // 1MB Max
        ]);

        $this->filename=$this->photo->store('public/images');



    }
public function educationdelete($id){
    $this->test="deletebymodel".$id;
   
}

public function loadinfun(){
    $this->test="loadinfun";
}
    public function render()
    {
        $estd=new education;
        $edata=$estd->all();
        return view('livewire.test',["edata"=>$edata]);
    }
}



// 111111111111111111111111111111111111111111111111111111111111111111111111111111111111111
// first choti run garauda admin.php ma find(1) vanne line line comment garne

$std=new social;
//  $std= $std->find(1);

$std=new myblog;
// $std= $std->find(1);

// 11111111111111111111111111111111111111111111111111111111111111111111





// ===222222222222222222222222===================
// home.php ma
// $pic= $std->pluck("profile")[0]; bbata [0] hataune
// ===222222222222222222222222===================