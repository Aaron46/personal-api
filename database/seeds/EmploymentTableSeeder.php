<?php

use Illuminate\Database\Seeder;

class EmploymentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employments')->insert([
            [
            'address' => '1776 Ave of the States #301, Lakewood Township, NJ 08701' ,
            'dateEnd' => '2018-12-31',
            'dateStart' => '2018-05-16',
            'name' => 'Bitbean']
        ]);
    }
}
