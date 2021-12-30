<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sign;
use App\Http\Requests\PersonRequest;

class BestController extends Controller
{
    public function index()
    {
        return view('best.index');
    }

    public function sign()
    {
        $signs = Sign::all();
        return view('best.sign.index')
            ->with(['signs' => $signs]);
    }

    public function signshow($id)
    {
        $sign = Sign::find($id);
        return view('best.sign.show')
            ->with(['sign' => $sign]);
    }

    public function person()
    {
        return view('best.person.index');
    }

    public function personshow(PersonRequest $request)
    {
        $name = $request->name;
        return view('best.person.show')
            ->with(['name' => $name]);
    }

    public function tarot()
    {
        return view('best.tarot.index');
    }

    public function tarotshow()
    {
        return view('best.tarot.show');
    }
}
