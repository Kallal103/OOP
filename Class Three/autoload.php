<?php
/**
 * Dynamically autoload files
 */

 spl_autoload_register(function($className){
     $file =  __DIR__.'/classes/'.$className.'.php';
     if(file_exists($file)){
        require $file;
     }
     
 });

 new Fruits;
 echo "<br>";
 new Cars;
 echo "<br>";
 new Toys;