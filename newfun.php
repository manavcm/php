<?php
function RangeNum($arr)
{
    sort($arr);
    for($i=0;$i<sizeof($arr);$i++)
    {
        $rArr[$i]=intval($arr[$i]/10);
        $res[$i]=($rArr[$i]*10)."-".(($rArr[$i]*10)+10)."=".$arr[$i]."<br>";
        echo $res[$i];
    }
} 
$arr=array(12,56,9,45,90,433);
RangeNum($arr);
?>