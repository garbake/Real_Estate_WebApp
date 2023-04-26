<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Imports\UsersImport;
use App\Models\Property;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $users = User::orderBy('Name', 'asc')->get();
        $totalProperties = Property::count();
        $totalAgents = User::where('role_id', 1)->count();
        $totalCustomers = User::where('role_id', 3)->count();
        $totalUsers = $users->count();

        
        

        return view('User.index', [
            'users' => $users,
            'totalProperties' => $totalProperties,
            'totalAgents' => $totalAgents,
            'totalCustomers' => $totalCustomers,
            'totalUsers' => $totalUsers,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $role = DB::table('user_role')->pluck('RoleName', 'id');
        $user = User::where('id',$id)->first();

        return view('user.edit',[
            'role' => $role,
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['nullable', 'confirmed', Rules\Password::defaults()],
        ]);
        
        // Retrieve the user you want to edit
        $user = User::findOrFail($id);
        
        // Update the user's name and email
        $user->fill([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'role_id' => $request->input('role_id')
        ]);
        
        // Check if a new password was provided
        if ($request->filled('password')) {
            // If a new password was provided, update the user's password
            $user->password = Hash::make($request->input('password'));
        }
        
        // Save the changes
        $user->save();

        return redirect(route('dashboard.user'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        User::destroy($id);
        return redirect()->route('dashboard.user')->with('User deleted Successfully');
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function export() 
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
       
    /**
    * @return \Illuminate\Support\Collection
    */
    public function import() 
    {
        Excel::import(new UsersImport,request()->file('file'));
        return back();
    }
}
