<?php
            // Cookies -> to store user information in website browser not server last time access and mostly frequenlty data used

// setcookie() -> it is a predefined function to set cookes
// parameter of setcookie(name,value,expire,path,domain,secure,httponly)
// path me usi page pr access rhega cookie 

// exiper me time() + second jab tak dena ho
setcookie("fruit","apple",time()+(86400));
setcookie("colors","red",time()+(86400));

print_r($_COOKIE);
print_r($_COOKIE['fruit']);

// to check that cookies is set or not 
if(isset($_COOKIE['fruit'])){
    echo "current cookie set ".$_COOKIE['fruit'];
}else{
    echo "no cookie";
}
echo "<br/>";

if(isset($_COOKIE['colors'])){
    echo "current colors cookie set ".$_COOKIE['colors'];
}else{
    echo "no colors cookie";
}

?>