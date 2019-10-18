<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Models\EmployeeCategory;

class AdminEmployeeController extends Controller
{
    
    public function index()
    {
        $employees = Employee::all();
        return view('admin.employees.index', compact('employees') );
    }

    
    public function create()
    {
        $employee_categories = EmployeeCategory::all();
        return view('admin.employees.create', compact('employee_categories') );
    }

    
    public function store(Request $request)
    {
        $errors = $request->validate([
            'name' => 'required',
            'nip' => 'required',
            'birthday' => 'required',
            'file' => 'required | mimes:jpeg,jpg,png,svg | max:4096',
        ]);

        //change name and save image in public/images/
        $image = $request->file('file');
        $ldate = date('Y-m-d_H_i_s');
        $imageName = $ldate.'_'.$image->getClientOriginalName();
        $image->move(public_path('images'),$imageName);
     
        $employee = Employee::create([
            'name' => request('name'),
            'nip' => request('nip'),
            'birthday' => request('birthday'),
            'employee_category_id' => request('employee_category'),
            'photo' => $imageName,
        ]);

        return redirect('admin/employees');    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd('show');
    }

    
    public function edit(Employee $employee)
    {
        $employee_categories = EmployeeCategory::all();
        return view('admin.employees.edit', compact('employee', 'employee_categories') );
    }


    public function update(Request $request, Employee $employee)
    {
        $errors = $request->validate([
            'file' => 'mimes:jpeg,jpg,png,svg | max:4096',
        ]);
        // upload image if updated
        if ($request->file('file') != null) {
            //change name and upload new image
            $image = $request->file('file');
            $ldate = date('Y-m-d_H_i_s');
            $imageName = $ldate.'_'.$image->getClientOriginalName();
            $image->move(public_path('images'),$imageName);

            //delete old image
            $image_path = "images/".$employee->photo; 
            if (file_exists($image_path)) {
                @unlink($image_path);
            }

            // update image name in database
            $employee->update([
                'photo' => $imageName,
            ]);
        }

        $employee->update([
            'name' => request('name'),
            'nip' => request('nip'),
            'birthday' => request('birthday'),
            'employee_category_id' => request('employee_category'),
        ]);

        return redirect('admin/employees');
    }

    public function destroy(Request $request)
    {
        // dd($request->input('table_records'));    
        foreach ($request->input('table_records') as $value) {
            $this->deleteImage($value);        

            Employee::findOrFail($value)->delete();
        }
        return back();
    }

    
    //helper
    public function deleteImage($id){
        $getImage = Employee::findOrFail($id);
        $imageName = $getImage->photo;
        $image_path = "images/".$imageName; 
        if (file_exists($image_path)) {
            @unlink($image_path);
        }
    }
}
