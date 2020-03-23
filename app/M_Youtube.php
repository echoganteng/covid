<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class M_Youtube extends Model
{
    public $table = "youtube";
    protected $primaryKey = 'id';
    protected $fillable = ['user_id', 'judul', 'link', 'thumbnail', 'status', 'created_at', 'updated_at'];
    public $timestamps = true;
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
