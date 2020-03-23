<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class M_Opini extends Model
{
	public $table = "opini";
    protected $primaryKey = 'id';
    protected $fillable = ['user_id', 'isi_opini', 'judul', 'gambar', 'status', 'slug', 'tgl_buat', 'tgl_ubah'];
    public $timestamps = true;
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
