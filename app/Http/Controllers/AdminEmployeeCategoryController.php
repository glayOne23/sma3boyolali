<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployeeCategory;

class AdminEmployeeCategoryController extends Controller
{
    
    public function index()
    {
        $employee_categories = EmployeeCategory::all();
        return view('admin.employee_categories.index', compact('employee_categories'));
    }

    
    public function create()
    {
        return view('admin.employee_categories.create');
    }


    public function store(Request $request)
    {
        $errors = $request->validate([
            'name' => 'required|unique:employee_categories,name',
        ]);

        $employee_categories = EmployeeCategory::create([
            'name' => request('name'),
        ]);

        return redirect('admin/employee_categories');    
    }

    
    public function show(EmployeeCategory $employee_category)
    {
        abort(404);
    }


    public function edit(EmployeeCategory $employee_category)
    {
        return view('admin.employee_categories.edit', compact('employee_category') );
    }


    public function update(Request $request, EmployeeCategory $employee_category)
    {
        $errors = $request->validate([
            'name' => 'required',
        ]);

        $employee_category->update([
            'name' => request('name'),
        ]);
        
        return redirect('admin/employee_categories');    
    }

    public function destroy(EmployeeCategory $employee_category)
    {
        $employee_category->delete();

        return back();
    }
}
