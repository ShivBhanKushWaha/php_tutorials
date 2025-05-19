<?php
// get current data, set time zone, get current zone, get second,min,hour ,day,month,year etc 
// one paramter is need
// echo date('m'); // m number of month
// echo date('M'); // M name of month
// echo date('y'); // y number of year
// echo date('Y'); // M full of year
// echo date('d'); // d date
// echo date('D'); // D date of day

// ek sath nikalne ke liye 
// echo date("D M Y"); // day month year

// time ke liye
// time zone set krna padega jo apke time zone se mile
date_default_timezone_set("Asia/Kolkata");
// echo date("h"); // hour ke liye
// echo date("i"); // minutes ke liye
// echo date("s"); // second ke liye
// echo date("a"); // am/pm ke liye
// echo date("sa"); // second with pm/am ke liye

echo date("h:i:sa") // full time with am/pm
?>