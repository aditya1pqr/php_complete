<form action="" method="post">

<input type="text" name="fileName" placeholder="enter the file name">
<br/>
<br/>
<textarea name="content"> </textarea>
<br/>
<br/>
<button>create</button>
</form>

<?php
if(isset($_POST["fileName"]))
{
    $fileName="files/".$_POST["fileName"];
    $content = $_POST["content"];
    $file = fopen($fileName, "w") or die("unable to open file");
    fwrite($file, $content);
    fclose($file);
    echo "file is created";
}




?>
