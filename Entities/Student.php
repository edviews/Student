<?php

namespace Modules\Student\Entities;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [];

    public function profile()
    {
        return $this->hasOne('Modules\Student\Entities\Profile');
    }
}
