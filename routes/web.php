<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });



 Route::livewire("/","home");
 Route::livewire("/about","about");
 Route::livewire("/admin","admin");


Route::group(["middleware"=>"security"],function(){
   
   
    Route::livewire("/workeedit/{id}","workeedit");
    Route::livewire("/createexperience","createexperience");
    Route::livewire("/addedducation","addedducation");
    Route::livewire("/education-edit/{id}","education-edit");
    Route::livewire("/createpost","createpost");

});


 Route::livewire("/test","test");
 
 

 
 Route::get('/pdf','pdfcontroller@pdfgen');