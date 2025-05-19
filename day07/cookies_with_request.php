<form action="" method="post">
    <input type="text" name="user" placeholder="Enter user name">
    <br>
    <br>
    <button name="button" value="set">Set Cokkies</button>
    <br>
    <br>
    <button name="button" value="display">display Cokkies</button>
    <br>
    <br>
    <button name="button" value="delete">delete Cokkies</button>
</form>

<?php

if (isset($_POST['button'])) {
    // to set the cookies
    if ($_POST['button'] == "set") {
        $val = $_POST['user'];
        echo $val;
        setcookie("user", $val, time() + 1000);
        echo "cookies is cet";
    }
    // to display the cookies
    if ($_POST['button'] == "display") {
        if (isset($_COOKIE['user'])) {
            echo $_COOKIE['user'];
        }
    }
    // to delete the cookies
    if ($_POST['button'] == "delete") {
        if (isset($_COOKIE['user'])) {
            setcookie("user", "", -1);
        }
    }
}
?>