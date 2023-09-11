<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class FirstAdmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create($this->adminData());
    }

    private function adminData(){
        return [
            'name'=>'admin',
            'email'=>"admin@admin.com",
            'password'=>Hash::make("Admin2022"),
            'email_verified_at'=>Carbon::now(),
        ];
    }
}
