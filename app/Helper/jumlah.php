<?php

use Illuminate\Http\Request;
use App\Datamahasiswa;

function jumlah()
{
    $count = Datamahasiswa::count();
    return 'Jumlah Mahasiswa yang Terdaftar :'.' '. $count;
}