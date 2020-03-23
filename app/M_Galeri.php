<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class M_Galeri extends Model
{
    public $table = "galeri";
    protected $primaryKey = 'id';
    protected $fillable = ['user_id', 'judul', 'gambar', 'status', 'slug', 'tgl_buat', 'tgl_ubah'];
    public $timestamps=false;
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
