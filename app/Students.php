<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $primaryKey = 'id_students'; 

	public $timestamps = false;
    protected $table = 'students';
    protected $fillable = ['name_students', 'email'];

}
