<?php

class Movie{

  public $title;
  public $duration;
  public $poster;
  public $genres;

  /**
   * @var String $title 
   * @var String $duration
   * @var String $poster
   * @var Array $genres
   */
  public function __construct($_title, $_duration, $_poster, $_genres )
  {
    $this->title = $_title;
    $this->duration = $_duration;
    $this->poster = $_poster;
    $this->genres = $_genres;
  }

  public function get_movie_details(){
    return "Film: $this->title, Durata: $this->duration minuti";
  }

}