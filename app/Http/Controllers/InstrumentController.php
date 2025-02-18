<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Instrument;
use Illuminate\Http\Request;

class InstrumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $instruments = Instrument::all();
      return view('instrument.index', compact('instruments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('instrument.create');
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
    public function show(Instrument $instrument)
    {
        return view('instrument.show', compact('instrument'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Instrument $instrument)
    {
        return view('instrument.edit', compact('instrument'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Instrument $instrument)
    {
        //
    }

    public function showByUser(User $user){
            return view('instrument.byUser', compact('user'));
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Instrument $instrument)
    {
        foreach($instrument->categories as $category){
            $category->instruments()->detach($instrument->id);
        }

       $instrument->delete();
       return redirect(route('instrument.index'))->with('message', 'Instrument deleted');
    }
}
