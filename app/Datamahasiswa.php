<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datamahasiswa extends Model
{
    protected $table='mahasiswa';
    protected $primaryKey = "nim";
    protected $guarded=[];
}
