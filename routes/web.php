<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

$poolSchoolView = fn (string $activePage, string $title): \Illuminate\View\View => view('site', [
    'activePage' => $activePage,
    'title' => $title,
]);

Route::get('/', fn () => $poolSchoolView('home', 'Pool School - Prive Zwemles'))->name('home');
Route::get('/lessen', fn () => $poolSchoolView('lessen', 'De Lessen - Pool School'))->name('lessen');
Route::get('/over', fn () => $poolSchoolView('over', 'Over Mij - Pool School'))->name('over');
Route::get('/contact', fn () => $poolSchoolView('contact', 'Contact - Pool School'))->name('contact');
Route::get('/inschrijven', fn () => $poolSchoolView('inschrijven', 'Inschrijven - Pool School'))->name('inschrijven');

Route::post('/contact/verstuur', function (Request $request) {
    $request->validate([
        'voornaam' => ['required', 'string', 'max:80'],
        'achternaam' => ['required', 'string', 'max:80'],
        'email' => ['required', 'email', 'max:150'],
        'onderwerp' => ['required', 'string', 'max:100'],
        'bericht' => ['required', 'string', 'max:2000'],
    ]);

    return redirect()
        ->route('contact')
        ->with('success', 'Bedankt voor je bericht! Stephanie neemt spoedig contact met je op.');
})->name('contact.verstuur');
