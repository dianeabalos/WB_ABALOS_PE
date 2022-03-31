<?php

$guess = $_POST['guess'];
$random =" ";

echo " Your Guess number: " . $guess . "<br>" . "<br>";

echo "Generated numbers: " ."<br>" . "<br>";

function randomNumber ($random,$guess){

    for ($x = 1 ; $x <=10; $x++){
        $random =  rand(1,10);

        if ($guess == $random){
            $output = "Good guess! Matched number is " . $guess . "<br>";

        } else {
        $output = "Sorry! Didn't match with the number " . $random . "<br>";

        }
        echo $output;
    }

}

$outcome =  randomNumber($random,$guess);
echo $outcome;


?>