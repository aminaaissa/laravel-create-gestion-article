<?php

use Illuminate\Database\Seeder;
use App\User;
class articles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $faker = Faker\Factory::create('fr_FR');
        

        $data = [];
        $users =App\User::pluck('id')->toArray();
        
        for ($i = 1; $i <= 100 ; $i++) {
            array_push($data, [
                'name' =>$faker->sentence,
                'body' => $faker->realText(2000),
                'user_id' => $faker->randomElement($users),
                'published_at' => $faker->dateTime(),


            ]);
        }
        
        DB::table('articles')->insert($data);

        //
    }
     public function user(){

return $this->belongsto(User::class,'user_id');

    }
}
