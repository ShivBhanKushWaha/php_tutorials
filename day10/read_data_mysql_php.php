<?php
// read data from mysql in php
include_once("../mysql_connection_config/config.php");

$getStudents = $conn->prepare("SELECT * FROM students");
$getStudents->execute();
$students = $getStudents->fetchAll();
// print_r($students);

echo "<table border='1'>";
echo "<th>Name</th>";
echo "<th>Course</th>";
echo "<th>Batch</th>";
echo "<th>Year</th>";
echo "<th>City</th>";
foreach ($students as $student) {
    echo "<tr>
    <td>" . $student['name'] . "</td>
    <td>" . $student['course'] . "</td>
    <td>" . $student['batch'] . "</td>
    <td>" . $student['year'] . "</td>
    <td>" . $student['city'] . "</td>
    </tr>";
}
echo "</table>";
