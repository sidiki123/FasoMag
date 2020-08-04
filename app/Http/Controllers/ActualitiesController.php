<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actuality;
use App\Api;
use Illuminate\Support\Facades\Cache;


class ActualitiesController extends Controller
{
    public function index()
    {
      return view('awesomemagazine/index', [
        'actualities' => Actuality::all()
    ]);
    }

    public function edit($id)
    {
      
      $actuality = Actuality::find($id);
     
      return view('awesomemagazine/post_details', compact('actuality'));
    }
  
        public function newsapi(Request $request)
        {
            if (($_SERVER["REQUEST_METHOD"] == "POST")){
            //Here is an example of the what will be received by POST 'al-jazeera-english : Al Jazeera English',
            //we need to split it up using a php function called exlpode(), explode() creates an array 'al-jazeera-english' is the source while 'Al Jazeera English' is the source name
            $source                   = $_POST['source'];
            $split_input              = explode(':', $source);
            $source                   = trim($split_input[0]); //trim() removes white spaces
    
            $data['source_name']      = $split_input[1];
    
            }
    
            if (empty($source)) {
                //Let us make `CNN` our default news source 
                $source                 = 'cnn';
                $data['source_name']    = 'CNN';
                $data['source_id']      = $source;
            }
    
          $api = new Api;
    
          $data['news']         = $api->getNews($source); // Passed  source id to our api model, to fetch news by the selected source
          $data['news_sources'] = $this->allSources(); //retrieve all news sources
    
          return view('awesomemagazine/index',[
            'actualities' => Actuality::all()
        ],  $data);
        }
    
        public function allSources()
        {
          $api           = new Api;
          $allSources = $api->getAllSources(); //retrieve all news sources
    
          return $allSources;
        }
    
    }
   
