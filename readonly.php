<?php

// Readonly

Class ReadonlyClass {
  
  public readonly string $city;
  
  public function __construct(string $city) {
    
    $this->city = $city;
  }
}

$obj = new ReadonlyClass('Bhadohi');
echo $obj->city;

$obj->city = "New Delhi";
echo $obj->city;
?>