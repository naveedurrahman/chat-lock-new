<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use App\Models\Number;
use App\Models\NumberAgent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AdminAgentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::role('agent')->where('name', '!=', 'agent')->get();
        return view('admin.pages.agent.index')->with(compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $number = Number::where('status', '1')->get();
        $assignednumber = NumberAgent::pluck('number_id')->all();
        $data = $number->whereNotIn('id', $assignednumber);

        return view('admin.pages.agent.add')->with(compact('data'));
    }

    public function activeagent()
    {
        $active = User::role('agent')->where('status', '1')->where('name', '!=', 'agent')->get();
        return view('admin.pages.agent.active')->with(compact('active'));
    }

    public function inactiveagent()
    {
        $unactive = User::role('agent')->where('status', '0')->where('name', '!=', 'agent')->get();

        return view('admin.pages.agent.inactive')->with(compact('unactive'));
        ;
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'email' => 'required|email',
            'name' => 'required',
            'image' => 'required',
            'password' => 'required',
            // Validate the uploaded image
            'number_id' => 'required',
        ], [
                'number_id.required' => 'The Assign Number field is required.',

            ]);

        $record = new User();
        $record->email = $validatedData['email'];
        $record->name = $validatedData['name'];
        $record->password = Hash::make($validatedData['password']);


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('images'), $imageName);
            $record->image = asset('images/' . $imageName);
        }

        $record->save();

        $record->assignRole('agent');

        if (isset($request['number_id'])) {
            foreach ($validatedData['number_id'] as $value) {
                NumberAgent::create(['number_id' => $value, 'agent_id' => $record->id]);
            }
        }


        return redirect()->route('agent.index')->with('message', 'Data stored successfully');
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
        $data = User::find($id);
        return view('admin.pages.agent.edit')->with(compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'name' => 'required',
            'image' => 'required', // Validate the uploaded image
        ]);

        $record = User::find($id);
        $record->email = $validatedData['email'];
        $record->name = $validatedData['name'];

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('images'), $imageName);
            $record->image = asset('images/' . $imageName);
        }

        $record->update();

        return redirect()->route('agent.index')->with('message', 'Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::destroy($id);
        return redirect()->route('agent.index')->with('danger', 'Data deleted successfully');
    }

    public function status($status, $id)
    {


        if ($status == '1') {
            User::where('status', $status)->where('id', $id)->update(['status' => 0]);
        } elseif ($status == '0') {
            User::where('status', $status)->where('id', $id)->update(['status' => 1]);
        }
        return back();
    }
}