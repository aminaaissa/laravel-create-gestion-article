<?php

use Illuminate\Database\Seeder;
use App\Role;
class roles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //
Rolle::insert(['name'=>"Admin"]);
Rolle::insert(['name'=>"Editeur"]);
Rolle::insert(['name'=>"Auteur"]);
Rolle::insert(['name'=>"visiteur"]);

DB::table('user_role')->insert([
    'user_id'=> 1,
    'role_id'=> 1,
]);

DB::table('user_role')->insert([
    'user_id'=> 2,
    'role_id'=> 2,
]);





    }
}
