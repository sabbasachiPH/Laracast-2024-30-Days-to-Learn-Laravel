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
                'title' => 'Web Developer',
                'salary' => '100,000'
            ],
            [
                'id' => '2',
                'title' => 'Full Stack Web Developer',
                'salary' => '200,000'
            ],
            [
                'id' => '3',
                'title' => 'Software Engineer',
                'salary' => '300,000'
            ],
            [
                'id' => '4',
                'title' => 'Project Manager',
                'salary' => '400,000'
            ]
        ];
    }

    public static function find(int $id): array
    {
        $job =  Arr::first(static::all(), fn ($job) => $job['id'] == $id);

        if (!$job) {
            abort(404);
        }

        return $job;
    }
}
