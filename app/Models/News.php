<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'news_title',
        'news_description',
        'news_image',
        'news_author'
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

