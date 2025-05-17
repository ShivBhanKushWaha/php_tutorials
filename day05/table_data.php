<?php
$users = [
    [1, "Shiv", "noida"],
    [2, "bhan", "agra"],
    [3, "kush", "gurgaon"],
    [4, "waha", "delhi"]
];

echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo "<tr>
        <th>S.N.</th>
        <th>Name</th>
        <th>City</th>
      </tr>";

for ($i = 0; $i < count($users); $i++) {
    echo "<tr>";
    for ($j = 0; $j < count($users[$i]); $j++) {
        echo "<td>" . $users[$i][$j] . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
