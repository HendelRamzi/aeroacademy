<?php

use App\Models\Formation;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('website.home');
})->name('website.home');

Route::get('/formations', function(){
    return view('website.formation');
})->name('website.formations');



Route::get('/contactez-nous', function(){
    return view('website.contact');
})->name('website.contact');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::get('/admin', function () {
//     return view('admin.dashboard');
// })->name('admin.dashboard');


Route::prefix('admin')->group(function(){
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');


    Route::prefix('formations')->group(function(){

        
        Route::get('/list', function(){
            return view('admin.formations.index');
        })->name('admin.formations.index');


        Route::get('/details/{id}', function($id){
            try{
                $formation = Formation::find($id); 
                return view('admin.formations.details', [
                    'formation' => $formation
                ]);
            }catch(\Exception $e){
                // Handle the error
            }
        })->name('admin.formations.details');


        Route::get('/edit/{id}', function($id){
            try{
                $formation = Formation::find($id);
                return view('admin.formations.edit', [
                    'formation' => $formation
                ]);
            }catch(\Exception $error){
                // Handel the error
            }
        })->name('admin.formations.edit');


        
        Route::get('/create', function(){
            return view('admin.formations.create');
        })->name('admin.formations.create');

    });

    Route::prefix('contacts')->group(function(){
                
        Route::get('/list', function(){
            return view('admin.contacts.index');
        })->name('admin.contacts.index');

        Route::get('/details/{id}', function($id){
            try{
                $formation = Contact::find($id); 
                return view('admin.contacts.details', [
                    'formation' => $formation
                ]);
            }catch(\Exception $e){
                // Handle the error
            }
        })->name('admin.contacts.details');



    });


    
    






});



Route::prefix('image')->group(function (){

    Route::get('/load/formation/thumb/{image}', function($image){
        $headers = [
            "Content-Disposition" => "inline"
        ];
        return Storage::download('/formation//'.$image, $image, $headers);
    });


});
