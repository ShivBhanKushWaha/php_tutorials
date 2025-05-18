<?php
// files ko access krne ke liye aur upload krne ke liye

print_r($_FILES);
// print_r($_FILES['fileUpload']);

if ($_FILES['fileUpload']) {
    $path = $_FILES['fileUpload']['name']; // to file name
    // to make a new path 
    $upload_path = "./uploads/" . $path;

    // not move error ka solution
    // Agar uploads folder exist nahi karta to error aayega to create kra dege
    if (!is_dir('./uploads')) {
        mkdir('./uploads', 0755, true);
    }

    // file ko upload krna
    // move_uploaded_file($_FILES['fileUpload']['tmp_name'], $upload_path) || die("failed to upload");
    if (move_uploaded_file($_FILES['fileUpload']['tmp_name'], $upload_path)) {
        echo "file uploaded <br/>";
    } else {
        echo "failed to upload <br/>";
    }

    echo $upload_path;
} else {
    die("no files found");
}
?>