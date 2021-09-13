<?php 

/**
 * Access Static Properties
 * Use case: A Math class has different Pre-Build Methods/Functions, which can invkoked via static Properties directly. 
 */

class Weather {

    public static $tempConditions = ['cold', 'mild', 'warm'];

    public static function celsiusToFahrenheit($c) { 
        return $c * 9 / 5 + 32;
    }

    public static function determineTempCondition($f) {
        if($f < 40) {
            return self::$tempConditions[0]; // $this cannot be used, because the $this keyword refernce to an non existing instance. Instead the self:: keyword targets the CLASS ITSELF
        } else if ($f < 70) {
            return self::$tempConditions[1];
        } else {
            return self::$tempConditions[3]; 
        }
    }
}

Weather::$tempConditions;
// echo Weather::celsiusToFahrenheit(20);
echo Weather::determineTempCondition(20);







?>