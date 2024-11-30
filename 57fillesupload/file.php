<?php
if($_FILES['fileupload'])
{
 $path = $_FILES['fileupload']['name'];
 $upload_path = "./uploads/".$path;
 move_uploaded_file($_FILES['fileupload']['name'],$upload_path)|| die("failed to uploads");
}else{
    echo "no file selected";
}

?>

// $_FILES is super global variable that it is not only to upload files but also delete the files and laso to edit or modify the filesize 