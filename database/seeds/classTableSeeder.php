<?php

use Illuminate\Database\Seeder;

class classTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param=[
            'id' => 1,
            'class_title' => '会社',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('class')->insert($param);

        $param=[
            'id' => 2,
            'class_title' => '部門',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('class')->insert($param);

        $param=[
            'id' => 3,
            'class_title' => '個人',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('class')->insert($param);
    }
}
