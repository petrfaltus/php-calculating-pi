<?php

abstract class tPi
{
 const DESCRIPTION = "?";

 protected $precision_digits;

 protected $pi = "?";
 protected $calculation_cycles = 0;
 protected $calculation_time = 0;

 //----------------------------------------------------------------------------
 public function get_pi()
 {
  return $this->pi;
 }
 //----------------------------------------------------------------------------
 public function print_report()
 {
  echo self::DESCRIPTION.PHP_EOL;
  echo PHP_EOL;

  echo $this->pi.PHP_EOL;
  echo PHP_EOL;

  echo "Desetinnych mist: ".$this->precision_digits.PHP_EOL;
  echo "Vypocetnich cyklu: ".$this->calculation_cycles.PHP_EOL;
  echo "Delka vypoctu: ".$this->calculation_time."s".PHP_EOL;
  echo PHP_EOL;

  return;
 }
 //----------------------------------------------------------------------------

 //----------------------------------------------------------------------------
 function __construct($precision_digits)
 {
  $this->precision_digits = $precision_digits;

  return;
 }
 //----------------------------------------------------------------------------
}

?>
