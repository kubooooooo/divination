<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use App\Http\Requests\PersonRequest;

class PersonController extends Controller
{
    public function index()
    {
        return view('person.index');
    }

    public function show(PersonRequest $request)
    {
        $persons = Person::all();
        $persons_count = $persons->count();
        $date = $request->year * 1000 + $request->month * 100 + $request->day;
        $person_id = $date % $persons_count + 1;
        $person = Person::find($person_id);

        $name = $request->name;

        return view('person.show')
            ->with(['person' => $person, 'name' => $name]);
    }

    public function retake()
    {
        $persons = Person::all();
        $persons_count = $persons->count();
        $person_id = rand(1,$persons_count);
        $person = Person::find($person_id);


        return view('person.retake')
            ->with(['person' => $person]);
    }

    public function select()
    {
        $persons = Person::all();

        return view('person.select')
            ->with(['persons' => $persons]);
    }

    public function selected(Request $request)
    {
        $personId = $request->id;
        $person = Person::find($personId);

        return view('person.retake')
            ->with(['person' => $person]);
    }
}
