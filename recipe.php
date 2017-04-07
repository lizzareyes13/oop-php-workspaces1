<?php
  class recipe
  {
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
  public $ingredients = array();
  public $instructions = array();
  public $yield;
  public $tag = array();
  public $source = "Lizza Reyes";
}

$recipe1 = new Recipe();
var_dump($recipe1);
  ?>

<?php
class Recipe
{
 public $title;
 public $ingredients = array();
 public $instructions = array();
 public $yield;
 public $tag = array();
 public $source = "Lizza Reyes";
}

$recipe1 = new Recipe();
// Accessing Properties
echo $recipe1->source;
$recipe1->source = "Abuela Reyes";
echo $recipe1->source;

$recipe2 = new Recipe();
$recipe2->source = "Betty Crocker";
echo $recipe1->source;
echo $recipe2->source;
 ?>
