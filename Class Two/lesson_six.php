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

     public $name;

     private function hello(){
         echo "Hello world";
     }
 }

 new Test_Intface;