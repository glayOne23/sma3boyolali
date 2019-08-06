<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Models\Extracurricular;

class TeacherController extends Controller
{
    public function show(){
        $extracurriculars = Extracurricular::all();
        $employees = Employee::all();

        return view('progressive.showemployees',compact('extracurriculars', 'employees') );
    }
}
