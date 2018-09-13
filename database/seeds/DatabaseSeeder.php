<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(App\User::class,18)->create();
        factory(App\Model\Table::class,58)->create();
        factory(App\Model\Occupant::class,150)->create();
    }
}
