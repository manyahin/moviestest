<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Comments extends Controller_Site {

  public function action_get($movie_id_attr = null) 
  {
    // This method can use different source
    // First: from tpl for get comments
    // Second: from this class for make response after add comment.
    // I can send one more query from tpl for retrive new comments, but it's plus one query. 
    $movie_id = $movie_id_attr ? $movie_id_attr : $this->request->param('id');
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

  public function action_set() 
  {
    if (HTTP_Request::POST == $this->request->method()) 
    {   
      $post = $this->request->post();
      
      $movie_id = intval($post['movie_id']);
      $text = $post['text'];

      $movie = ORM::factory('Movie', $movie_id);
      if(!$movie->loaded()) return false;

      $comment = ORM::factory('Comment');

      $comment->movie_id = $movie->id;
      $comment->author = 'Unknown'; // I don't have input for author
      $comment->text = $text; 
      $comment->created = DB::expr('NOW()'); // I don't have input for author
      $comment->save();

      $this->auto_render = false;
      $this->response->body( $this->action_get($movie->id) );
    }

  }

}
