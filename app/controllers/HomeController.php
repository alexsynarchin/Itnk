<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{

                $documents = Auth::user() -> documents;
                $i=0;
                $num =$documents->count();
                if($num == 0){
                $ids=0;
            }
                else{
                    foreach($documents as $document){
                        $ids[$i]=$document->id;
                    }
                }
                $items=Item::where('document_id', $ids)->get();
                return View::make('home',array('documents'=>$documents, 'items'=>$items));
				//return View::make('timeout');
            }
}
