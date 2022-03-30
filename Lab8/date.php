<?php
$post_time = strval($_POST['time']);
echo $post_time."<br>";

$new_time = explode(":", $post_time);
$hour = $new_time[0];
$min = $new_time[0];

if($hour < 12){
    echo "Good morning";
} else {
    echo "Good evening";
}