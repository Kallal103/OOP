<?php
class Lesson_Two 
{
    public $name;

    public function show_val() {
        return $this->name;
    }

    public function set_val($val)  {
        $this->name = $val;
    }
}

$lesson = new Lesson_Two;

$lesson->set_val("Kallal");

echo $lesson->show_val();