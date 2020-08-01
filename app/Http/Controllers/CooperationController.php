<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actuality;

class CooperationController extends Controller
{
    public function index()
    {
      return view('awesomemagazine/cooperation', [
        'politiques' => Actuality::where('idcategorie', '4')->get()
       
    ]);
    }
}
