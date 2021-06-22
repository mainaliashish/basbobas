<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    use HasFactory;
	use SoftDeletes;

    protected $dates = ['deleted_at', 'published_at'];

    protected $fillable = [
        'project_title',
        'project_description',
        'project_location',
        'project_image_one',
        'project_image_two',
        'project_image_three',
        'project_image_four',
    ];

    public function getCreatedAtAttribute($value) {
        $timestamp = strtotime($value);
        //Uppercase letters gives day, month in language(Jan, Third, etc)
        $year = date('Y', $timestamp);
        $month = date('M', $timestamp);
        //lowercase letters gives day, month in numbers(1, 3, etc)
        $day = date('d', $timestamp);

        $date = [
            'year' => $year,
            'month' => $month,
            'day'   => $day
        ];
        return $date;
    }

}
