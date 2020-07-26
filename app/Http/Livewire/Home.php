<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\myblog;
use App\social;
use App\post;
use App\education;
use App\likeheart;
use App\userexperience;


class Home extends Component
{
    public $heart=45;
//    public $pic="noimage";




 public function mount(){
    $hstd=new likeheart;
    $data=$hstd->all();
    foreach($data as $value){
        $this->heart=$value->heart;
    }
    
 }
 public function heart(){
    $this->heart++;
    $a=new likeheart;
    $a->heart=$this->heart;
    $a->save();
     
 }


    public function render()
    {
        $firstpoststd=new post;
        $firstpostdata=$firstpoststd->orderBy("id","desc")->limit(2)->get();

        $poststd=new post;
        $postdata=$poststd->orderBy("id","desc")->paginate(3);

        ////////
        $std=new myblog;
        // $pic= $std->pluck("profile");
        $pic= $std->pluck("profile")[0];
        return view('livewire.home',["pic"=>$pic,"postdata"=>$postdata,"firstpostdata"=>$firstpostdata]);
    }
}
