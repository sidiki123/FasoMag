<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actuality;

class PolitiqueController extends Controller
{
    public function index()
    {
      return view('awesomemagazine/category', [
        'politiques' => Actuality::where('idcategorie', '1')->get()
       
    ]);
    }
}
