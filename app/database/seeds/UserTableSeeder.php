<?php
class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->delete();

        $user = new User;
        $user->email = 'philipwinrock@aol.com';
        $user->password = Hash::make('mofo12');
        $user->save();
    }

}
