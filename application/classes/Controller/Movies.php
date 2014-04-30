<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Movies extends Controller_Site {

	public function action_index()
	{
    
    $this->template->movie_table = $this->genTable();
    // $this->template->content = implode(', ', $movies_names);
	}

  public function genTable() {

    $movies = ORM::factory('Movie')->find_all();

    $view = View::factory('movie_table')
      ->bind('movies', $movies);
    
    return $view;

  }

}
