<?php
include 'karta.class.php';
class krupier {

  /**	* 52 card poker deck
  */
    private $values = Array('Ap','Ak','At','Ac','2p','2k','2t','2c','3p','3k','3t','3c',
                 '4p','4k','4t','4c','5p','5k','5t','5c','6p','6k','6t','6c',
                 '7p','7k','7t','7c','8p','8k','8t','8c','9p','9k','9t','9c',
                 '1p','1k','1t','1c','Jp','Jk','Jt','Jc','Qp','Qk','Qt','Qc',
                 'Kp','Kk','Kt','Kc');

    private $deck;
    function __construct()
    {
      $this->shuffle();
        foreach ($this->values as $value) {
          $card = new Card($value[0], $value[1]);
          $this->deck[] = $card;
        }
    }
    public function shuffle(){
      shuffle($this->values);
    }


    

///Do testow
    public function zwrocDeck(){
      return $this->deck;
    }





}

$test = new krupier;
print_r($test->zwrocDeck());

?>
