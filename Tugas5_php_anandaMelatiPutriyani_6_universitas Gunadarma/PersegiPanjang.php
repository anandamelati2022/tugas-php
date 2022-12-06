<?php
require_once 'Bentuk2D.php';
class PersegiPanjang extends Bidang2D 
{
  public $panjang;
  public $lebar;
  
  public function __construct($panjang, $lebar) 
  {
    $this->panjang = $panjang;
    $this->lebar = $lebar;
  }
  
  public function namaBidang()
  {
    return "Persegi Panjang";
  }
    
  public function luasBidang()
  {
    return $this->panjang * $this->lebar;
  }
  
  public function kelilingBidang()
  {
    return ($this->panjang * 2) + ($this->lebar * 2);
  }
}
?>