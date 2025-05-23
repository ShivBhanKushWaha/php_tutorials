<form action="" method="post">
    <input type="text" name="search" placeholder="Enter name for search">
    <br>
    <br>
    <button>Search</button>
</form>

<?php
include_once("../mysql_connection_config/config.php");

if (isset($_POST['search'])) {
    $search = $_POST['search'];
    // full name search
    // $student = $conn->prepare("select * from students where name = '$search'");

    // search with letter like only one character enter
    $student = $conn->prepare("select * from students where name like '%$search%'");
    $student->execute();
    $result = $student->fetchAll();
    // print_r($result);
    echo "<table border='1'";
    foreach ($result as $student) {
        echo "<tr>
    <td>" . $student['name'] . "</td>
    <td>" . $student['course'] . "</td>
    <td>" . $student['batch'] . "</td>
    <td>" . $student['year'] . "</td>
    <td>" . $student['city'] . "</td>
    </tr>";
    }
    echo "</table>";
}
?>