<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarot;

class TarotController extends Controller
{
    public function index()
    {
        return view('tarot.index');
    }

    public function show()
    {
        $randId = rand(1,21);
        $tarot = Tarot::find($randId);

        return view('tarot.show')
            ->with(['tarot' => $tarot]);
    }
}
