<!-- creating classes and objects / adding and accessing properties -->
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

 <!-- Adding Properties -->
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
$recipe1->source = "Mami Feli";
echo $recipe1->source;

$recipe2 = new Recipe();
$recipe2->source = "Betty Crocker";
echo $recipe1->source;
echo $recipe2->source;
 ?>


<!-- Adding Methods:
     •A function in side a class is called a method.
     •These methods tell an object how to perform certain actions.
     •We can access class methods to perform actions on data of the individual objects. -->
<?php
  class Recipe
  {
    public $title;
    public $ingredients = array();
    public $instructions = array();
    public $yield;
    public $tag = array();
    public $source = "Lizza Reyes";

    // ADD METHODS
    // start code below this line
    public function displayRecipe()
    {
      return $this->title . "by" . $this->source;
    }
    // end code above this line
  }
 ?>

<?php

  class Recipe
  {
    public $title;
    public $instructions;
    public $ingredients;
    public $yield;
    public $tag = array();
    public $source = "Lizza Reyes";

    public function displayRecipe()
    {
      return $this->title . " by " . $this->source;
    }
  }
  $recipe = new Recipe();
  $recipe->source = "Mami Feli";
  $recipe->title = "My first recipe";

  $recipe2->source = "Betty Crocker";
  $recipe2->title = "My Second Recipe";

  echo $recipe1->displayRecipe();
  echo $recipe2->displayRecipe();


 ?>

<?php
class Recipe

{
  // public $title;
  private $title;
  public $ingredients = array();
  public $instructions = array();
  public $yield;
  public $tag = array();
  public $source = "Alena Holligan";

  public function setTitle($title)
  {
    $this->title = ucwords($title);
  }

  public function getTitle()
  {
    return $this->title;
  }

  public function displayRecipe()
  {
    return $this->title . " by " . $this->source;
  }
}
$recipe1 = new Recipe();
$recipe1->source = "Mami Feli";
// $recipe1->title = "My First Recipe";
$recipe1->setTitle("my first recipe");

$recipe2 = new Recipe();
$recipe2->source = "Betty Crocker";
// $recipe2->title = "My Second Recipe";
$recipe2->setTitle("my second recipe");

echo $recipe1->getTitle();
echo $recipe1->displayRecipe();
echo $recipe2->displayRecipe();
?>
