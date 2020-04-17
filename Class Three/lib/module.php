<?php
namespace lib\module;
function HelloWorld(){
    echo "Hello from namespace function";
}

const VERSION = 1.0;

class elements {
    public function __construct() {
        echo "Hello I am from lib module";
    }
}