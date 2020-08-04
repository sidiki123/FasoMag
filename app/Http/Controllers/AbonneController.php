<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Abonne;
use Illuminate\Notifications\Notification;
use Newsletter;

class AbonneController extends Controller
{

    public function index()
    {
      return view('awesomemagazine/sin-up');
    }

    public function store(Request $request)
    {

    Newsletter::subscribeOrUpdate($request->input['email'],[] ,'newsletter' );
    return redirect('/');
    
    }
}
