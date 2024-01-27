<!--
    to run it in GitBash:
    php greeting.php
-->
<?php

    $greeting = "Hi";
    $name = "Irina";

    echo $greeting . ", " . $name . "!\n";
    echo "How are you $name? \n";
    echo "Nice to meet you.\n";

    function greetings() {
        $morning = 'Good morning!';
        $daytime = 'Good afternoon!';
        $evening = 'Good evening!';
        $night = 'Goodnight!';
        date_default_timezone_set("Europe/Helsinki");
        $time = date("H:i");
        
        if($time < '11:00' and $time >= '04:00') {
            echo $morning;
        } elseif($time < '17:00' and $time >= '11:00') {
            echo $daytime;
        } elseif($time < '21:00' and $time >= '17:00') {
            echo $evening;
        } elseif($time < '04:00' and $time >= '21:00') {
            echo $night;
        }
    }
    greetings();
?>