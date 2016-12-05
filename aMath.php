<?php

class aMath{
    
    private $date = ["day"=>0, "month"=>0, "year"=>0];
  
    private $arr = ["I"=>0,   "II"=>0,   "III"=>0,
                    "IV"=>0,  "V"=>0,    "VI"=>0, 
                    "VII"=>0, "VIII"=>0, "IX"=>0,
                    "X"=>0,   "XI"=>0,   "XII"=>0];
    
    function __construct($var) {
        $this->date["day"] = $var['day'];
        $this->date["month"] = $var['month'];
        $this->date["year"] = $var['year'];

        $this->arr["I"] = $this->limit22($this->date["day"]);
        $this->arr["II"] = $this->date["month"];
        $this->arr["III"] = $this->limit22($this->arr["I"] + $this->arr["II"]);
        $yearStr = str_split($this->date["year"]);
        $sum = 0;
        foreach ($yearStr as $value) {
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
        return $this->date;
    }
    function getArcs(){
        return $this->arr;
    }
    private function limit22($var){
        if($var > 22) { return $var - 22; }
        return $var;
    }
    private function doSubstr($var1, $var2){
        if ($var1 <= $var2) { $var1 += 22; }
        return $this->limit22($var1 - $var2);
    }
}
?>