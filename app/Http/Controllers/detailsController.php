<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actuality;

class detailsController extends Controller
{
    public function index()
    {
      return view('awesomemagazine/post_details');
    }

    public function store()
    {
      
     
    }

    public function edit($id)
    {
      
      $actuality = Actuality::find($id);
     
      return view('awesomemagazine/post_details', compact('actuality'));
    }
}
