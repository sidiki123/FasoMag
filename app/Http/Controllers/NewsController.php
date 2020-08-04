<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MessageFromNewsForm;
use Illuminate\Support\Facades\Mail;
use Newsletter;


class NewsController extends Controller
{

    public function index()
    {
        return view('awesomemagazine/sin-up');
    }
            
            public function store(Request $request)
            {
                // if(! Newsletter::isSubscribed($request->email)){
                //     Newsletter::subscribePending($request->email);
                //     return redirect('/sin-up')->with('status', 'thanks!');
                // }
                // return redirect('/')->with('failure', 'Deja souscris');

                Newsletter::subscribeOrUpdate($request->input('email'), ['firstName'=>'toto'], 'letters');
                return redirect('/sin-up');
            }

        // public function store(Request $request)
        //     {
        //         Mail::to('sidikiouedraogo2000@gmail.com')->queue(new MessageFromNewsForm($content));
        //         return 'Email send';
        //     }
}
