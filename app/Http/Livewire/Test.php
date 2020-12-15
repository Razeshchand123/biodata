<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\myblog;
use App\social;
use App\education;
use PDF;
use App;
use App\userexperience;

use Illuminate\Support\Facades\storage;
class Test extends Component
{
    use WithFileUploads;
    public $photo;
    public $filename;
    public $number=0;
    public $productimg;
    public $productimg2;
   


    public $apivariable="ram";

    public $test="ra";

    public function gen(){
        $this->test="gen";
        
        $pdf = App::make('dompdf.wrapper');
      $pdf->loadHTML('<h1>Test</h1>');
       return $pdf->stream();
       
     
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

// $std=new social;
// admin ko 125
//  $std= $std->find(1);

$std=new myblog;
// admin ko line no 103
// $std= $std->find(1);

// 11111111111111111111111111111111111111111111111111111111111111111111





// ===222222222222222222222222===================
// home.php ma
// $pic= $std->pluck("profile")[0]; bbata [0] hataune
// ===222222222222222222222222===================