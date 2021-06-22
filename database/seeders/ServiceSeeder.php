<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;


class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $service_1 = Service::create([
            'service_title' => 'Road Construction',
            'service_slug'  => 'road-construction',
            'service_image' => '',
            'service_description' => 'Business many variations of passages of psum availablesuffhuof passages offery Lorem Ipsumavailabmajority consectetur adipisicing elit, sed do eiusmod deartyre teididunt deartyre.'
        ]);

        $service_2 = Service::create([
            'service_title' => 'Home Construction',
            'service_slug' => 'home-construction',
            'service_image' => '',
            'service_description' => 'Business many variations of passages of psum availablesuffhuof passages offery Lorem Ipsumavailabmajority consectetur adipisicing elit, sed do eiusmod deartyre teididunt deartyre.'
        ]);

        $service_3 = Service::create([
            'service_title' => 'Renovation',
            'service_slug'  => 'renovation',
            'service_image' => '',
            'service_description' => 'Business many variations of passages of psum availablesuffhuof passages offery Lorem Ipsumavailabmajority consectetur adipisicing elit, sed do eiusmod deartyre teididunt deartyre.'
        ]);
    }
}