<?php
//private- only use own class
//protected- use own class and child class
//public in all place

class Lesson_Two 
{
    private $name;

    private function show_val() {
        return $this->name;
    }

    public function set_val($val)  {
        $this->name = $val;
    }
}

$lesson = new Lesson_Two;

$lesson->set_val("Kallal");

echo $lesson->show_val();