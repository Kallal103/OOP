<?php
/**
 * PHP: Interfaces
 * PHP: Abstract
 */

 interface Test_Intface
 {
     //only contain abstract method,constant
     //every methods must be public
     //you can only define the method but can not declare it

     //public $name;

     public function hello();
 }

 interface Test_Two{
     public function welcome();
 }

 //new Test_Intface;

 class Test_Child implements Test_Intface, Test_Two {
     public function hello(){
       echo "Hello I am from Interface";
     }

     public function welcome(){
         echo "Welcome to Interface Child";
     }
 }


 $ob = new Test_Child;
 $ob->hello();
 echo "<br>";
 $ob->welcome();
