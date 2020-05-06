<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class _O_k_r_TableSeeder extends Seeder
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
            'objective' => '日本一のラーメン屋を作る',
            'key_result' => '売り上げ300%達成',
            'parent_id' => null,
            'master_flag' => true,
            'class_number'=>1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('_o_k_r')->insert($param);

        $param=[
            'id' => 2,
            'objective' => 'SNSで拡散する',
            'key_result' => '公式アカウントを作りで毎日投稿',
            'parent_id' => 1,
            'class_number'=>2,
            'master_flag' => false,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('_o_k_r')->insert($param);

        $param=[
            'id' => 3,
            'objective' => 'SNSで拡散する',
            'key_result' => '公式アカウントを作りで毎日投稿',
            'parent_id' => 1,
            'class_number'=>2,
            'master_flag' => false,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('_o_k_r')->insert($param);
    }
}
