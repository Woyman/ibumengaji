<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Berita extends Model
{
    protected $table      = 'berita';
    protected $primaryKey = 'id_berita';
    public    $timestamps = false;
}
