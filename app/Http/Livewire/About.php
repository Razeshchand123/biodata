<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\social;
use App\education;
use App\liveproject;
use App\userexperience;
use App\myblog;

class About extends Component
{

    // personaldata
 public $name;
 public $address;
 public $email;
 public $number;
 public $pic;
public $imagepath;

// socillinks
public $facebooklink;
public $youtubelink;
public $instalink;
public $glink;
public $github;

// work experience
public $Oraganization ="itpark techenology";
public $joining_year="2017-5-25";
public $engaged_year="3 year";
public $Position="backend developer";





public function mount(){
    $std=new myblog;
    $data=$std->all();
 
    foreach($data as $value){ 
     $this->name=$value->name;
     $this->address=$value->address; 
     $this->email=$value->email;  
     $this->number=$value->number;
     $this->pic=$value->profile;
    }
 
  
}
    public function render()
    {
        $estd=new education;
        $edata=$estd->all();

        $sstd=new social;
        $data=$sstd->all();
 
    $work=new userexperience;
    $workdata= $work->all();

    $stdurl=new liveproject;
    $urldata= $stdurl->all();
         return view('livewire.about',["data"=>$data,"workdata"=>$workdata,"edata"=>$edata,"urldata"=>$urldata]);
    }
}
