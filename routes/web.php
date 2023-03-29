<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
 });

 Route::prefix('admin/')->name('admin.')->group(function(){

    Route::get('index', function () {
        return view('admin.index');
     })->name('index');

     Route::get('home', function () {
        return view('admin.home');
     })->name('home');

     Route::get('contact', function () {
        return view('admin.contact');
     })->name('contact');

     Route::get('about', function () {
        return view('admin.about');
     })->name('about');

     Route::get('praduct', function () {
        return view('admin.praduct');
     })->name('praduct');    

   Route::get('servis', function () {
      return view('admin.servis');
   })->name('servis');

   Route::get('faq', function () {
      return view('admin.faq');
   })->name('faq');


   Route::get('news', function () {
      return view('admin.news');
   })->name('news'); 


   Route::get('community', function () {
      return view('admin.community');
   })->name('community'); 

   Route::get('events', function () {
      return view('admin.events');
   })->name('events');
   


 });

 Route::prefix('user/')->name('user.')->group(function(){

   Route::get('index', function () {
       return view('user.index');
    })->name('index');

    Route::get('home', function () {
      return view('user.home');
   })->name('home');

   Route::get('contact', function () {
      return view('user.contact');
   })->name('contact');

   Route::get('about', function () {
      return view('user.about');
   })->name('about');

   Route::get('praduct', function () {
      return view('user.praduct');
   })->name('praduct');    

 Route::get('servis', function () {
    return view('user.servis');
 })->name('servis');

 Route::get('faq', function () {
    return view('user.faq');
 })->name('faq');


 Route::get('news', function () {
    return view('user.news');
 })->name('news'); 


 Route::get('community', function () {
    return view('user.community');
 })->name('community'); 

 Route::get('events', function () {
    return view('user.events');
 })->name('events');

});

Route::prefix('manager/')->name('manager.')->group(function(){

   Route::get('index', function () {
       return view('manager.index');
    })->name('index');

    Route::get('home', function () {
      return view('manager.home');
   })->name('home');

   Route::get('contact', function () {
      return view('manager.contact');
   })->name('contact');

   Route::get('about', function () {
      return view('manager.about');
   })->name('about');

   Route::get('praduct', function () {
      return view('manager.praduct');
   })->name('praduct');    

 Route::get('servis', function () {
    return view('manager.servis');
 })->name('servis');

 Route::get('faq', function () {
    return view('manager.faq');
 })->name('faq');


 Route::get('news', function () {
    return view('manager.news');
 })->name('news'); 


 Route::get('community', function () {
    return view('manager.community');
 })->name('community'); 

 Route::get('events', function () {
    return view('manager.events');
 })->name('events');

});









// Route::get('/for1/{k}/{n}', function($k,$n){
//     $m = [];
//         for($i=1; $i<=$n; $i++){
//             array_push($m, $k);
//         }
        
//         print_r($m);

//     });

// Route::get('/for2/{a}/{b}', function($a,$b){
//     $m = [];
//         for($i=$a; $i<=$b; $i++){
//             array_push($m, $i);
//         }
            
//         print_r($m);
    
//     });
 

// Route::get('/for3/{a}/{b}', function($a,$b){
//     $m = [];
//         for($i=$b; $i>=$a; $i--){
//             array_push($m, $i);
//         }
//         print_r($m);
        
//     });

// Route::get('/for4/{a}', function($a){
//     $m = [];
//         for($i=1; $i<=10; $i++){
//             array_push($m, $i*$a);
//         }
            
//         print_r($m);
    
//     });

// Route::get('/for5/{a}', function($a){
//     $m = [];
//         for($i=0.1; $i<=1; $i+=0.1){
//             array_push($m, $i*$a);
//         }
            
//         print_r($m);
    
//     });

// Route::get('/for6/{a}', function($a){
//     $m = [];
//         for($i=1.2; $i<=2; $i+=0.1){
//             array_push($m, $i*$a);
//         }
            
//         print_r($m);
    
//     });

// Route::get('/for7/{a}/{b}', function($a,$b){
//     $m =0;
//         for($i=$a; $i<=$b; $i++){
//             $m+=$i;
//         }
//        return $m;
        
//     });

// Route::get('/for8/{a}/{b}', function($a,$b){
//     $m =1;
//         for($i=$a; $i<=$b; $i++){
//             $m*=$i;
//         }
//        return $m;
        
//     });

// Route::get('/for9/{a}/{b}', function($a,$b){
//     $m =1;
//         for($i=$a; $i<=$b; $i++){
//             $m*=$i*$i;
//         }
//        return $m;
        
//     });

// Route::get('/for10/{n}', function($n){
//     $m =0;
//         for($i=1; $i<=$n; $i++){
//             $m+=1/$i;
//         }
//        return $m;
        
//     });
?>