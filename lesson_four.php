<?php
/**
 * PHP: static
 * PHP: class constants
 * PHP: self
 * PHP: scope resolution operator
 */

 class Lesson_Four{
     public static $name;

     const WELCOME_MESSAGE = "Welcome to Elementor Widget";

     public function welcome($name){
        self::$name = $name;
     }


 }

$ob = new Lesson_Four;
Lesson_Four::welcome("Hello My name is Kallal");
echo Lesson_Four::$name;

// echo Lesson_Four::$name;