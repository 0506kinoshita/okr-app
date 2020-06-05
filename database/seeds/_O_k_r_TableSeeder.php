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
            'person_id' => 1,
            'objective' => '日本一のラーメン屋を作る',
            'key_result' => '売り上げ300%達成',
            'detail' => null,
            'parent_id' => null,
            'master_flag' => true,
            'class_number'=>1,
            'parent_master_id'=>null,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('_o_k_r')->insert($param);

        $param=[
            'id' => 2,
            'person_id' => 1,
            'objective' => 'SNSで拡散する',
            'key_result' => '公式アカウントを作りで毎日投稿',
            'detail' => null,
            'parent_id' => 1,
            'class_number'=>2,
            'parent_master_id'=>1,
            'master_flag' => false,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('_o_k_r')->insert($param);

        $param=[
            'id' => 3,
            'person_id' => 1,
            'objective' => '口コミで拡散する',
            'key_result' => '宣伝',
            'detail' => '年齢層を絞った展開をしていく、主婦層をターゲットにするため、テレビ、雑誌等メディアも活用した戦略をとる',
            'parent_id' => 1,
            'class_number'=>2,
            'parent_master_id'=>1,
            'master_flag' => false,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('_o_k_r')->insert($param);
    }
}
