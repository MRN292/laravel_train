<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\card;
use App\Models\user_role;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

use Illuminate\Http\Request;
use app\Models\profile;




class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(rolesTableSeeder::class);
        $this->call(usersTableSeeder::class);

        $profiles = profile::all();


        foreach ($profiles as $profile) {
            $userid = $profile->id;
            $cost = $profile->cost;




            if ($cost >= 2000000 && $cost <= 5000000) {

                user_role::insert(
                    [
                        'userid' => $userid, 'roleid' => 2
                    ]
                );


                $card = new card;
                $deleteDate = Carbon::now()->addMonths(12);
                $deleteDateStr = $deleteDate->format('Y-m-d H:i:s');

                $card->deleted_at = $deleteDateStr;
                $card->userId = $userid;

                $card->save();
            } elseif ($cost > 5000000) {
                user_role::insert(
                    [
                        'userid' => $userid, 'roleid' => 3
                    ]
                );

                $card = new card;
                $deleteDate = Carbon::now()->addMonths(12);
                $deleteDateStr = $deleteDate->format('Y-m-d H:i:s');

                $card->deleted_at = $deleteDateStr;
                $card->userId = $userid;

                // save the record
                $card->save();
            }
        }
    }
}
