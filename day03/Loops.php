<?php
                    // For loops
$table=9;
for($i = 1; $i <= 10;$i++){
    echo $table*$i;
    echo "<br/>";
}

                    // Nested for loops
for($i = 1; $i <= 10; $i++){
   for($j = 1; $j <=3; $j++){
    echo "$i $j<br/>";
   }
}

                    // While loop
$num = 0;
while($num < 10){
    echo $num;
    echo "<br/>";
    $num++;
}

$num = 10;
while($num > 00){
    echo $num;
    echo "<br/>";
    $num--;
}

                    // Do while loop ---- ek bar loop chalega hi chalega in case condition false bhi hoti hai
$num = 1;
do{
    echo "Current num value is $num <br/>";
    $num++;
}
while($num < 1)
?>