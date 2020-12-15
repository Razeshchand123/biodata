<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\storage;
use Livewire\Component;
use App\myblog;
use App\post;
use App\social;
use App\liveproject;
use App\education;
use App\userexperience;

use Livewire\WithFileUploads;
class Admin extends Component
{
    use WithFileUploads;
    public $rajesh;
// personaldata
 public $name;
 public $address;
 public $email;
 public $number;
 public $pic;
public $imagepath;

// protected $listeners=["filecontrol"];
public $facebooklink;
public $youtubelink;
public $instalink;
public $glink;
public $github;

// work experience
public $Oraganization;
public $joining_year;
public $engaged_year;
public $Position;

// education
public $Passed_year;
public $instute;
public $level;
public $retreive;


// blog
public $blogdescription;
public $blogtitle;

// running projects
public $i=1;
public $url1="https://www.facebook.com";
public $nurl;



public $test;
public function mount(){

// for middleware

  session()->put("rajesh","rajesh");
// formiddleware



    $std=new myblog;
    $data=$std->all();
 
    foreach($data as $value){ 
     $this->name=$value->name;
     $this->address=$value->address; 
     $this->email=$value->email;  
     $this->number=$value->number;
     $this->pic=$value->profile;
    }
    $stdsocial= new social;
    $sdata=$stdsocial->all();
    foreach($sdata as $asocial){
             $this->facebooklink = $asocial->furl;
             $this->youtubelink=$asocial->uurl ;
             $this->instalink=$asocial->iurl ;
             $this->glink= $asocial->gurl;
               $this->github= $asocial->github;
    }

  
}


 public function personaldata(){

    $this->validate([
        'name'=>"required|min:3|max:15",
        "address"=>"required|min:5|max:50",
       "email"=>"required|email",
       "number"=>"required|min:10|max:10",
       "pic"=>"image",
       ]);
    $this->imagepath=$this->pic->store('public/profile');

    $std=new myblog;
    $std= $std->find(1);

    $std->name=$this->name;
    $std->address=$this->address; 
    $std->email=$this->email;
    $std->number=$this->number;

    $std->profile=$this->imagepath;
    $result=$std->save();
    if($result){
        session()->flash("donemsg","Data Successfully Updated");
        $this->pic=$this->imagepath;
        
    }  

 }
public function updatedpic(){
}


 public function sociallinkcontrol(){
     $std=new social;
    //  $std= $std->find(1);
     $std->furl=$this->facebooklink;
     $std->iurl=$this->instalink;
     $std->uurl=$this->youtubelink;
     $std->gurl=$this->glink;
     $std->github=$this->github;
   
     $result=$std->save();
    if($result){
        session()->flash("donemsg","Data Successfully Updated");
        $this->pic=$this->imagepath;
        
    }

 }  



public function postcontrol(){
    $this->test="im model control";
    
}




public function logout(){
    session()->forget("rajesh");
    redirect('/');
}


public function delete($id){
   
    $std=new userexperience;
    $data=$std->find($id);
    $result=$data->delete();
    if($result){
        session()->flash("donemsg","Data Successfully Deleted");
      
    }

}
public function educationdelete($id){
   
    $std=new education;
    $data=$std->find($id);
    
    $result=$data->delete();
    if($result){
        session()->flash("insmasg","Data Successfully Deleted");
      
    }
    

}


public function updated($field){
    $this->validateOnly($field,[
        'name'=>"required|min:3|max:15",
        "address"=>"required|min:5|max:50",
       "email"=>"required|email",
       "number"=>"required|min:10|max:10",
       "pic"=>"required",
    ]);
}

public function postelete($id){
    $std=new post;
    $data=$std->find($id);
    $result=$data->delete();
    if($result){
        session()->flash("post","Data Successfully Deleted");
      
    }

}


public function addblog(){
    $std=new post;
    $std->pdescription=$this->blogtitle;
    $std->pdescription=$this->blogdescription;
    
    $result=$std->save();
    if($result){
        session()->flash("post","post added");
    }
    
    
    
}



public function addproject(){
    $std=new liveproject;
    $std->url=$this->nurl;
    $result=$std->save();
    if($result){
        session()->flash("addurl","Data Successfully Added");
    }
}

public function urldelete($turl){
    $std=new liveproject;
    $data =$std->find($turl);
   $result= $data->delete();
   if($result){
    session()->flash("addurl","Data Successfully Deleted");
}
}






    public function render()
    {
        $poststd=new post;
        $postdata=$poststd->orderBy("id","desc")->get();
        ///////////
        $estd=new education;
        $edata=$estd->orderBy("id","desc")->get();

       ////////////////////
    $wstd=new userexperience;
    $wdata=$wstd->all();

    $stdurl=new liveproject;
    $urldata= $stdurl->all();

        return view('livewire.admin',['wdata'=>$wdata,"edata"=>$edata,"postdata"=>$postdata,"urldata"=>$urldata]);
    }
}
