<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Movies extends Controller_Site {

	public function action_index()
	{
    // Set result of genTable to movie_table, for use in template.
    $this->template->movie_table = $this->genTable();
	}

  public function genTable() 
  {
    // Get movies from database via ORM
    $movies = ORM::factory('Movie')->find_all();
    // May be here i should attach rating to movies. But i don't know how set it automatic in model.

    // Bind movies to view
    $view = View::factory('movie_table')
      ->bind('movies', $movies)
      ->render();
    
    // Return rendered view
    return $view;

  }

}
