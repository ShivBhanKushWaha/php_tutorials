<?php

include_once("../mysql_connection_config/config.php");

echo "update file <br/>";

// echo $_GET['id'];

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $getStudent = $conn -> prepare("select * from students where id = '$id'");
    $getStudent -> execute();
    $student = $getStudent -> fetchAll();
    $name = $student[0]['name'];
    $course = $student[0]['course'];
    $year = $student[0]['year'];
    $batch = $student[0]['batch'];
    $city = $student[0]['city'];
}
?>
<!-- populating data in form fetching from database in php -->
<form action="" method="post">
    <input type="text" value="<?php echo $name?>" name="name">
    <br><br>
    <input type="text" value="<?php echo $course?>" name="course">
    <br><br>
    <input type="text" value="<?php echo $year?>" name="year">
    <br><br>
    <input type="text" value="<?php echo $batch?>" name="batch">
    <br><br>
    <input type="text" value="<?php echo $city?>" name="city">
    <br><br>
    <button value="<?php echo $id ?>" name="update">Update</button>
</form>

<?php

// static data ko update krna 
// $updateStudent = $conn -> prepare("update students set name = 'Govind' where id = '18'");
// echo $updateStudent = $updateStudent -> execute();

// dynamic data ko update krna 
if(isset($_POST['update'])){
    $id =  $_POST['update'];
    $name =  $_POST['name'];
    $course =  $_POST['course'];
    $batch =  $_POST['batch'];
    $year =  $_POST['year'];
    $city =  $_POST['city'];
    $updateStudent = $conn -> prepare("update students set 
    name = '$name',
    course = '$course',
    batch = '$batch',
    year = '$year',
    city = '$city'
    where id = '$id'");
    
    if($updateStudent -> execute()){
        header("location:show_data.php");
    }
    else{
        echo "update failed";
    }
}
?>