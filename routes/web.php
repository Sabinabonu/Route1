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
Route::get('/for1/{k}/{n}', function($k,$n){
    $m = [];
        for($i=1; $i<=$n; $i++){
            array_push($m, $k);
        }
        
        print_r($m);

    });

Route::get('/for2/{a}/{b}', function($a,$b){
    $m = [];
        for($i=$a; $i<=$b; $i++){
            array_push($m, $i);
        }
            
        print_r($m);
    
    });
 

Route::get('/for3/{a}/{b}', function($a,$b){
    $m = [];
        for($i=$b; $i>=$a; $i--){
            array_push($m, $i);
        }
        print_r($m);
        
    });

Route::get('/for4/{a}', function($a){
    $m = [];
        for($i=1; $i<=10; $i++){
            array_push($m, $i*$a);
        }
            
        print_r($m);
    
    });

Route::get('/for5/{a}', function($a){
    $m = [];
        for($i=0.1; $i<=1; $i+=0.1){
            array_push($m, $i*$a);
        }
            
        print_r($m);
    
    });

Route::get('/for6/{a}', function($a){
    $m = [];
        for($i=1.2; $i<=2; $i+=0.1){
            array_push($m, $i*$a);
        }
            
        print_r($m);
    
    });

Route::get('/for7/{a}/{b}', function($a,$b){
    $m =0;
        for($i=$a; $i<=$b; $i++){
            $m+=$i;
        }
       return $m;
        
    });

Route::get('/for8/{a}/{b}', function($a,$b){
    $m =1;
        for($i=$a; $i<=$b; $i++){
            $m*=$i;
        }
       return $m;
        
    });

Route::get('/for9/{a}/{b}', function($a,$b){
    $m =1;
        for($i=$a; $i<=$b; $i++){
            $m*=$i*$i;
        }
       return $m;
        
    });

Route::get('/for10/{n}', function($n){
    $m =0;
        for($i=1; $i<=$n; $i++){
            $m+=1/$i;
        }
       return $m;
        
    });
?>