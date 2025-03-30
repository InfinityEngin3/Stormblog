<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

# Support Facades
use Illuminate\Support\Facades\Hash;

# Models
use App\Models\Members;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $member = new Members();
        $member->member_username = 'Administrator';
        $member->member_email = 'droxiodev@gmail.com';
        $member->sha_pass_hash = Hash::make('123456');
        $member->member_avatar = 'default.png';
        $member->member_group = 1;
        $member->member_connection = 0;
        $member->save();

    }
}
