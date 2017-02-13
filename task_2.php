<?php
/*Тут помилка... якщо останній день місяця то у випадках коли треба перенести день доставки на наступний (наприклад з 28 лютого на 1 березня) виведеться 29 лютого*/
$today = getdate(); 
//foreach ( $today as $key => $val )
 $weekend="$today[wday]";
$yday = "$today[yday]";
$time="$today[hours]";
$dayNumber="$today[mday]";
$month="$today[mon]";
if($time<15 || $day!="0"||$day!="6"||$yday!="1"||$yday!="7")
{
    echo "Сьогодні: ".$dayNumber." ";
    echo ehoKirilicMonth($month);//не знаю чого але якщо виводити все через один ECHO то міняється порядок виводимих значень, решту мені лінь мінять
    
    } else if($time>15||$day!="0"||$day!="6")
{
    $dayNumber++;
    echo "Завтра: ".$dayNumber." ".ehoKirilikMonth($month)."<br/>";
    }else if($day==0){
    $dayNumber++;
    echo "В понеділок: ".$dayNumber." ".echoKirilicMonth($month)."<br/>";
        
}else if($day==6)
{
    $dayNumber-5;
    echo "В понеділок: ".$dayNumber." ".ehoKirilicMonth($month)."<br/>";
}else if($yday=="1"||$yday=="7")
{
    $dayNymber++;
    echo "Завтра: ".$dayNumber." ".ehoKirilicMonth;
}




/*if($weekend=="1"||$weekend=="0")
{
    echo "Surprise motherfucker";
}*/
function ehoKirilicMonth($month)
{
    $monthArray=array(
        '1'=> 'Січня',
        '2'=> 'Лютого',
        '3'=> 'Березня',
        '4'=> 'Квітня',
        '5'=> 'Травня',
        '6'=> 'Червня',
        '7'=> 'Липня',
        '8'=> 'Серпня',
        '9'=> 'Вересня',
        '10'=> 'Жовтня',
        '11'=> 'Личтопада',
        '12'=> 'Грудня',
    );
    echo $monthArray[$month];
}

?>