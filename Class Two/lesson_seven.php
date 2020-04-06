<?php
//inheritence

class Elementor
{
    public $name;
    public $version;

    public function __construct($pname, $ver)
    {
        $this->name = $pname;
        $this->version = $ver;
    }
}
