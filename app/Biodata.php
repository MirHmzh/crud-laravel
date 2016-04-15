<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    protected $table = 'biodata';
    protected $fillable = array('nama','usia','jenis_kelamin','telepon','email');
}
