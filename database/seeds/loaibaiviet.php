<?php
/**
 * Created by PhpStorm.
 * User: Son Minh
 * Date: 1/6/2018
 * Time: 10:22 AM
 */
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Faker\Factory as Faker;

class loaibaiviet extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();
        foreach (range(1,20) as $index) {
            DB::table('loaibaiviet')->insert([
                'vTenLoaiBaiViet' => ucfirst ($faker->word),
                'iCapCha' => '0',
                'vLienKet' => $faker->word,
                'vNguoiTao' => 'sonminh18',
                'iDelete' => '0',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]);
        }
    }
}