<?php

class aMath{
    private $day;
    private $month;
    private $year;
            
    
    function __construct($var) {
        $this->day = $var['day'];
        $this->month = $var['month'];
        $this->year = $var['year'];
    }
    function getDate(){
        return $this->day."/".$this->month."/".$this->year;
    }
}
?>