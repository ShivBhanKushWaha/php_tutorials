<?php

if(isset($_POST['name'])){
    echo "User name is " . $_POST['name'] . "<br/>";
    echo "User email is " . $_POST['email'] . "<br/>";
    echo "User password is " . $_POST['password'] . "<br/>";
    
    if (!empty($_POST['skills'])) {
        echo "User skills are " . implode(", ", $_POST['skills']) . "<br/>";
    } else {
        echo "No skills selected.<br/>";
    }

    if (isset($_POST['gender'])) {
        echo "User gender is " . $_POST['gender'] . "<br/>";
    } else {
        echo "Gender not selected.<br/>";
    }

    if (isset($_POST['city']) && $_POST['city'] !== '') {
        echo "User city is " . $_POST['city'] . "<br/>";
    } else {
        echo "No city selected.<br/>";
    }

    echo "User bio is " . $_POST['bio'] . "<br/>";
}
?>
