<?php

                    // Get Request

echo "This is php login form";

// jo data me name vha se pass hoga vo aise get kr skte hai $_GET['name']
// if request nhi hai to error ayega
echo "user name is ".$_GET['user_name'];
echo "<br/>";
echo "user password is ".$_GET['user_password'];

// to remove the get request if not available 
if ($_GET) {
    echo "user name is " . $_GET['user_name'];
    echo "<br/>";
    echo "user password is " . $_GET['user_password'];
}



?>