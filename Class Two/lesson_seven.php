<?php
//inheritence
// final can not be extended 
class Elementor
{
    public $name;
    public $version;

    public function __construct($pname, $ver)
    {
        echo $this->name = $pname;
        echo $this->version = $ver;
    }
    public function init($title)
    {
        echo $title;
    }
    public function widgets($wid)
    {
        echo $wid;
    }
}

class My_Widget extends Elementor
{
     public function child_widget(){
         parent::widgets("this is parent widget");
         echo "<br>";
         echo "override parent widget method";
     }
}
$ob1 = new Elementor("new widget", "0.1");
echo "<br>";
$ob1->init("This is parent class");
echo "<br>";
$ob2 = new My_Widget("custom widget", "1.00");
echo "<br>";
//$ob2->init("This is child class");
$ob2->child_widget();
