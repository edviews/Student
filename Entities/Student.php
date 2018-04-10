<?php

namespace Modules\Student\Entities;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'title',
        'first_name',
        'last_name',
        'email',
        'gender',
        'date_of_birth',
        'id_number'
    ];

    public function profile()
    {
        return $this->hasOne('Modules\Student\Entities\Profile');
    }

    public function academic()
    {
        return $this->hasMany('Modules\Student\Entities\Academic');
    }
}
