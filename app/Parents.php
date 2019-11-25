<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    protected $primaryKey = 'id_parents'; 

	public $timestamps = false;
    protected $table = 'parents';
    protected $fillable = ['name_parents', 'email'];

    public function stu()
    {
    	return $this->belongsTo(Students::class, 'id_students');
    }

}
