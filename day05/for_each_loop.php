<?php
// array ke element ko traverse krne ke liye with out count the length of array
// syntax foreach(array ka name  fir "as" fir ek variable)
$users = ["Shivbhan","Kushwaha","Govind","Ram","Ravendra","Awdesh"];

foreach ($users as $user){
    // govind ko print nhi krega
    if($user == "Govind"){
        continue;
    }
    echo "<h4>$user</h4>";
    // echo "<br/>";
    // Ram ko print krega but age ka print nhi krega 
    if($user == "Ram"){
        break;
    }
}

// second way to for each loop
foreach($users as $user):
    echo $user;
    echo "<br/>";
endforeach;