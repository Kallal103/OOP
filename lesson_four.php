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

     public static function welcome(){
       return  self::WELCOME_MESSAGE;
     }


 }
//echo Lesson_Four::WELCOME_MESSAGE."<br>";
echo Lesson_Four::welcome();
//echo Lesson_Four::$name;

// echo Lesson_Four::$name;