<?php
$num = 2250;
$s = 0 ;
while ($num>0)
{
    $d=$num%10;
    $num=$num/10;
    $s=$s+$d; 
}
echo "addition of digit : $s<br>";
$num = 220;
do
    {
        print "$num<br>";
        $num++;   
    }
while($num>225);
?>