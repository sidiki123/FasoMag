<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actuality;

class ActualitiesController extends Controller
{
    public function index()
    {
      return view('awesomemagazine/index', [
        'actualities' => Actuality::all()
    ]);
    }

    // {
    //     $actualities = Actuality::all();
    //     return view('awesomemagazine/index',compact('actualities'));
    // }
}
