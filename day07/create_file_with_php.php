<?php

// file name diya
// $fileName = "../files/dummy.txt";
// // content diya jo file me add krna ho
// $content = "this is dummy file";
// // file ko server pr open karaya w means write mode me
// $file = fopen($fileName,"w") or die("unable to create file");
// // file me content write kiya
// fwrite($file,$content);
// // file ko close kiya
// fclose($file);
// echo "file created";

if(isset($_POST['filename'])){
    $fileName = "../files/".$_POST['filename']; // if file extension dynamic add krna ho to kuchh n do
    // $fileName = "../files/".$_POST['filename'].".txt";
    $content = $_POST['content'];
    $file = fopen($fileName,"w") or die("unable to create file");
    fwrite($file,$content);
    fclose($file);
    echo "file created";
}
?>

<form action="" method="post">
    <input type="text" placeholder="enter your file name" name="filename">
    <br><br>
    <textarea name="content" id="" placeholder="Enter your content"></textarea>
    <br><br>
    <button>Create file</button>
</form>