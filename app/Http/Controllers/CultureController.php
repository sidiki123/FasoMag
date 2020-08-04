<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actuality;

class CultureController extends Controller
{
    public function index()
    {
      return view('awesomemagazine/culture', [
        'politiques' => Actuality::where('idcategorie', '5')->get()
       
    ]);
    }
}
