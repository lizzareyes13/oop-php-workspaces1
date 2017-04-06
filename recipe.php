<?php
  class recipe {
  }

  $recipe1 = new Recipe();

  var_dump($recipe1);

  // create a class called Fish

  class Fish
  {

  }
//   Create an object named "bluegill" that is an instance of our Fish class.
// Note: don't forget the keyword "new"

$bluegill = new Fish();

 ?>

 <?php
 // Adding Properties
 class Recipe
{
  public $title;
  public $Ingredients = array();
  public $instructions = array();
  public $yield;
  public $tag = array();
  public $source = "Lizza Reyes";
}

$recipe1 = new Recipe();
var_dump($recipe1);
  ?>
