 
 
 <?php
    // Creat connection
    $Conn = mysqli_connect('localhost', 'root', '','portfolio');

    // Check the connection with the Database
    if (mysqli_connect_error()) {
        // Connection failed
        echo 'failed to connect'.mysqli_connect_error();
    }
    // else {
    //     // successfuly connected
    //     echo 'Connected';
    // }
?>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 <!-- <?php
    // Creat connection
    // $Conn = mysqli_connect('localhost', 'root', '','portfolio');

    // // Check the connection with the Database
    // if (mysqli_connect_error()) {
    //     // Connection failed
    //     echo 'failed to connect'.mysqli_connect_error();
    // }
    // else {
    //     // successfuly connected
    //     echo 'Connected';
    // }








 ?>
 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shotcut icon" type="mage/x-icon" href="img/logo (2).png"  height="0" width="100">
    <script src="https://kit.fontawesome.com/03aea6aaf2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>

</head>
<body>

<div class="popup">
        <div class="log">
            <form method="POST" action="#">
            <label for="mail"><h3>E-mail</h3></label>
            <input type="email" name="email" id="mail">
            <label for="pass"><h3>Password</h3></label>
            <input type="password" name="password" id="pass">
            <input type="submit" value="Login">
        </div>
        <div class="overlay" id="overlay"></div>
    </form>
    </div>
    </body>
    </html> -->


    