<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App;
use App\social;
class pdfcontroller extends Controller
{
    function pdfgen(){
   $data=social::all();
              
    //  $pdf = App::make('dompdf.wrapper');
    //   $pdf->loadHTML('<h1> hello iamtesting </h1>');
    //    return $pdf->stream();
    
      $pdf = PDF::loadView('livewire.test', $data);
    
        return $pdf->stream();
    }
}
