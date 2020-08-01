<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actuality;

class EconomieController extends Controller
{
    public function index()
    {
      return view('awesomemagazine/economie', [
        'politiques' => Actuality::where('idcategorie', '2')->get()
       
    ]);
    }
}
