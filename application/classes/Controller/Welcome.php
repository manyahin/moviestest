<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{

    $movies = ORM::factory('Movie')->find_all();
    foreach ($movies as $key => $movie) {
      var_dump($movie->title);
    }
    

		$this->response->body('hello, world!');
	}

} // End Welcome
