<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Site extends Controller_Template {

  public function before()
  {
    // Run Kohana_Controller_Template::before() for set default template 'template';
    parent::before();
  }

}