<?php
/*
    echo "Hello World!<br/>";

    $name = "Chakkarin";
    echo strlen($name)."<br/>";

    $age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
*/

    function multiply($x, $y){
        return $x*$y;
    }
    // data from FORM.html

    echo multiply($_POST["x"],$_POST["y"]);