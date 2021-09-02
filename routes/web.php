<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\CensusRecordController;
use App\Http\Controllers\HomeController;

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


Route::get('/admin', [ViewController::class, 'home']);

Route::resource('/censusRecord', CensusRecordController::class);

Route::get('/user', [ViewController::class, 'userLanding']);

Route::get('/censusRec', function () {
    return view('admin/censusRec');
});

Route::get('/AddMemberAdmin', function () {
    return view('admin/AddMemberAdmin');
});

Route::get('/updateCensus', function () {
    return view('admin/updateCensus');
});

Route::get('/censusDetail', function () {
    return view('admin/censusDetail');
});

Route::get('/addAccount', function () {
    return view('admin/addAccount');
});

Route::get('/addRecUser', function () {
    return view('user/addRecUser');
});

Route::get('/censusRecUser', function () {
    return view('user/censusRecUser');
});

Route::get('/unverifiedUser', function () {
    return view('user/unverifiedUser');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::post('new-rec', [CensusRecordController::class, 'store']);
Route::post('census-view', [CensusRecordController::class, 'show']);
Route::post('census-delete', [CensusRecordController::class, 'destroy']);
Route::post('census-deleteAll', [CensusRecordController::class, 'destroyAll']);
Route::post('add-member', [CensusRecordController::class, 'addMember']);
Route::post('update-record', [CensusRecordController::class, 'updateRecord']);
Route::post('updating', [CensusRecordController::class, 'update']);
Route::post('update-rec', [CensusRecordController::class, 'edit']);
Route::post('verify', [CensusRecordController::class, 'verifyCensus']);
Route::post('verify-census', [CensusRecordController::class, 'verify']);
Route::post('search-unverified', [CensusRecordController::class, 'searchUnverified']);
Route::post('search-verified', [CensusRecordController::class, 'searchVerified']);


Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/AddRecAdmin', [HomeController::class, 'addRecAdmin'])->name('AddRecAdmin');
Route::get('/unverifiedCensusAdmin', [HomeController::class, 'unverifiedCensusAdmin'])->name('unverifiedCensusAdmin');
Route::get('/userAccounts', [HomeController::class, 'show'])->name('UserAccounts');
Route::get('/viewCensusAdmin', [HomeController::class, 'viewCensusAdmin'])->name('ViewCensusAdmin');
Route::get('/censusRec', [HomeController::class, 'censusRecord'])->name('CensusRecord');

