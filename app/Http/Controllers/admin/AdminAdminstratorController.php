<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminAdminstratorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::role('admin')->get();
        return view('admin.pages.administrator.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.administrator.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required',
            'name' => 'required',
            'password' => 'required',
            'email' => 'required|email|unique:users,email',
            'number' => 'required|numeric',
        ]);
        $requestdata = $request->all();
        $image = $request->file('image');
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->file('image')->move(public_path('assets/Adminstrator'), $imagename);
        $imagepath = 'assets/Adminstrator/' . $imagename;
        $requestdata['image'] = $imagepath;
        $user = User::create($requestdata);
        $user->assignRole('admin');
        return redirect()->route('adminstrator.index')->with('success', 'Administrator created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::destroy($id);
        return redirect()->back()->with('destroy', 'Administrator delete successfully.');
    }
}
