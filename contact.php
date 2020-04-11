<?php

//extract the details submitted by user on the form

extract($_REQUEST);

//open a blank file named uniquely after each user using email supplied   

$file = fopen("$email.txt","a");

    
 //write user data into the blank file opened. Also use PHP_EOL to separate to the next line

    fwrite($file, "FIRST NAME :" . $firstName . PHP_EOL);
    fwrite($file, "LAST NAME :" . $lastName . PHP_EOL);
    fwrite($file, "EMAIL :" . $email . PHP_EOL);
    fwrite($file, "FACULTY :" . $faculty . PHP_EOL);
    fwrite($file, "YOUR MESSAGE :" . $yourMessage . PHP_EOL);
    fwrite($file, "PASSWORD :" . $password . PHP_EOL);
    fwrite($file, "DATE OF MESSAGE :" . $dateOfMessage . PHP_EOL);
    
    
    fclose($file);

    



?>