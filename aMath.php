<?php

class aMath{
    private $day;
    private $month;
    private $year;
   
    private $arr = ["I"=>0,   "II"=>0,   "III"=>0,
                    "IV"=>0,  "V"=>0,    "VI"=>0, 
                    "VII"=>0, "VIII"=>0, "IX"=>0,
                    "X"=>0,   "XI"=>0,   "XII"=>0];
//    private $I, $II, $III, $IV, $V, $VI, $VII, $VIII, $IX;
    
    function __construct($var) {
        $this->day =    $var['day'];
        $this->month =  $var['month'];
        $this->year =   $var['year'];

        $this->arr["I"] = $this->limit22($this->day);
        $this->arr["II"] = $this->month;
        $this->arr["III"] = $this->limit22($this->arr["I"] + $this->arr["II"]);
        $yearStr = str_split($this->year);
        $sum = 0;
        foreach ($yearStr as $key => $value) {
            $sum += $value;
        }
        $this->arr["IV"] = $this->limit22($sum);
        $this->arr["V"] = $this->limit22($this->arr["II"] + $this->arr["IV"]);
        $this->arr["VI"] = $this->limit22($this->arr["III"] + $this->arr["V"]);
        $this->arr["VII"] = $this->limit22($this->arr["III"] + $this->arr["IV"]);
        $this->arr["VIII"] = $this->limit22($this->arr["II"] + $this->arr["VI"]);
        $this->arr["IX"] = $this->limit22($this->arr["I"] + $this->arr["IV"]);
        $this->arr["X"] = $this->doSubstr($this->arr["I"], $this->arr["II"]);
        $this->arr["XI"] =$this->doSubstr($this->arr["II"], $this->arr["IV"]);
        $this->arr["XII"] =$this->doSubstr($this->arr["X"], $this->arr["XI"]);
    }
    function getDate(){
        return $this->day."/".$this->month."/".$this->year;
    }
    function getArcs(){
        return $this->arr;
    }
    function limit22($var){
        if($var > 22) { return $var - 22; }
        return $var;
    }
    function doSubstr($var1, $var2){
        if ($var1 < $var2) { $var1 += 22; }
        return $this->limit22($var1 - $var2);
    }
}
?>