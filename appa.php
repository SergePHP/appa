<!DOCTYPE HTML>
<html>
 <head>
     <title>Таблица арканов</title>
     	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 </head>
 <body>
<?php

    function __autoload($classname) {
        $filename = "./". $classname .".php";
        include_once($filename);
    }
    session_start();
    $a = new aMath($_SESSION['date']);
    echo "Hello, the date is: [".$a->getDate()."]<br>";
    echo "Arcs are following: \n";
    echo "<table border=\"1\" cellspacing=\"0\">\n"
            . "<th>Arcs</th><th>Value</th>";
    foreach ($a->getArcs() as $key => $value) {
        echo "\n<tr>\n\t\t<td align=center>".$key. "</td>"
                . "\n\t\t<td align=center>"
                . $value. "</td>\n</tr>\n";
    }
    echo "\n</table>\n";
    ?>
 </body>
</html>