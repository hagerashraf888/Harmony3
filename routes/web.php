<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\HTTP\Controllers\ProjectController;



use App\HTTP\Controllers\HomesController;
use App\HTTP\Controllers\AboutController;
use App\HTTP\Controllers\ServiceController;
use App\HTTP\Controllers\ProjectsController;
use App\HTTP\Controllers\ContactsController;

use App\HTTP\Controllers\MasterRoomController;
use App\HTTP\Controllers\SingleRoomController;
use App\HTTP\Controllers\LivingRoomController;
use App\HTTP\Controllers\DinningRoomController;
use App\HTTP\Controllers\KitchenController;

use App\HTTP\Controllers\MasterBedController;
use App\HTTP\Controllers\SingleBedController;
use App\HTTP\Controllers\ClosetController;
use App\HTTP\Controllers\MirrorController;
use App\HTTP\Controllers\SofaController;
use App\HTTP\Controllers\ChairController;
use App\HTTP\Controllers\TableController;
use App\HTTP\Controllers\CupboardController;

use App\HTTP\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\HTTP\Controllers\MainController;

use App\Models\Category;

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
    return view('index');
})->name('index');

/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/user/projects', [MainController::class, 'projects'])->name('projects');
Route::get('/user/rooms', [MainController::class, 'rooms'])->name('rooms');

Route::get('/pages/harmony', [App\Http\Controllers\HarmonyController::class, 'index'])->name('harmony');
Route::post('/pages/homes', [App\Http\Controllers\HomesController::class, 'index'])->name('homes');
Route::get('/pages/homes', [App\Http\Controllers\HomesController::class, 'index'])->name('homes');

Route::get('/pages/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');
Route::get('/pages/service', [App\Http\Controllers\ServiceController::class, 'index'])->name('service');
//Route::get('/pages/projects', [App\Http\Controllers\ProjectsController::class, 'index'])->name('projects');
Route::get('/pages/contacts', [App\Http\Controllers\ContactsController::class, 'index'])->name('contacts');



$category_rooms = Category::where('type_id',1)->get();
$category_types = Category::where('type_id',2)->get();
foreach ($category_rooms as $category) {
	//$cat = str_replace(' ', '', $category->name);
	Route::get('/user/'.$category->name.'/{id}', [MainController::class, 'display'])->name($category->name);
}
foreach ($category_types as $category) {
	//$cat = str_replace(' ', '', $category->name);
	Route::get('/user/'.$category->name.'/{id}', [MainController::class, 'display'])->name($category->name);
}


Route::middleware(['admin'])->prefix('/admin')->group(function () 
{

/* Projects */
Route::get('/admin/get_projects', [ProjectController::class, 'get_projects'])->name('get_projects');

Route::get('/admin/add_project_page', [ProjectController::class, 'add_project_page'])->name('add_project_page');
Route::post('/admin/add_project', [ProjectController::class, 'add_project'])->name('add_project');

Route::get('/admin/edit_project_page/{id}', [ProjectController::class, 'edit_project_page'])->name('edit_project_page');
Route::post('admin/update_project/{id}',[ProjectController::class, 'update_project'])->name('update_project');

Route::get('/admin/delete_project/{id}', [ProjectController::class, 'delete_project'])->name('delete_project');


/* categories */
Route::get('/admin/get_categories', [CategoryController::class, 'get_categories'])->name('get_categories');

Route::get('/admin/add_category_page', [CategoryController::class, 'add_category_page'])->name('add_category_page');
Route::post('/admin/add_category', [CategoryController::class, 'add_category'])->name('add_category');

Route::get('/admin/edit_category_page/{id}', [CategoryController::class, 'edit_category_page'])->name('edit_category_page');
Route::post('admin/update_category/{id}',[CategoryController::class, 'update_category'])->name('update_category');

Route::get('/admin/delete_category/{id}', [CategoryController::class, 'delete_category'])->name('delete_category');

});



Route::get('/pages/cart', [App\Http\Controllers\CartController::class, 'index'])->name('cart');






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
