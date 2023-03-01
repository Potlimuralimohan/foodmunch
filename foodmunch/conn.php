<?php
    $connection=mysqli_connect('127.0.0.1','root','','murali');
    if($connection){
        echo "connection established<br>";
    }
    else{
        echo "ERROR".mysqli_error($connection);
    }
    ?>
