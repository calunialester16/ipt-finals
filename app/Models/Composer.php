<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Composer extends Model
{
    use HasFactory;

    protected $fillable = ['lname', 'fname'];

    public function musics() {
        return $this->hasMany('App\Models\Music', 'cid');
    }
}
