<?php
// Sessions are server-side, meaning the data is stored on the web server, while cookies are client-side, stored on the user's browser -->
// session is secure more than cookies 
// session has more capacity to store the data than cookies
// session is lower speed than cookies 

session_start();

// Set session variables
$_SESSION['colors'] = 'blue';
$_SESSION['fruits'] = 'apple';

// Display all session variables
print_r($_SESSION);               // Shows both 'colors' and 'fruits'
echo $_SESSION['fruits'];         // apple
echo $_SESSION['colors'];         // blue

// Destroy session
session_destroy();

// Optionally clear the $_SESSION array manually
$_SESSION = []; // or use session_unset();

// After session_destroy, this will still output data from current $_SESSION unless manually cleared
print_r($_SESSION);               // Now empty
echo $_SESSION['fruits'];         // Notice: Undefined index if you cleared $_SESSION
echo $_SESSION['colors'];         // Notice: Undefined index if you cleared $_SESSION
?>
