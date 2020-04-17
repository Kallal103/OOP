<?php
namespace Elements;

/**
 * namespace
 */
include "lib/helpers.php";
include "lib/module.php";

use lib\module\elements as modulelements;
 class elements {
      public function __construct(){
         echo "Hello World"; 
      }
 }

 $ob = new \Elements\elements;
 echo "<br>";
 new modulelements;
//  $module = new module\elements;
//  echo "<br>";
//  echo __NAMESPACE__;
//  echo "<br>";
//  module\HelloWorld();
//  echo "<br>";
//  echo module\VERSION;