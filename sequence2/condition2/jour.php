<?php
date_default_timezone_set('Europe/Monaco');
$date = date('D');
if($date == "Sat"){
    echo "Je vous souhaite un bon week-end";
} elseif ($date == "Sun"){
    echo "Je vous souhaite un bon dimanche";
} else {
    echo "Je vous souhaite une bonne journée";
}