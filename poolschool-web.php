<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Pool School — Web Routes
|--------------------------------------------------------------------------
*/

// Home
Route::get('/', fn() => view('pages.home'))->name('home');

// Lessen
Route::get('/lessen', fn() => view('pages.lessen'))->name('lessen');

// Over mij
Route::get('/over', fn() => view('pages.over'))->name('over');

// Contact
Route::get('/contact', fn() => view('pages.contact'))->name('contact');

Route::post('/contact/verstuur', function (Request $request) {
    $validated = $request->validate([
        'voornaam'   => 'required|string|max:80',
        'achternaam' => 'required|string|max:80',
        'email'      => 'required|email|max:150',
        'onderwerp'  => 'required|string|max:100',
        'bericht'    => 'required|string|max:2000',
    ]);

    // Mail::to('zwemlespoolschool@gmail.com')->send(new \App\Mail\ContactMail($validated));

    return redirect()->route('contact')
        ->with('success', 'Bedankt voor je bericht! Stephanie neemt spoedig contact met je op.');
})->name('contact.verstuur');

// Inschrijven (wachtlijst)
Route::get('/inschrijven', fn() => view('pages.inschrijven'))->name('inschrijven');
