<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'company_description',
        'company_mission',
        'company_logo',
        'company_location',
        'company_address',
        'company_about_image',
        'phone_number_one',
        'phone_number_two',
        'phone_number_three',
        'phone_number_four',
        'company_email',
        'company_fax',
        'company_facebook',
        'company_twitter',
        'banner_image',
    ];
}