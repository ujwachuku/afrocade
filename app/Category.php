<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;

class Category extends Model
{
    use Resizable;

    public function posts()
    {
    	return $this->hasMany(Post::class);
    }
}
