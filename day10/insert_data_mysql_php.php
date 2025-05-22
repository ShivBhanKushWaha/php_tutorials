<form method="post">
    <input type="text" placeholder="Enter name" name="name">
    <br>
    <br>
    <input type="text" placeholder="Enter course" name="course">
    <br>
    <br>
    <input type="text" placeholder="Enter batch" name="batch">
    <br>
    <br>
    <input type="text" placeholder="Enter city" name="city">
    <br>
    <br>
    <input type="text" placeholder="Enter year" name="year">
    <br>
    <br>
    <button>Add New Students</button>
</form>

<?php
if(isset($_POST['name'])){
    $name = $_POST['name'];
    $course = $_POST['course'];
    $batch = $_POST['batch'];
    $city = $_POST['city'];
    $year = $_POST['year'];
}
include_once("./config.php");
// data ko insert krne ke liye ek query prepare krni padegi uske bad execute krna hai 
$student = $conn -> prepare("INSERT into `students` (`id`,`name`,`course`,`batch`,`city`,`year`) VALUES (NULL, '$name','$course','$batch','$city','$year')");

$result = $student -> execute();
if($result){
    echo "Data is insert";
}else{
    echo "Insertion failed";
}
?>