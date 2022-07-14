<?php
  if($_GET['city']){
    //Link api
    $apiData= file_get_contents ("https://api.openweathermap.org/data/2.5/weather?q=".$_GET['city']."&appid=32b97a588e70a89b0404f78f58b4f67c");
    
    // echo $apiData;
    //Takes a JSON encoded string and converts it into a PHP variable.
    //When true, JSON objects will be returned as associative arrays; when false, JSON objects will be returned as objects.
    $weatherArray = json_decode($apiData, true);
    // print_r() displays information about a variable in a way that's readable by humans.
    print_r($weatherArray);
}
?>