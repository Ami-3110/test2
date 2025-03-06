<?php

function searchCityTime($city_name)//searchCityTime関数に引数$city_nameを渡して実行
{
   require ('config/cities.php');//cities.phpを参照

    foreach($cities as $city) {         //呼び出したcities.phpのcityごとに
        if ($city["name"] === $city_name){//条件：city（すなわちname）が出てきた時に／それが引数$city_name
            $date_time = new DateTime("", new DateTimeZone($city["time_zone"]));//処理：new DateTime〜を$date_timeと定義
            $time = $date_time->format("H:i");//処理：$date_timeを$timeと定義し、表示形式をhh:mmに
            $city["time"] = $time;//$timeを$city（文字列time）と定義

            return $city;//戻り値$cityを出力
        }
    }
}
