<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;



Route::get('/', function () {
    return view('home');
})->name('home');



Route::get('/jobs', function ()  {
        return view('jobs',[
    'jobs'=> Job::all()
        ]);
        });



Route::get('/jobs/{id}', function ($id)  {
$job = Job::find($id);

return view('job',['job' => $job]);
})->name('contact');


