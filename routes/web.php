<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\RegistrationController;

Route::get('/',[Homecontroller::class,'index'])->name('home');
Route::get('/add/info',[RegistrationController::class,'index'])->name('add.info');
Route::post('/store/info',[RegistrationController::class,'store'])->name('store.info');
Route::get('/edit/info/{id}',[RegistrationController::class,'edit'])->name('edit.info');
Route::post('/update/info/{id}',[RegistrationController::class,'update'])->name('update.info');
Route::get('/manage/info',[RegistrationController::class,'manageList'])->name('manage.info');
Route::get('/delete/info{id}',[RegistrationController::class,'delete'])->name('delete.info');
