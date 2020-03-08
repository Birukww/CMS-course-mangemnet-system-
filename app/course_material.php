<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course_material extends Model
{
    protected $fillable = ['name','description','course_id','filename'];
}
