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
