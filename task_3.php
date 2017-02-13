<?php
$arrayName=["add","index","setup","unistall","XR_3da"];
$arrayType=[".txt",".php",".exe",".css",".html",".ini",".dat"];
$paramName=count($arrayName);
$paramType=count($arrayType);
$randomNumber1=rand(0,$paramName-1);
$randomNumber2=rand(0,$paramType-1);
$getName=$arrayName[$randomNumber1];
$getType=$arrayType[$randomNumber2];
function writeToFile($getName,$getType)
{   
     
    $file1=fopen("File1.txt","w+");
    fwrite($file1,$getName." ".$getType);
   
    fclose($file1);//0_о я не знаю що йому тут не подобається
  
    echo "<br/>"."<b><h2>Відкрийте File1.txt</h2><b/>";
    
}
writeToFile($getName,$getType);
$file2=fopen("File2.txt","w+");
fwrite($file2,$randomNumber2);
fclose($file2);
    
