<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Number;
use Illuminate\Http\Request;

class AdminNumberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Number::all();
        return view('admin.pages.numbers.index')->with(compact('data'));
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
        if ($request->has('number')) {
            $number = $request->input('number');
            $record = new Number();
            $record->number = $number;
            $record->save();
            return back()->with('success', 'Data stored successfully');
        }
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
        $data = Number::find($id);
        return view('admin.pages.numbers.edit')->with(compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $number = $request->input('number');

        $record = Number::find($id);
        $record->number = $number;
        $record->update();

        return redirect()->route('number.index')->with('success', 'Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Number::destroy($id);
        return redirect()->route('number.index')->with('success', 'Data deleted successfully');
    }

    public function status($status, $id)
    {

        if ($status == '1') {
            Number::where('status', $status)->where('id', $id)->update(['status' => 0]);
        } elseif ($status == '0') {
            Number::where('status', $status)->where('id', $id)->update(['status' => 1]);
        }
        return redirect()->route('number.index');
    }
}