<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Number;
use App\Models\NumberAgent;
use App\Models\User;
use Illuminate\Http\Request;

class AdminAgentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('admin.pages.agent.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $number = Number::get();
        $assignednumber = NumberAgent::pluck('number_id')->all();
        $data = $number->whereNotIn('id', $assignednumber);

        return view('admin.pages.agent.add')->with(compact('data'));
    }

    public function activeagent()
    {
        return view('admin.pages.agent.active');
    }

    public function inactiveagent()
    {
        return view('admin.pages.agent.inactive');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $record = new User();
        $record->email = $request['email'];
        $record->name = $request['name'];
        $record->save();
        $record->assignRole('agent');

        if (isset($request['number_id'])) {
            foreach ($request['number_id'] as $value) {
                NumberAgent::create(['number_id' => $value, 'agent_id' => $record->id]);
            }
        }

        return back()->with('success', 'Data stored successfully');
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
        //
    }
}