//WAP to check whether the number is prime or not
<?php
$a = 56;
$i=2;
$temp=0;
if($a<2)
  echo "invalid entry";
else if($a==2)
  echo "$a is prime";
else
{
 for($i=2;$i<=floor($a/2);$i++)
  {
   if($a%$i != 0)
      $temp++;
   else
      break;
  }
if($temp==0)
 echo "$a is not prime";
else
  echo "$a is prime";
}
?>

