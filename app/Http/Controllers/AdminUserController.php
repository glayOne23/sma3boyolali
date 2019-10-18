<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminUserController extends Controller
{
    
    public function index()
    {
        if (auth()->user()->role !== 2 ) {
            abort('403');
        }

        $users = User::where('role',1)->get();
        return view('admin.users.index',compact('users') );
    }

    
    public function create()
    {
        if (auth()->user()->role !== 2 ) {
            abort('403');
        }

        return view('admin.users.create');
    }

    
    public function store(Request $request)
    {
        if (auth()->user()->role !== 2 ) {
            abort('403');
        }

        $errors = $request->validate([
            'name' => 'required|unique:users,name',
            'file' => 'required|mimes:jpeg,jpg,png,svg | max:4096',
            'password' =>'required',
        ]);

        // upload image if updated
        if ($request->file('file') != null) {
            //change name and save image in public/images/
            $image = $request->file('file');
            $ldate = date('Y-m-d_H_i_s');
            $imageName = $ldate.'_'.$image->getClientOriginalName();
            $image->move(public_path('images'),$imageName);
            
        }

        $album = User::create([
            'name' => request('name'),
            'password' => Hash::make(request('password')),
            'role' => 1,
            'photo' => $imageName,
        ]);    
        
        return redirect('admin/users');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit(User $user)
    {
        if ($user->id !== auth()->id() && auth()->user()->role !== 2 ) {
            abort('403');
        }

        return view('admin.users.edit', compact('user') );
    }

   
    public function update(Request $request, User $user)
    {
        if ($user->id !== auth()->id() && auth()->user()->role !== 2 ) {
            abort('403');
        }

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
            $image_path = "images/".$user->photo; 
            if (file_exists($image_path)) {
                @unlink($image_path);
            }

            // update image name in database
            $user->update([
                'photo' => $imageName,
            ]);
        }

        if (request('password') != null) {
            $user->update([
                'name' => request('name'),
                'password' => Hash::make(request('password')),
            ]);
        }else {
            $user->update([
                'name' => request('name'),
            ]);
        }
        

        return redirect('admin/users');
    }

    
    public function destroy(User $user)
    {
        if ($user->id !== auth()->id() && auth()->user()->role !== 2 ) {
            abort('403');
        }
        // delete photo image
        $image_path = "images/".$user->photo; 
        if (file_exists($image_path)) {
            @unlink($image_path);
        }

        $user->delete();
        
        return redirect('admin/users');
    }
}
