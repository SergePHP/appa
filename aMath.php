<?php

class aMath{
    private $day;
    private $month;
    private $year;
    private $I, $II, $III, $IV, $V, $VI, $VII, $VIII, $IX;
    
    function __construct($var) {
        $this->day =    $var['day'];
        $this->month =  $var['month'];
        $this->year =   $var['year'];
        
        $this->I = $this->limitNum($this->day);
        $this->II = $this->month;
        $yearStr = str_split($this->year);
        $sum = 0;
        foreach ($yearStr as $key => $value) {
            $sum += $value;
        }
        $this->III = $this->limitNum($sum);
    }
    function getDate(){
        return $this->day."/".$this->month."/".$this->year;
    }
    function getNumbers(){
        return $this->I."/".$this->II."/".$this->III;
    }
    function limitNum($var){
        if($var > 22) {return $var - 22;}
        return $var;
    }
}
?>