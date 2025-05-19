<?php
// $file = "../files/abc.txt";
// // fopen me do params hoge file name  aur mode of operations
// $myfile = fopen($file,"r") or die("unable to read file");

// // read aur show krna fread me name file ka aur file ka size dena hota hai
// echo fread($myfile,filesize($file));
// fclose($myfile);

// file ke liye $_files ka use hoga
if(isset($_FILES['file'])){
    print_r($_FILES['file']);
    $file = $_FILES['file']['tmp_name'];
    $myfile = fopen($file,"r") or die("unable to read file");
    echo fread($myfile,filesize($file));
    fclose($myfile);
}
?>

<!-- dynamic fiile reader -->
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <br><br>
    <button>Read File</button>
</form>