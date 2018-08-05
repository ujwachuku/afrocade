<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;

class Post extends Model
{
    use Resizable;
    
    protected $table = 'posts';

    public function user()
    {
    	return $this->belongsTo(User::class, 'author_id');
    }
}
