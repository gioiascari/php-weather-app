<?php
    if($_GET['city']){
        //Link api
        $apiData=file_get_contents('https://api.openweathermap.org/data/2.5/weather?q=venezia&appid=32b97a588e70a89b0404f78f58b4f67c');

    }


?>