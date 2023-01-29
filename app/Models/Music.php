<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    use HasFactory;

    protected $table = 'musics';
    protected $fillable = ['cid', 'name', 'release', 'album', 'genre'];

    public function composer() {
        return $this->belongsTo('App\Models\Composer', 'cid');
    }
}
