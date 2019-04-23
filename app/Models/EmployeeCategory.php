<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeeCategory extends Model
{
    protected $fillable = ['name'];

    public function employees(){
        return $this->HasMany('App\Models\Employee', 'employee_category_id', 'id'); 
    }
}
