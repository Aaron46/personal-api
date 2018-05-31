<?php

use Illuminate\Database\Seeder;

class InstitutionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('institutions')->insert([
            [ 'name' => 'The School for Evolving Technologies',
             'address' => '1771 Madison Ave, Lakewood Township, NJ 08701' ,
             'dateStart' => '2016-09-16',
             'dateEnd' => '2018-04-01' ]
         ]);
    }
}
