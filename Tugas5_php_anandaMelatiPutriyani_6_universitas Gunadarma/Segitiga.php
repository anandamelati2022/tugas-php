<?php
require_once 'Bentuk2D.php';
class Segitiga extends Bidang2D 
{
  public $alas;
  public $tinggi;
  
  public function __construct($alas, $tinggi) 
  {
    $this->alas = $alas;
    $this->tinggi = $tinggi;
  }
  
  public function namaBidang()
  {
    return "Segitiga";
  }
    
  public function luasBidang()
  {
    return 0.5 * $this->alas * $this->tinggi;
  }
  
  public function kelilingBidang()
  {
    return $this->alas * 3;
  }
}

?>