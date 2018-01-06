<?php
/**
 * Created by PhpStorm.
 * User: Son Minh
 * Date: 1/6/2018
 * Time: 10:22 AM
 */
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Uploadimage\Entities\thuvienanh;

use Faker\Factory as Faker;
use App\helper;

class baiviet extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Image=new thuvienanh();
        $helper=new helper();
        $faker = Faker::create();
        foreach (range(1,200) as $index) {
            $image=$Image->GetImage($faker->numberBetween(1,7));
            $tieude=$faker->sentence(8);
            DB::table('baiviet')->insert([
                'iLoaiBaiViet' => $faker->numberBetween(1,20),
                'vHinhAnh' => $image['vUrl'],
                'vTieuDe' => $tieude,
                'vLienKet' => $helper->create_link($tieude),
                'vNoiDungChiTiet' => $faker->paragraph(200),
                'vMoTa' => $faker->paragraph(5),
                'iLuotXem' => $faker->randomNumber(),
                'vTags' => $faker->word,
                'vKeyword' => $faker->word,
                'vDescription' => '0',
                'iTrangThai' => '1',
                'iLoaiBai' => '1',
                'vNguoiTao' => 'sonminh18',
                'vNguoiCapNhat' => 'sonminh18',
                'iDelete' => '0',
                'iBinhLuan' => $faker->randomNumber(),
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]);
        }
    }
}