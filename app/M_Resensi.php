<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class M_Resensi extends Model
{
	public $table = "resensi";
    protected $primaryKey = 'id';
    protected $fillable = ['user_id', 'isi_resensi', 'judul', 'gambar', 'status', 'slug', 'tgl_buat', 'tgl_ubah'];
    public $timestamps = true;
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
