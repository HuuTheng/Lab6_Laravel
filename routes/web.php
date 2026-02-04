<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return "Chào mừng đến với Laravel";
});

Route::get('/about', function () {
    return "Họ tên: Nguyễn Hữu Thành<br>Lớp: D18CNPM<2<br>MSSV: 23810310389";
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/tong/{a}/{b}', function ($a, $b) {
    $tong = $a + $b;
    return "Tổng của $a và $b là: $tong";
});

Route::get('/sinh-vien/{name}/{age?}', function ($name, $age = 20) {
    return "Tên sinh viên: $name <br> Tuổi: $age";
});

Route::get('/check-date/{day}/{month}/{year}', function ($day, $month, $year) {
    return "Ngày hợp lệ: $day/$month/$year";
})->where([
            'day' => '([1-9]|[12][0-9]|3[01])',
            'month' => '([1-9]|1[0-2])',
            'year' => '[0-9]{4}'
        ]);