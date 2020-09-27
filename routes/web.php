<?php
// Login to mysql using mysql -u root
// if mysql is nout found add to $PATH using 'export PATH=/opt/lampp/bin:$PATH'
// You can use PHP myadmin too for looking at a UI for accessing the DB
// phypmyadmin url 'http://localhost/phpmyadmin'
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;

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

#main page
Route::get('/', function () {
    return view('welcome');
});


Route::get('/pizzas', [PizzaController::class, 'index'])->name('pizzas.index');
Route::post('/pizzas', [PizzaController::class, 'store'])->name('pizzas.store');
Route::get('pizzas/create', [PizzaController::class, 'create'])->name('pizzas.create');
Route::get('/pizzas/{id}', [PizzaController::class, 'show'])->name('pizzas.show');
Route::delete('pizzas/{id}', [PizzaController::class, 'destroy'])->name('pizzas.destroy');