<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table='posts';
    protected $fillable = ['title','content','slug','image','user_id'];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
        // return $this->belongsTo('App\User');
    }
}
