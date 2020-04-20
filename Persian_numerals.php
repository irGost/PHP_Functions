<?php
function fan($number='',$reverse=false)
{
   $en = array("0","1","2","3","4","5","6","7","8","9");
   $fa = array("۰","۱","۲","۳","۴","۵","۶","۷","۸","۹");
   if(! $reverse) return str_replace($en, $fa, $number);
   else return str_replace($fa, $en, $number);
   // reverse process only when second param is defined (no matter set to what).
}
?>