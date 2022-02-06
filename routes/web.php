<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SearchController;
use App\Models\Assignment;

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

//for landing page
Route::get('/', function () {
    return view('welcome');
});

// Authentication routes
Auth::routes();

//dashboard route
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

//assignment routes
Route::get('/assignment', [App\Http\Controllers\AssignmentController::class, 'index'])->name('assignment');
Route::post('/assignment', [AssignmentController::class, 'store']);
Route::get('/lecturerAssignments/{assignment}', [AssignmentController::class, 'mark']);
Route::put('/submittedAssignments/{assignment}/mark', [AssignmentController::class, 'markSubmited'])->name('mark_assignment');
Route::put('/assignments/{assignment}', [AssignmentController::class, 'update']);
Route::delete('/assignments/{assignment}', [AssignmentController::class, 'destroy']);
Route::get('assignments/students/records', [AssignmentController::class, 'viewRecords']);
Route::get('assignments/students/submit', [AssignmentController::class, 'submitAssignment']);
Route::post('assignments/students/submit/{assignment}', [AssignmentController::class, 'submit'])->name('submit');
Route::get('/assignments/doneAssignment', [AssignmentController::class, 'doneAssignment']);

//lecturer routes
Route::get('/lecturers', [App\Http\Controllers\LecturerController::class, 'index'])->name('lecturer');
Route::post('/lecturers', [LecturerController::class, 'store']);
Route::put('/lecturers/{lecturer}', [LecturerController::class, 'update']);
Route::delete('/lecturers/{lecturer}', [LecturerController::class, 'destroy']);

//Student routes
Route::get('/students', [App\Http\Controllers\StudentController::class, 'index'])->name('Student');
Route::post('/students', [StudentController::class, 'store']);
Route::put('/students/{student}', [StudentController::class, 'update']);
Route::delete('/students/{student}', [StudentController::class, 'destroy']);

//search route
// Route::get('/', [SearchController::class, 'index']);
Route::post('/search', [SearchController::class, 'searchAssignment'])->name('search');