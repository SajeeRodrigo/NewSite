<?php

class Weather{

    public static $tempConditions = ['cold', 'mild', 'warm'];

    public static function celsiusToFarenheit($c){
        return $c * 9 / 5 + 32;
    }

    public static function determineTempCondition($f){
        if($f < 40){
            return self::$tempConditions[0];
        }else if($f < 70){
            return self::$tempConditions[1];
        }else{
            return self::$tempConditions[2];
        }
    }

}


//print_r(Weather::$tempConditions);
echo Weather::celsiusToFarenheit(20).'<br>';
echo Weather::determineTempCondition(80);
// $weatherInstance = new Weather();
// print_r($weatherInstance->tempConditions);

?>

<html>
    <head>
        <title>Static Properties</title>
    </head>
    <body>

    </body>
</html>