<?php
session_start();
	
    $connection=mysqli_connect('127.0.0.1','root','','murali');

    if($connection){
        echo "connection established<br>";
    }
    else{
        echo "ERROR".mysqli_error($connection);
    }
   
/*$username = "";
$username_err ="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
        $sql = "SELECT username FROM sample WHERE username = ?";
        if($stmt = mysqli_prepare($connection, $sql)){
	
            $param_username = trim($_POST["uname"]);
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                    echo "username already taken";
                } else{
                    $username = trim($_POST["uname"]);
                   
                }
            } 
            else{
                echo "Oops! Something went wrong. Please try again later.";
            }
            mysqli_stmt_close($stmt);
        }
    
*/
        $name = $_POST['uname'];
        $mail=$_POST['email'];
        $password = $_POST['pswd'];
        $phone=$_POST['phone'];
        /*if(empty($phone)){
            echo "error";
        }
        echo $phone;*/


        //$query = "CREATE TABLE if not exists sample (username VARCHAR(20) NOT NULL, password CHAR(15) NOT NULL,mailid VARCHAR(20),phone BIGINT);";
        //$query = "CREATE TABLE sample (phone BIGINT);";
    /*if(mysqli_query($connection, $query))
    {
        //echo "<h4 style='color:green'>Table Created </h4>";
    }
    else
    {
        echo "<h4 style='color:red'>Table not Created . ".mysqli_error($connection)."</h4>";
    }*/

    $quer = "INSERT INTO mohan VALUES('$name','$mail',$phone,'$password');";
	echo $quer;
    

    if (true)
    {
	echo "hi";
	mysqli_query($connection,$quer);
	
	echo "record inserted";
        header('Location:foodmunch.html');
    }
	
    else
    {
	echo "murali";
        echo "<h4 style='color:red'>Record Not Inserted</h4><br>".mysqli_error($connection);
    }
?>

