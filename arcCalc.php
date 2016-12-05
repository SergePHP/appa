<?php
include_once 'Common.php';

class arcCalc extends Common {
    
    private $date = ["day"=>0, "month"=>0, "year"=>0];

    function __construct($var) {
        $this->date["day"] = $var['day'];
        $this->date["month"] = $var['month'];
        $this->date["year"] = $var['year'];

        $this->arcs["I"] = $this->limit22($this->date["day"]);
        $this->arcs["II"] = $this->date["month"];
        $this->arcs["III"] = $this->limit22($this->arcs["I"] + $this->arcs["II"]);
        $yearStr = str_split($this->date["year"]);
        $sum = 0;
        foreach ($yearStr as $value) {
            $sum += $value;
        }
        $this->arcs["IV"] = $this->limit22($sum);
        $this->arcs["V"] = $this->limit22($this->arcs["II"] + $this->arcs["IV"]);
        $this->arcs["VI"] = $this->limit22($this->arcs["III"] + $this->arcs["V"]);
        $this->arcs["VII"] = $this->limit22($this->arcs["III"] + $this->arcs["IV"]);
        $this->arcs["VIII"] = $this->limit22($this->arcs["II"] + $this->arcs["VI"]);
        $this->arcs["IX"] = $this->limit22($this->arcs["I"] + $this->arcs["IV"]);
        $this->arcs["X"] = $this->doSubstr($this->arcs["I"], $this->arcs["II"]);
        $this->arcs["XI"] = $this->doSubstr($this->arcs["II"], $this->arcs["IV"]);
        $this->arcs["XII"] = $this->doSubstr($this->arcs["X"], $this->arcs["XI"]);
    }
    function getDate(){
        return $this->date;
    }
}
?>