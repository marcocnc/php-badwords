<?php

$email = $_GET['email'];
$password = $_GET['Password'];

echo strlen( $password);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing page</title>
</head>
<body>
    <div class="container">
        <ul>

            <li>
                <?php echo $email?>
            </li>
            
            
            <li>
                <?php echo str_replace($password ,'***',$password); ?>
            </li>
        </ul>
    </div>
</body>
</html>