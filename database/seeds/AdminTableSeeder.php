<?php
use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id' => 1,
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin@tekanepal123'),
                'name' => 'admin',
                'created_at' => Carbon\Carbon::now()
            ]
        ];

        foreach ($users as $user) {
            \App\Admin::create($user);
        }
        \App\Models\GlobalSetting::create(
            [
                'id' => 1,
                'site_name' => 'Teka Samuha Nepal',
                'site_nepali_name' => '',
                'site_email' => 'info@tekasamuhanepal.org.np',
                'phone' => '977-01-4431567',
                'website_full_address' => 'Maligau, Kathmandu, Nepal',
                'page_title' => '',
                'page_keyword' => '',
                'page_description' => '',
                'favicon' => '',
                'site_logo' => '',
                'site_logo_nepali' => '',
                'site_status' => 1,
                'extra_one' => '',
                'extra_two' => '',
                'facebook' => '',
                'youtube' => '',
                'linkedin' => '',
                'twitter' =>''
            ]);
    }
}
