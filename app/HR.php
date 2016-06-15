<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HR extends Model
{
    protected $table = 'hr';
	protected $fillable = ['id', 'employee_name', 'employee_name','address','gender','project_name','birthplace','phone','id_number','begin_date','birthdate','job_name'];
}
