<?php
/*class B_Tech{
  public $mark=34;
  public $percentage;
  public function examConduct($name){
      echo "welcome to exam conduction cell";
      echo "<br> Student Name: $name";
      echo "<br> $name got :". $this->mark." marks in php";
      $this->percentage=70;
      echo "<br> He got $this->percentage in PHP";
  }
}
$divyam=new B_Tech;
$gagan=new B_Tech();

echo "<br>";
$divyam->examConduct("praful");*/

/*class Car{
    public $name;
    public $color;
    public function setData($name,$color){
        $this->name=$name;
        $this->color=$color;
    }
    public function displayData(){
        echo "The color of the {$this->name} is {$this->color}<br>";
    }
}
$blackcar=new Car();
$redcar= new Car();
$blackcar->setData("BMW X series","Black");
$redcar->setData("BMW A series","Red");
$blackcar->displayData();
$redcar->displayData();*/

/*class Mobile{
    public $Model;
    public $color;
    //a constructor is a public method which is named as
    public function __Construct($Model,$color){
        echo "constructor created";
        $this->Model=$Model;
        $this->color=$color;
    }
    public function __destruct(){
        echo "The color of the {$this->Model} is {$this->color}<br>";
    }
}
$samsung=new Mobile("S 21 ulta","red");*/

/*class Car
{
    public $name;
    public $color;

    public function setData($name_1, $color_1)
    {
        //echo "welcome you are in setdata method";
       $this->name=$name_1;
       $this->color=$color_1;
    }
    public function displayData(){
        echo $this->name;
        echo " ";
        echo $this->color;
        echo "<br>";
    }
}

$blackcar = new Car();
$redcar = new Car();
$blackcar->setData("BMW X series", "Royal Black");
$redcar->setData("BMW c class","zed Red");
$blackcar->displayData();
$redcar->displayData();

class Car
{
    public $name;
    public $color;

    public function __construct($name_1,$color_1)
    {
        //echo "welcome you are in contructor method";
        $this->name = $name_1;
        $this->color = $color_1;
    }
    public function __destruct(){
        echo $this->name;
        echo " ";
        echo $this->color;
        echo "<br>";
    }
}
$blackcar=new car("maruti suzuki ","black");

class Mobile{
    public $name=24;
    public function __destruct(){
        echo "desructor started";
    }
    public function  __construct(){
        echo "<br> you are in constructor<br>";
        echo $this->name;
    }

}

$samsung=new Mobile();

class Car
{
    public $name;
    public $color;

    public function setData($name_1, $color_1)
    {
        $this->name = $name_1;
        $this->color = $color_1;

    }

    public function getData()
    {
        echo "The modle of my car is {$this->name} " . "and its color is $this->color";
    }

}
$bcar = new Car;
$bcar->setData("BMW X series", "Zed Black");*/
//error_reporting(0);
declare(strict_types=1);
class Student{
    public $name;
    public $mark;
    public function __destruct(){
        echo "<br>The Name of student is: {$this->name} " . "and marks is: $this->color";

    }
    public function __construct(string $name_1,int $mark_1){
        $this->name = $name_1;
        $this->color = $mark_1;

    }

}
$details=new Student( "Zed Black",45);











































