<?php
$arr = array("Japan" => "Tokyo", "Mexico" => "Mexico City","India" => "New Delhi", "USA" => "Washington", "South-Korea" => "Seoul", "China" => "Peking", "Nigeria" => "Abuja", "Argentina" => "Buenos Aires", "Egypt" => "Cairo", "United Kingdom" => "London");

$points = 0;

foreach($arr as $land => $stad){
    echo "Welke hoofdstad heeft ". $land."?".PHP_EOL;
    $answer = readline("");

    if($answer == $stad){
        $points++;

    }
    else{
        echo("Dat is niet de hoofdstad van $land".PHP_EOL);
    }
    
}
echo ("Je hebt in totaal $points behaald!");
?>