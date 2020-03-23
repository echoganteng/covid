<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Files extends Model
{
    public $table = "documents";
    protected $primaryKey = 'id';
    protected $fillable = ['user_id', 'judul', 'files', 'status', 'slug', 'tgl_buat', 'tgl_ubah'];
    public $timestamps=false;
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
