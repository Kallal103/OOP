<?php
/**
 * PHP: Interfaces
 * PHP: Abstract
 */

//  interface Test_Intface
//  {
//      //only contain abstract method,constant
//      //every methods must be public
//      //you can only define the method but can not declare it

//      //public $name;

//      public function hello();
//  }

//  interface Test_Two{
//      public function welcome();
//  }

//  //new Test_Intface;

//  class Test_Child implements Test_Intface, Test_Two {
//      public function hello(){
//        echo "Hello I am from Interface";
//      }

//      public function welcome(){
//          echo "Welcome to Interface Child";
//      }
//  }


//  $ob = new Test_Child;
//  $ob->hello();
//  echo "<br>";
//  $ob->welcome();


 //Abstract 

 abstract class Ab_Class{
     //must have abstract keyword before class
     //must have atleast one abstract method
     //we can define and declare method
     // we can add all access modifier except private
     // we can use static keyword
     public function __construct(){
         echo "Hello Parent abstract";
     }
     public static function welcome(){
         echo "Welcome to abstract class";
     }
    //only we can use public and protected 
    abstract public function Abhello();
 }
//we can not instantiate abstract class
 //new Ab_Class;

 class Inherit_Abstract extends Ab_Class{
    public function Abhello(){
        echo "This is from abstract inheritence";
    }
 }

 $iob = new Inherit_Abstract ;
 echo "<br>";
 $iob->welcome();
 echo "<br>";
 $iob->Abhello();

