<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;
use Gate;

class AdminHomeController extends Controller
{
    
    public function index()
    {
        if(!Gate::allows('isSuperAdmin')){
            abort(404);
        }

        $homes = Home::all();

        return view('super_admin.homes.index', compact('homes'));
    }

    public function create()
    {
        if(!Gate::allows('isSuperAdmin')){
            abort(404);
        }
        return view('super_admin.homes.create');    
    }

    
    public function store(Request $request)
    {
        if(!Gate::allows('isSuperAdmin')){
            abort(404);
        }
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
        if(!Gate::allows('isSuperAdmin')){
            abort(404);
        }
        return view('super_admin.homes.edit', compact('home') );    
    }

    
    public function update(Request $request, Home $home)
    {
        if(!Gate::allows('isSuperAdmin')){
            abort(404);
        }
        $this->validateUpdate($request);

        $home->update([
            'name' => request('name'),
        ]);
            
        return redirect('admin/homes');
    }

    
    public function destroy(Home $home)
    {
        if(!Gate::allows('isSuperAdmin')){
            abort(404);
        }
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
