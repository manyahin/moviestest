<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Movies extends Controller_Site {

  private $first_movie;
  // i need this option for save first movie in the list.

	public function action_index()
	{
    // Set result of genTable to movie_table, for use in template.
    $this->template->movie_table = $this->genTable();

    $this->template->comments_block = $this->genComments($this->first_movie);

    $this->template->comment_form = View::factory('comment_form');
	}

  public function genTable() 
  {
    // Get movies from database via ORM
    $movies = ORM::factory('Movie')->order_by('year', 'DESC')->find_all();
    // May be here i should attach rating to movies. But i don't know how set it automatic in model.

    // Save id of first movie for select comments
    $this->first_movie = $movies[0]->id;

    // Bind movies to view
    $view = View::factory('movie_table')
      ->bind('movies', $movies);
    
    // Return rendered view
    return $view;

  }

  public function genComments($movie_id)
  {
    $movie = ORM::factory('Movie', $movie_id);
    $comments = $movie->comments->order_by('created', 'DESC')->find_all();

    $view = View::factory('comments_block')
      ->bind('movie', $movie)
      ->bind('comments', $comments);

    return $view;

  }

}
