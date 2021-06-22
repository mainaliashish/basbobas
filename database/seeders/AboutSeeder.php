<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\About;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $about = About::create([
            'company_name' => 'ABC Company',
            'company_description' => 'Dorem ipsum dolor sit amet, consectetur adipiscing elit. Ut blandit nisi a dictum tristique. Nullam urna metus, vestibulum ac sodales eSed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam remrutrumDorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut perspiciatis.Dorem ipsum dolor sit amet, consectetur adipiscing elit. Ut blandit nisi a dictum tristique.',
            'company_mission'   => 'Business many variations of passages of Lorem Ipsum availablesuffhuof passages of Lorem Ipsum available, but the majority.',
            'company_logo' => '',
            'company_location' => 'Satashidham, Jhapa',
            'banner_image' => '',
            'company_address' => 'Dudhe',
            'company_about_image' => '',
            'phone_number_one' => '9844639716',
            'phone_number_two' => '0987654321',
            'phone_number_three' => '1234567890',
            'phone_number_four' => '009988773344',
            'company_email' => 'abccompany@gmail.com',
            'company_fax' => '+977 023470121',
            'company_facebook' => 'facebook.com/abccompany',
            'company_twitter' => 'twitter.com/abccompany',
            'company_map'   => 'Map Of Office'
       ]);
    }
}