<?php

// echo "Signup page";

// jo data me name vha se post hoga vo aise Post kr skte hai $_Post['name']
// if request nhi hai to error ayega
echo "User name is " . $_POST['name'];
echo "<br/>";
echo "User password is " . $_POST['password'];
echo "<br/>";
echo "User email is " . $_POST['email'];
echo "<br/>";

// to remove the post request if not available jab tak post request nhi hogi tab tak nhi chalega
if ($_POST) {
    echo "User name is " . $_POST['name'];
    echo "<br/>";
    echo "User password is " . $_POST['password'];
    echo "<br/>";
    echo "User email is " . $_POST['email'];
    echo "<br/>";
}

?>