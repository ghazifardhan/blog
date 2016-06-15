<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SC extends Model
{
    protected $table = 'sc';
	protected $fillable = ['id', 'employee_name', 'employee_name','address','gender','project_name','birthplace','phone','id_number','begin_date','birthdate','job_name'];
}
