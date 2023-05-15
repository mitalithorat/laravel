<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\PersonPostRequest;


class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $people = Person::all();
        return view('people.index', compact('people'));
    }

    public function create()
    {
        return view('people.create');
    }

    public function store(PersonPostRequest $request)
    {


        Person::create($request->all());

        return redirect()->route('people.index')
                         ->with('success','Person created successfully.');
    }

    public function show(Person $person)
    {
        return view('people.show',compact('person'));
    }

    public function edit(Person $person)
    {
        return view('people.edit',compact('person'));
    }

    public function update(Request $request, Person $person)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'nationality' => 'required',
            'occupation' => 'required'
        ]);

        $person->update($request->all());

        return redirect()->route('people.index')
                         ->with('success','Person updated successfully');
    }

    public function destroy(Person $person)
    {
        $person->delete();

        return redirect()->route('people.index')
                         ->with('success','Person deleted successfully');
    }
}
