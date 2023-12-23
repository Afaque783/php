<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    var_dump($_POST);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
<body>

<form method="post" >

    <input name="username">

    <input name="password" type="password">

    <button>Send</button>
</form>
    
</body>
</html>