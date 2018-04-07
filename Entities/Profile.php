<?php

namespace Modules\Student\Entities;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [];

    public function student()
    {
        return $this->belongsTo('Modules\Student\Entities\Student');
    }
}
