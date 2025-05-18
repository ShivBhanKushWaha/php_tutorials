<?php

// 4 types se include kr skte hai file ko
// include , include_once, required, required_once

// include("./child_file.php"); // warning dega agr file nhi mili

// for($i = 0; $i < 10; $i++){
//     // include("./child_file.php");  // include ko multiple time run kr skte hai 
//     include_once("./child_file.php");  // include_once one time hi run krega aur same file ko check krega ki load hai ya nhi
// }

// require("./child_file.php"); // error dega agr file nhi mili

for($i = 0; $i < 10; $i++){
    // require("./child_file.php");  // require ko multiple time run kr skte hai 
    require_once("./child_file.php");  // require_once one time hi run krega aur same file ko check krega ki load hai ya nhi
}
?>