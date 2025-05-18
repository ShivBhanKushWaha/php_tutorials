<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="" method="post"> -->
    <!-- <form action="" method="get"> -->
    <form action="" method="">
        <!-- onclick pr call nhi hoga kyki php server side run hoti hai aur html se integrated nhi hoti hai -->
        <button name="button" value="btn-1">Call function</button>
    </form>
</body>
</html>

<?php

// both get and post method ke liye request use kro 
// if(isset($_POST['button'])){
// btn_click_test();
// }
// if(isset($_GET['button'])){
// btn_click_test();
// }
if(isset($_REQUEST['button'])){
btn_click_test();
}

function btn_click_test(){
    echo "Function called on button click";
}
?>