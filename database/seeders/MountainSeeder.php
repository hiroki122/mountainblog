<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MountainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('mountains')->insert([
                [
                    'name' => '富士山',
                    'height' => 3776,
                    'danger'=>1,
                ],
                [
                    'name' => '霧島山',
                    'height' => 1700,
                    'danger' => 2,
                ],
                [
                    'name' => '開聞岳',
                    'height' => 924,
                    'danger' => 1,
                ],
                [
                    'name' => '筑波山',
                    'height' => 877,
                    'danger' => 1,
                ],
                [
                    'name' => '伊吹山',
                    'height' => 1377,
                    'danger' => 1,
                ],
                [
                    'name' => '祖母山',
                    'height' => 1756,
                    'danger' => 2,
                ],
                [
                    'name' => '丹沢山',
                    'height' => 1567,
                    'danger' => 2,
                ],
                [
                    'name' => '天城山',
                    'height' => 1406,
                    'danger' => 2,
                ],
                [
                    'name' => '宮之浦岳',
                    'height' => 1936,
                    'danger' => 2,
                ],
                [
                    'name' => '剣山',
                    'height' => 1955,
                    'danger' => 1,
                ],
                [
                    'name' => '両神山',
                    'height' => 1723,
                    'danger' => 3,
                ],
                [
                    'name' => '雲取山',
                    'height' => 2017,
                    'danger' => 2,
                ],
                [
                    'name' => '大菩薩嶺',
                    'height' => 2057,
                    'danger' => 1,
                ],
                [
                    'name' => '大台ヶ原',
                    'height' => 1695,
                    'danger' => 1,
                ],
                [
                    'name' => '大峰山',
                    'height' => 1915,
                    'danger' => 1,
                ],
                [
                    'name' => '阿蘇山',
                    'height' => 1592,
                    'danger' => 1,
                ],
                [
                    'name' => '大山',
                    'height' => 1729,
                    'danger' => 1,
                ],
                [
                    'name' => '石鎚山',
                    'height' => 1982,
                    'danger' => 3,
                ],
                [
                    'name' => '安達太良山',
                    'height' => 1700,
                    'danger' => 2,
                ],
                [
                    'name' => '霧ヶ峰',
                    'height' => 1925,
                    'danger' => 1,
                ],
                [
                    'name' => '美ヶ原',
                    'height' => 2034,
                    'danger' => 1,
                ],
                [
                    'name' => '恵那山',
                    'height' => 2191,
                    'danger' => 2,
                ],
                [
                    'name' => '赤城山',
                    'height' => 1828,
                    'danger' => 1,
                ],
                [
                    'name' => '九重山',
                    'height' => 1787,
                    'danger' => 2,
                ],
                [
                    'name' => '甲武信ヶ岳',
                    'height' => 2475,
                    'danger' => 3,
                ],
                [
                    'name' => '瑞牆山',
                    'height' => 2230,
                    'danger' => 2,
                ],
                [
                    'name' => '金峰山',
                    'height' => 2599,
                    'danger' => 1,
                ],
                
         ]);
    }
}
