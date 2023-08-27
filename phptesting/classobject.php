<?php

 class chan {
    private $name;
    public $job;
    private $cat;
    public $username;

    public function getname($incomename,$cat) {
        $this->name = $incomename;
        echo $this->name;
        echo "<br>";
         $this->cat =$cat;
         echo $cat;
        echo "********";
        
    }
   
    public function extendcode() {
        echo "this is extend code from first object";
    }
    
 

 }

  class second extends chan {
    
  }

  $person = new chan;
  $person->getname("chankhine","mimi");
 
  $secondman = new second;
  $secondman->getname("thetpaing","shwewar");
  echo "<br>";
  $secondman->extendcode();



?>
<hr>
<?php 

class Animals
{
public $name;
public $color;
public function __construct($name='default',$color='default') {
    $this->name=$name;
    $this->color=$color;
}
public function sleep() {
    echo "here i am sleeping";
}

}

class Dog extends Animals
{
    public function character() {
        echo "here i am dog";
    }
}
$animals=new Animals('shwewar','white');
echo $animals->name;
echo "<br>";
echo $animals->color;
echo "<br>";
$dog=new Dog('anunnat','black');
$dog->character();
echo "<br>";
$dog->sleep();
echo "<br>";
echo $dog->color;
// class Animal
// {
//  private $name;
//  public function run()
//  {
//  echo "$this->name is running...";
//  }
//  public function showname($names) {
//     $this->name = $names;
//     echo $name;
//  }

//  public function recall() {
//     return $this->name;
//  }

// }

//  $pet = new Animal;
//  $pet->showname("sisi");
//  $something = $pet->recall();
//  echo "you person is $something";
 
?>
<hr><hr>
<?php
// class BaseClass
// {
//     public $public = 'Publica';
//     protected $protected = 'Protectedb';
//     private $private = 'Privatec';
 
//     function Display()
//     {
//         echo $this->public;
//         echo $this->protected;
//         echo $this->private;
//     }
// }

 
// $obj = new BaseClass();
// echo $obj->public;
// echo $obj->protected; // Cannot access protected property
// echo $obj->private; // Cannot access private property
// $obj->Display();  //Displays all properties
 
// class SubClass extends BaseClass
// {
//     public $public = 'Public Sub Class';
//     protected $protected = 'Protected Sub Class';
 
//     function Display()
//     {
//         echo $this->public;
//         echo $this->protected;
//         echo $this->private;
//     }
// }
 
// $obj2 = new SubClass();
// echo $obj2->public;
// echo $obj2->protected; // Cannot access protected property
// echo $obj2->private;  // Cannot access private property
// $obj2->Display(); //Displays all properties
?>