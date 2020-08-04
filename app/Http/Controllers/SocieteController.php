<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actuality;

class SocieteController extends Controller
{
    public function index()
    {
      return view('awesomemagazine/societe', [
        'politiques' => Actuality::where('idcategorie', '3')->get()
       
    ]);
    }
}
