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
    $a = new arcCalc($_SESSION['date']);
    $lenght = count($a->getDate());
    $count = 0;
    echo "The date is: [";
    foreach ($a->getDate() as $value){
        $count++;
        if ($count == $lenght) {echo $value;}
        else echo $value."/";
    }
    echo "]<br>";
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