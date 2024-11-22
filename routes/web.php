<?php

use App\Http\Controllers\Testcontroller;
use App\Models\Transaction;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/call-transaction', function () {
    return Transaction::get();
});

Route::get('/call-transaction/{id}', function ($id) {
    return Transaction::findOrFail($id);
});

Route::get('/add-transaction', function () {
    $transaction = new Transaction();
    $transaction->amount = 100;
    $transaction->category = "gaji";
    $transaction->date="2024-11-22";
    $transaction->type="income";
    $transaction->description="Slip gaji";
    $transaction->save();

    return "Berhasil tambah : ".$transaction;

});

Route::get('/edit-transaction', function () {
    $transaction = Transaction::find(1);
    $transaction->amount = 11100;
    $transaction->save();

    return "Berhasil edit : ".$transaction;

});

Route::get('/delete-transaction', function () {
    $transaction = Transaction::find(1) -> delete();

    return "Berhasil delete : ";

});

Route::get('/testing',Testcontroller::class.'@index');