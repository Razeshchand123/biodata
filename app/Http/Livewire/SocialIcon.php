<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\social;
class SocialIcon extends Component
{
 // socillinks
public $facebooklink;
public $youtubelink;
public $instalink;
public $glink;
public $githublink;
    
    public function render()
    {
        $sstd=new social;
        $data=$sstd->all();
        return view('livewire.social-icon',["data"=>$data]);
    }
}
