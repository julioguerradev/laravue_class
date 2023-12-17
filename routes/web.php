<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;

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




// ______________________ Início
// Função com o nome dos métodos
// Route::post('users', function (){
// Route::put('users', function (){
// Route::delete('users', function (){
// Route::path('users', function (){
// Route::options('users', function (){
// Route::get('users', function (){
//     return 'Hello World';
// });

// ______________________ Para rotas de visualização sem regras de negócio
// Route::view('/welcome1', 'welcome', [
//     'title' => 'Hello World'
// ]);
Route::get('/', function () {
    return view('welcome');
});



// ______________________ Redirecionando
// Route::redirect('rota-a', 'rota-b', 301);
// Route::permanentRedirect('rota-a', 'rota-b');
Route::get('rota-a', function(){
    // Lógica
    
    // Pode ser acessado através de uma classe, porém é recomendado usar a helper
    // return Redirect::route('b');
    return redirect()->route('b');
});

Route::get('rota-b', function(){
    return 'Rota-b';
})->name('b');



// Suporta Múltiplos métodos
Route::match(['get', 'post'], 'users', function (){
    return 'Hello World';
})->name('users');



// ______________________ Rotas com parâmetro
// A ordem dos parâmetros importam!
// Route::get('/user/{id?}/{name?}', function($id = null, $name = null){
//     return 'User ' . $id . ' ' . $name;
// Route::get('/user/{id}/{name?}', function($id = null, $name = null){
    // return 'User ' . $id . ' - ' . $name;
    // Validando parâmetros passados
// })->where([
    // 'id'   => '[0-9]+',
//     'name' => '[a-zA-z]+'
// ]);
// })->where('id', '[0-9]+')->where('name', '[a-zA-z]+');

// Route::get('token/{token}', function($token){
//     return $token;
// })->whereNumber('token');
// })->whereAlpha('token');
// })->whereAlphaNumeric('token');
// })->whereUuid('token');
// });

// Route::prefix('user')->name('admin.')->group(function(){
// Route::middleware('auth')->group(function(){
//     Route::get('users', function() {
//         return 'Hello World!';
//     })->name('users');
    
//     Route::get('user/{id}', function($id) {
//         return 'User id: ' . $id;
//     })->name('user');
// });

// ______________________ Subdominios
// Route::domain('{user}.cursolaravelpro.test')->group(function() {
//     Route::get('{$id?}', function($user, $id = null){
//         return "{$user} {$id}";
//     });

//     Route::get('user', function() {

//     });
// });

// Route::fallback(function () {
//     return 'Hello World!';
// });


// ______________________ Injeção de dependências
// Route::get('/', function(Illuminate\Http\Request $request){
//     // dd($request);
//     // dd($request->query);
//     dd($request->query('curso'));
// });


// ______________________ Injeção de dependências
// Route::get('/', function(App\Models\User $user){
//     dd($user);
// });


Route::get('user/{user}', function(\App\Models\User $user){
    dd($user);
});
