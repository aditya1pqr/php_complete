<form action="" method="post">
<input type="text"  name="user" placeholder="enter the name ">
<br/>
<br/>
<button name="button" value="set">set session</button>
<br/>
<br/>
<button name="button" value="display">get session</button>
<br/>
<br/>
<button name="button" value="delete">delete session</button>


</form>


<?php

session_start();
if(isset($_POST['user']))
{
  if($_POST['button']=='set'){

    $val=$_POST['user'];
    $_SESSION['user']=$val;
    
  }
  if($_POST['button']=='display'){

   
   echo $_SESSION['user'];
    
  }
  if($_POST['button']=='delete'){

    session_destroy();
    
  }
}


?>