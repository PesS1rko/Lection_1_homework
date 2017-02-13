<?php
$string="is an American multinational corporation and technology company headquartered in Santa Clara";
$array1=explode(" ",$string);
//echo $array1[5];

for($i=0;$i<count($array1);$i++)
{
    $findLargeWord=$array1[$i];
    $strlen=strlen($findLargeWord);
   //echo $strlen."<br/>";
    if($strlen>=8){
                $b=strrev($findLargeWord);
        $a=substr($b, -6);
            $c=strrev($a);
    $c."<br/>";
    //$array1[$i]=$c;
   
    
         $d=str_pad($c,7, ".", STR_PAD_RIGHT);
        //echo $d."<br/>";
        $array1[$i]=$d;
        }
    
   
   


}
//for($i=0;$i<count($array1);$i++)
//echo $array1[$i]." ";
$comma_separated = implode(" ", $array1);
echo $comma_separated;
?>