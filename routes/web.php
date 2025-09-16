<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/jobs', function () {
        return view('jobs',[
    'jobs'=> [
        [
            'id'=>1,
            'title'=>'Laravel Developer',
            'salary'=>'$120,000',
        ],
        [
            'id'=>2,
            'title'=>'programmer',
            'salary'=>'$10,000',
        ],
        [
            'id'=>3,
            'title'=>'teacher',
            'salary'=>'$40,000',
        ]

    ]
]);
return view('jobs');
})->name('jobs');

Route::get('/jobs/{id}', function ($id) {
        $jobs=[
        [
            'id'=>1,
            'title'=>'Laravel Developer',
            'salary'=>'$120,000',
        ],
        [
            'id'=>2,
            'title'=>'programmer',
            'salary'=>'$10,000',
        ],
        [
            'id'=>3,
            'title'=>'teacher',
            'salary'=>'$40,000',
        ]

        ];
       $job= Arr::first($jobs,fn($job)=>$job['id']==$id);

return view('job',['job' => $job]);
})->name('contact');


