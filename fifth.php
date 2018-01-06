//WAP to check whether the string is in lowercase
<?php
  $txt1 = "abcdefghijlmnopqrstuvwxyz";
  $temp =0;
for($i=0;$i<strlen($txt1);$i++)
{
  if(ord($txt1[$i])<97 || ord($txt1[$i])>122 )
    {
      $temp=0;
      break;
    }
  else
      $temp=1;
}
if($temp==1)
  echo "String $txt1 is in lowercase";
else
  echo "String $txt1 is not in lowercase";

       
?>

