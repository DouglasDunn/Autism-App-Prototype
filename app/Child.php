<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    public function path()
    {
        return '/children/' . $this->id;
    }
}
