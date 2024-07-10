<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job
{
    public static function all(): array
    {
        return [
            [
                'id' => '1',
                'salary' => '$50000',
                'position' => 'Programmer'
            ],
            [
                'id' => '2',
                'salary' => '$10000',
                'position' => 'Teacher'
            ],
            [
                'id' => '3',
                'salary' => '$1000000',
                'position' => 'Boss'
            ],
        ];;
    }

    public static function find($id)
    {
        $jobs = static::all();
        return Arr::first($jobs, fn ($job) => $job['id'] === $id);
    }
}
