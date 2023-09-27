<?php

class task {
  // properties
  public $color;
  
  public function __construct($color) {
    $this->color = $color;
  }
  public function doodoo($do) {
    echo "I farded" . $do . $this->color;
  }


}