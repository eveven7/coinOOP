<?php
class Coin{
 private $country;
 private $value;
 private $year;
 private $material;



 function __construct($country = null, $value = null, $year = null, $material = null){
    $this->country = $country;
    $this->value = $value;
    $this->year = $year;
    $this->material = $material;
}

public function setCountry($country)
{
    $this->country = $country;
}


public function setValue($value)
{
    $this->value = $value;
}

public function setYear($year)
{
    $this->year = $year;
}


public function setMaterial($material)
{
    $this->material = $material;
}


public function getCountry()
{
    return $this->country;
}


public function getValue()
{
    return $this->value;
}

public function getYear()
{
    return $this->year;
}

public function getMaterial()
{
    return $this->material;
}
}

?>