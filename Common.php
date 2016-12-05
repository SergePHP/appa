<?php

class Common {
    protected $arcs = ["I"   => 0, "II"   => 0, "III" => 0 ,
                       "IV"  => 0, "V"    => 0, "VI"  => 0,
                       "VII" => 0, "VIII" => 0, "IX"  => 0,
                       "X"   => 0, "XI"   => 0, "XII" => 0];
    protected function limit22($var){
        if($var > 22) { return $var - 22; }
        return $var;
    }
    protected function doSubstr($var1, $var2){
        if ($var1 <= $var2) { $var1 += 22; }
        return $this->limit22($var1 - $var2);
    }
    function getArcs(){
    return $this->arcs;
    }
}

?>
