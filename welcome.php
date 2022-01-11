<?php
    $name = $_POST['Name'];
    $age = $_POST['age'];
    $birthdate = $_POST['birthdate'];
    $email = $_POST['email'];
    $cool = $_POST['cool'];
    $Continent = $_POST['Continent'];
    $favourite = $_POST['favourite'];
    $like = $_POST['like'];

    echo 'Name: '.$name ."<br/>";
    echo 'Age: '.$age ."<br/>";
    echo 'Birthdate: '. $birthdate ."<br/>";
    echo 'Email: '.$email ."<br/>";
    if($cool == 'yes')
        echo "You cool" ."<br/>";
    else
        echo "You not cool" . "<br>";

    echo 'You from '.$Continent ."<br/>";
    
    echo 'Favorite color: '.$favourite ."<br/>";
    echo 'You like '.$like ."<br/>";
?>