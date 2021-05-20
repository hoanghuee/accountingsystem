<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\PhieuMuaHang;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;

$factory->define(PhieuMuaHang::class, function (Faker $faker) {
    $array = ['Mua hàng trong nước nhập kho', 'Mua hàng trong nước không qua kho'];
    return [
        //
        'phan_loai' => Arr::random($array),
        'so_luong' => $faker->numberBetween($min = 1, $max = 50),
        'thanh_tien' => $faker->randomFloat($nbMaxDicimals = NULL, $min = 1, $max = 1263),
        'ngay_mua' => $faker->dateTime($max = 'now', $timezone = null),
        'nhanvien_id' => $faker->randomDigitNot(0),
        // 'hoadon_id' => App\Models\HoaDon::all()->random()->id,
    ];
});
