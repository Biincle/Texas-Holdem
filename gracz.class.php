<?php
class gracz{

    public $rekaGracza = array();
    function dodaj($karta){
       array_push($this->rekaGracza, $karta);
    }

    function wyswietl(){
      return var_dump($this->rekaGracza);
    }
}

?>
