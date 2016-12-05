<?php
include_once 'Common.php';

class Composite extends Common {
    
    function __construct(array $var1, array $var2) {
        $this->arcs["I"] = $this->limit22($var1["I"] + $var2["I"]);
        $this->arcs["II"] = $this->limit22($var1["II"] + $var2["II"]);
        $this->arcs["III"] = $this->limit22($var1["III"] + $var2["III"]);
        $this->arcs["IV"] = $this->limit22($var1["IV"] + $var2["IV"]);
        $this->arcs["V"] = $this->limit22($var1["V"] + $var2["V"]);
        $this->arcs["VI"] = $this->limit22($var1["VI"] + $var2["VI"]);
        $this->arcs["VII"] = $this->limit22($var1["VII"] + $var2["VII"]);
        $this->arcs["VIII"] = $this->limit22($var1["VIII"] + $var2["VIII"]);
        $this->arcs["IX"] = $this->limit22($var1["IX"] + $var2["IX"]);
        $this->arcs["X"] = $this->limit22($var1["X"] + $var2["X"]);
        $this->arcs["XI"] = $this->limit22($var1["XI"] + $var2["XI"]);
        $this->arcs["XII"] = $this->limit22($var1["XII"] + $var2["XII"]);
    }    
}

?>
