<?php

setcookie("aditya", "singh", time() + 3600, "/");  // setcookie(name, value , expire, path, domain, secure, httponly) is synatx for storig the cookie

if(isset($_COOKIE["aditya"]))
{
    echo "Cookie is set";
}else{
    echo "Cookie is not set";
}

?>