<?php
  if($_GET['city']){
    //Link api
    $apiData= file_get_contents ("https://api.openweathermap.org/data/2.5/weather?q=".$_GET['city']."&appid=32b97a588e70a89b0404f78f58b4f67c");
    //Takes a JSON encoded string and converts it into a PHP variable.
    //When true, JSON objects will be returned as associative arrays; when false, JSON objects will be returned as objects.
    $weatherArray = json_decode($apiData, true);
    //Formula for celsius: C = K - 273.15
    $tempC = $weatherArray['main']['temp']-273;
    // print_r() displays information about a variable in a way that's readable by humans.
    // view page source
    // print_r($weatherArray);
    // $weather = "<div><b>".$weatherArray['name'].", " .$weatherArray['sys']['country']. " :</b> " . intval($tempC). "&deg;C</div>";//Intval:Get the integer value of a variable.

}
?>