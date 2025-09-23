<?php

namespace App\Models;

use Arr;


class Job{
    public  static function all(): array
{
        return [
             [
                'id'=>1,
                'title'=>'developer',
                'salary'=>'$60,000',
             ],
             [
                'id'=>2,
                'title'=>'designer',
                'salary'=>'$50,000',
             ],
             [
                'id'=>3,
                'title'=>'teacher',
                'salary'=>'$40,000',
            ]
        ];
    }
    public static function find( int $id): array
    {
        $job= Arr::first(static::all(),fn($job)=>$job['id']==$id);

        if(!$job){
            abort(404);
        }
    }   
}