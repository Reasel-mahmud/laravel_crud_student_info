<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\DepartmentController;

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/',[StudentController::class,'index'])->name('home');
Route::post('/new-student',[StudentController::class,'saveStudent'])->name('new.student');
Route::get('/manage-student',[StudentController::class,'manageStudent'])->name('manage.student');
Route::get('/edit-student/{id}',[StudentController::class,'editStudent'])->name('edit.student');
Route::post('/delete',[StudentController::class,'delete'])->name('delete');

//*************Department*************//

Route::get('/add-department',[DepartmentController::class,'index'])->name('add.department');
Route::post('/new-department',[DepartmentController::class,'saveDepartment'])->name('new.department');


//*************Section*************//

Route::get('/add-section',[SectionController::class,'index'])->name('add.section');
Route::post('/new-section',[SectionController::class,'saveSection'])->name('new.section');
