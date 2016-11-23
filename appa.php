<?php

    function __autoload($classname) {
        $filename = "./". $classname .".php";
        include_once($filename);
    }
    session_start();
    $a = new aMath($_SESSION['date']);
    echo "Hello, the date is: [".$a->getDate()."]";

