
<html>
    <body>
        <?php
            session_start();
            $username=$_POST['uname'];
            $pwd=$_POST['pswd'];
            $conn=mysqli_connect('127.0.0.1','root','','murali');
            $sql="SELECT * FROM mohan WHERE username='$username' AND password='$pwd';";
            $res=mysqli_query($conn,$sql);
            $no_of_rows=mysqli_num_rows($res);
            if ($no_of_rows>0){
                
                header('Location:foodmunch.html');
                
            }
            else{
                header('Location:signup.html');
                
                
            }
        ?>
    </body>
</html> 
