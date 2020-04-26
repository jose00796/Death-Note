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
$description = $_POST['description'];

$victim = new persona($name, $lastname);
$note = new Libreta($victim, $description);

echo "<br><center>";
$note->Matar($victim);
echo "</center>";
