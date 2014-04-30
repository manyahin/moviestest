<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Comments extends Controller_Site {

  public function action_get() 
  {
    $movie_id = $this->request->param('id');
    if(empty($movie_id)) return false;

    $movie = ORM::factory('Movie', $movie_id);
    if(!$movie->loaded()) return false;

    $comments = $movie->comments->order_by('created', 'DESC')->find_all();

    $view = View::factory('comments_block')
      ->bind('movie', $movie)
      ->bind('comments', $comments);

    $this->auto_render = false;
    $this->response->body( $view->render() );

  }

}
