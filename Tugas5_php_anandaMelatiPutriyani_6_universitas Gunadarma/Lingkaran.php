<?php
// Child classes
require_once 'Bentuk2D.php';
class Lingkaran extends Bidang2D 
{
  public $jari2;
  
  public function __construct($jari2) 
  {
    $this->jari2 = $jari2;
  }
  
  public function namaBidang()
  {
    return "Lingkaran";
  }
  
  public function luasBidang()
  {
    return 3.14 * $this->jari2 * $this->jari2;
  }
  
  public function kelilingBidang()
  {
    return 2 * 3.14 * $this->jari2;
  }
}

?>