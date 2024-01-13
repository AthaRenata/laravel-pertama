<?php 
namespace App\Helpers;

class DataKeeper{
    public static $dataArray = [];
    public static function saveData(array $data){
        self::$dataArray[] = $data;
    }

    public static function showData(){
        return self::$dataArray;
    }
}

?>