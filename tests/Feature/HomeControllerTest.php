<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\EloquentModel\OKR;
use App\EloquentModel\User;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;


class HomeControllerTest extends TestCase
{
    // use DatabaseMigrations;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    // public function testExample()
    // {
    //     $response = $this->get('/');
    //     $response->assertStatus(302);

    //     factory(OKR::class)->create([
    //         'name'=>'AAA',
    //         'objective'=>'てすとOBJECTIVE',
    //         'password'=>'テストKEYRESULT',
    //         'detail' => 'テストdetailテストdetailテストdetailテストdetail',
    //         'class_number' =>1,
    //         'master_flag' =>1,
    //     ]);
    //     factory(OKR::class,10)->create();

    //     $this->assrtDatabaseHas('_o_k_r',[
    //         'name'=>'AAA',
    //         'objective'=>'てすとOBJECTIVE',
    //         'password'=>'テストKEYRESULT',
    //         'detail' => 'テストdetailテストdetailテストdetailテストdetail',
    //         'class_number' =>1,
    //         'master_flag' =>1,
    //     ]);
    
    // }

    public function testBasicTest()
    {
        $response = $this->get('/');
 
        $response->assertStatus(302);
    }

}
