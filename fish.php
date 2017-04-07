<!-- Add the following public properties to the Fish class: common_name, flavor, and record_weight. -->
<?php
class Fish{
  public $common_name;
  public $flavor;
  public $record_weight;
}

 ?>



 <!-- Create a Fish object named $bass with the following data:
 name: "Largemouth Bass"
 flavor: "Excellent"
 record: "22 pounds 5 ounces" -->
 <?php
 class Fish{
   public $common_name;
   public $flavor;
   public $record_weight;
 }
 $bass = new Fish;
 $bass->common_name = "Largemouth Bass";
 $bass->flavor = "Excellent";
 $bass->record_weight = "22 pounds 5 ounces";
  ?>
