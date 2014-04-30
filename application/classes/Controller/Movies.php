<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Movies extends Controller_Site {

	public function action_index()
	{
    $movies_names = '';
    $movies = ORM::factory('Movie')->find_all();
    foreach ($movies as $key => $movie) {
      $movies_names[] = $movie->title;
    }
    
    $this->template->content = implode(', ', $movies_names);
	}

}
