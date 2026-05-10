<?php

use Illuminate\Support\Facades\Route;

// Dashboard
Route::get('/', function () {
    return view('pages.dashboard.dashboard');
});

// Tracks
Route::get('/tracks', function () {
    return view('pages.tracks.trindex');
});

Route::get('/tracks/detail', function () {
    return view('pages.tracks.track');
});

// Contrats
Route::get('/contracts', function () {
    return view('pages.contracts.cindex');
});

// Stakeholders
Route::get('/stakeholders', function () {
    return view('pages.stakeholders.index');
});

Route::get('/stakeholders/details', function () {
    return view('pages.stakeholders.stakeholder');
});

// Documents
Route::get('/documents', function () {
    return view('pages.documents.dindex');
});

// Settings
Route::get('/settings', function () {
    return view('pages.settings.settings');
});

// Notifications
Route::get('/notifications', function () {
    return view('pages.notifications.index');
});
