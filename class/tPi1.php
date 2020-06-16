<?php

class tPi1 extends tPi
{
 const DESCRIPTION = "Program pro vypocet Pi = 4*( 1 - 1/3 + 1/5 - 1/7 + 1/9 - 1/11 + ... )";

 //----------------------------------------------------------------------------
 public function calculate()
 {
  $scale = $this->precision_digits + 2;
  bcscale($scale);

  $polarity = 1;
  $this->calculation_cycles = 0;

  $result = 0;

  $start_time = gettimeofday(true); // calculation time measurent

  do
    {
     $denominator = 2 * $this->calculation_cycles + 1; // 1, 3, 5, 7, 9, ...
     $fraction = bcdiv(1, $denominator);
     $contribution = bcmul($polarity, $fraction);

     $result = bcadd($result, $contribution);

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
}

?>
