<?php

include 'index.php';
include 'helpers.php';

spl_autoload_register(function($classname){
        if (file_exists("src/$classname.php")) {
            require "src/$classname.php";
        }
});

$name = $_POST['name'];
$lastname = $_POST['lastname'];

$obj = new persona($name, $lastname);
Show("{$obj->GetName()}");
Show("{$obj->GetLastName()}");