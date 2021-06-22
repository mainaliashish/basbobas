<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Slider;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slider_1 = Slider::create([
            'slider_title' => 'Slider One',
            'slider_description' => 'Slider Description One',
            'slider_image'  => ''
        ]);
        $slider_2 = Slider::create([
            'slider_title' => 'Slider Two',
            'slider_description' => 'Slider Description One',
            'slider_image'  => ''
        ]);
        $slider_4 = Slider::create([
            'slider_title' => 'Slider four',
            'slider_description' => 'Slider Description One',
            'slider_image'  => ''
        ]);
        $slider_5 = Slider::create([
            'slider_title' => 'Slider five',
            'slider_description' => 'Slider Description One',
            'slider_image'  => ''
        ]);
        $slider_7 = Slider::create([
            'slider_title' => 'Slider six',
            'slider_description' => 'Slider Description One',
            'slider_image'  => ''
        ]);
        $slider_8 = Slider::create([
            'slider_title' => 'Slider One',
            'slider_description' => 'Slider Description One',
            'slider_image'  => ''
        ]);
        $slider_9 = Slider::create([
            'slider_title' => 'Slider Two',
            'slider_description' => 'Slider Description One',
            'slider_image'  => ''
        ]);
        $slider_10 = Slider::create([
            'slider_title' => 'Slider four',
            'slider_description' => 'Slider Description One',
            'slider_image'  => ''
        ]);
        $slider_11 = Slider::create([
            'slider_title' => 'Slider five',
            'slider_description' => 'Slider Description One',
            'slider_image'  => ''
        ]);
        $slider_12 = Slider::create([
            'slider_title' => 'Slider six',
            'slider_description' => 'Slider Description One',
            'slider_image'  => ''
        ]);
        
    }
}
