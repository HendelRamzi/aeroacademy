<?php

use App\Models\Contact;
use App\Models\Formation;
use App\Models\Student;
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
    $formations = Formation::all()->take(6); 
    return view('website.home', [
        'formations' => $formations
    ]);
})->name('website.home');

Route::get('/formations', function(){
    $formations = Formation::all(); 
    return view('website.formation', [
        'formations' => $formations

    ]);
})->name('website.formations');

Route::get('/formations/{slug}', function($slug){
    try{
        $formation  = Formation::where('slug', $slug)->first(); 
        $formations = Formation::all(); 
        $content  = json_decode($formation->desc, true); 
        return view('website.formation-details', [
            'formation' => $formation,
            "formations" => $formations,
            "content" => json_encode( $content['blocks'])
        ]);
    }catch(\Exception $error){
        // Handel errors
    }
})->name('website.formation-details');

Route::get('/contactez-nous', function(){
    return view('website.contact');
})->name('website.contact');

Route::get('/vous-inscrire', function(){
    return view("website.vous-inscrire");
})->name('website.vous-inscrire');









Route::get('soon', function(){
    return view('website.coming-soon'); 
})->name('website.soon');

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
                $contact = Contact::find($id); 
                return view('admin.contacts.details', [
                    'contact' => $contact
                ]);
            }catch(\Exception $e){
                // Handle the error
            }
        })->name('admin.contacts.details');



    });


    
    Route::prefix('inscriptions')->group(function(){
        Route::get('/list', function(){
            return view('admin.inscriptions.index');
        })->name('admin.inscriptions.index');




        Route::get('/details/{id}', function($id){
            try{
                $student = Student::find($id); 
                return view('admin.inscriptions.details', [
                    'student' => $student
                ]);
            }catch(\Exception $e){
                // Handle the error
            }
        })->name('admin.inscriptions.details');



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
