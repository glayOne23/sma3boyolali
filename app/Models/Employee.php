<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['name', 'nip', 'photo', 'birthday', 'employee_category_id'];

    public function employee_category(){
        return $this->belongsTo('App\Models\EmployeeCategory', 'employee_category_id', 'id');    
    }
}
