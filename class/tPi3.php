<?php

class tPi3
{
 const DESCRIPTION = "Program pro vypocet Pi = 4*( (4/5-1/239) - (4/5^3-1/239^3)/3 + (4/5^5-1/239^5)/5 - (4/5^7-1/239^7)/7 + ... )";

 protected $precision_digits;

 protected $pi = "?";
 protected $calculation_cycles = 0;
 protected $calculation_time = 0;

 //----------------------------------------------------------------------------
 public function calculate()
 {
  $scale = $this->precision_digits + 2;
  bcscale($scale);

  $fraction_one = bcdiv(4, 5); // 4/5
  $fraction_two = bcdiv(1, 239); // 1/239
  $polarity = 1;
  $this->calculation_cycles = 0;

  $result = 0;

  $start_time = gettimeofday(true); // calculation time measurent

  do
    {
     $numerator = bcsub($fraction_one, $fraction_two); // 4/5^N+1/239^N
     $denominator = 2 * $this->calculation_cycles + 1; // 1, 3, 5, 7, 9, ...
     $fraction = bcdiv($numerator, $denominator);
     $contribution = bcmul($polarity, $fraction);

     $result = bcadd($result, $contribution);

     $fraction_one = bcdiv($fraction_one, 25); // *= 1/5
     $fraction_two = bcdiv($fraction_two, 57121); // *= 1/239
     $polarity *= -1;
     $this->calculation_cycles++;
    }
  while (bccomp($contribution, 0));

  $this->pi = bcmul(4, $result, $this->precision_digits);

  $finish_time = gettimeofday(true); // calculation time measurent
  $this->calculation_time = $finish_time - $start_time;

  return;
 }
 //----------------------------------------------------------------------------

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
