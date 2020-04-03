<?php
/**
 * PHP: Constructor Method
 * PHP: Destructor Method
 */

 class Test_cons 
 {
    public function __construct($dbcon)
    {
       echo $dbcon;
    }

    public function Database(){
        echo "Hello Database";
    }
 }

 $ob = new Test_cons;
 echo "<br>";
 //$ob->Database();