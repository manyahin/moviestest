<?php defined('SYSPATH') or die('No direct script access.');

class Model_Movie extends ORM {
  
  protected $_table_name = 'movies';

  protected $_has_many = array(
    'reviews' => array('model' => 'Review', 'foreign_key' => 'movie_id'),
    'comments' => array('model' => 'Comment', 'foreign_key' => 'movie_id')
  );

  // public $rating;

  public function getRating()
  {
    $reviews = $this->reviews->find_all();

    $sum = 0;

    foreach ($reviews as $key => $review) 
    {
      $sum += $review->rating;
    }
    
    $rating = $sum / count($reviews);

    // $this->rating = round($rating, 2);

    return round($rating, 2);
  }

}