<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>call function on click</title>
</head>
<body>
    <form action="" method='post'>

    <button name="button">click to call the function</button>
    </form>
</body>
</html>

<?php
if(isset($_POST['button']))
{
    btnclicked(); 
}

function btnclicked()
{
    echo "button clicked";
}

?>