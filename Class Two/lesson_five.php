<?php
/**
 * PHP: Constructor Method
 * PHP: Destructor Method
 */

 class Test_cons 
 {
    public function __construct($dbcon = null)
    {
       echo $dbcon;
    }

    public function __destruct()
    {
        echo "This class is end";
    }

    public function Database(){
        echo "Hello Database";
    }

 
 }

 $ob = new Test_cons("localhost");
 echo "<br>";
 $ob->Database();
 echo "<br>";