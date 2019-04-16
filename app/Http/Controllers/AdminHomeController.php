<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{

    public function index()
    {
        $homes = Home::all();

        return view('super_admin.homes.index', compact('homes'));
    }

    public function create()
    {
        return view('super_admin.homes.create');    
    }

    
    public function store(Request $request)
    {
        $this->validateCreate($request);

        $home = Home::create([
            'name' => request('name'),
        ]);
            
        return redirect('admin/homes');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit(Home $home)
    {
        return view('super_admin.homes.edit', compact('home') );    
    }

    
    public function update(Request $request, Home $home)
    {
        $this->validateUpdate($request);

        $home->update([
            'name' => request('name'),
        ]);
            
        return redirect('admin/homes');
    }

    
    public function destroy(Home $home)
    {
        $home->delete();
        
        return redirect('admin/homes');
    }

    //All Validation

    public function validateCreate(Request $request){
        $errors = $request->validate([
            'name' => 'required|min:2|unique:homes,name',
        ]);  
    }

    public function validateUpdate(Request $request){
        $errors = $request->validate([
            'name' => 'required|min:2',
        ]);  
    }
}
