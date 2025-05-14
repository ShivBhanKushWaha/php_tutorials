<?php

// color 
$h2_color = "skyblue";
// php with html

echo "<h1 style='color:green'>PHP with html</h1>";
echo "<h2 style='color:red'>PHP with html</h2>";
echo "<h3 style='color:blue'>PHP with html</h3>";
?>

<?php
$name = "shivbhan kushwaha";
// old method
echo "<h1 style='color:orange'>My name is " . $name . "</h1>";
// new method
echo "<h2 style='color:orange'>My name is $name</h2>";
?>

<h1 style="color: red;">
    My name is <?php echo $name ?>
</h1>

<h2 style="color: <?php echo $h2_color ?>">
    My name is <?php echo $name ?>
</h2>
<h2 style="color: <?php echo $h2_color ?>">
    My name is <?php echo $name ?>
</h2>
<h2 style="color: <?php echo $h2_color ?>">
    My name is <?php echo $name ?>
</h2>