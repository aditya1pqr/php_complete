<form action="" method="post">
<input type="text"  name="user" placeholder="enter the name ">
<br/>
<br/>
<button name="button" value="set">set</button>
<br/>
<br/>
<button name="button" value="display">display</button>
<br/>
<br/>
<button name="button" value="delete">delete</button>


</form>

<?php

if(isset($_POST['user']))
{
    if($_POST['button']=="set")
    {
        $user = $_POST['user'];
        setcookie("user",$user);
        echo "cookie is set";
       
    }if($_POST['button']=="display")
    {
        echo $_COOKIE['user'];
 
       
    }if($_POST['button']=="delete")
    {
        $user = $_POST['user'];
        setcookie("user",null,-1);
        echo "cookie is delted";
       
    }
}


?>