<?php

use Illuminate\Database\Seeder;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrator = new \App\User;
        $administrator->username = "yungki";
        $administrator->name = "Yungki Lesmana";
        $administrator->email = "yungki@gmail.com";
        $administrator->outlet_id = 1;
        $administrator->roles = json_encode(["ADMIN"]);
        $administrator->password = Hash::make('12345678');

        $administrator->save();

        $this->command->info("User berhasil di insert");
    }
}
