<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>mine</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
            <?php
            session_start();
            $_SESSION['message']='hey man';
            
            
            ?>
            
            
            <?php 
    
        $mysql_hostname='localhost';
        $mysql_username='root';
        $mysql_password='';
        $mysql_database='airbnb';
        function query_db($sql){
    $con=  mysqli_connect("$mysql_hostname", "$mysql_username", "$mysql_password", "$mysql_database");
    $result=mysqli_query($con, $sql);
    mysqli_close($con);
    return $result;
}
    
    ?>
    
        <?php

    
    
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  
$con=  mysqli_connect("$mysql_hostname", "$mysql_username", "$mysql_password", "$mysql_database");
    
    

    
    
// making sure both password are same
    if ($_POST['password']==$_POST['confirmpassword']) {
        
        
       $pass=  md5($_POST['password'], 1);
       $avatarpath=  addslashes($_FILES['image']['name']);
       
        
        $noofrowaffected = mysqli_query($con, "insert into users (username, password, avatar) values ('$_POST[uname]', '$pass','$avatarpath') ");
    
        
        if($noofrowaffected > 0){
        header("location:login.php");
    }
    }



// $record = mysqli_query($con, "select username, password from users where (username='$_POST[uname]')");
   // $username= mysqli_fetch_array($record);
   // if (  $username== $_POST[uname]  ) {
    //    die();
   // }
    
    
}
?>
        <link href="indexstyle.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="logo">
            <br>
            <br>
            <h1>dave airbag</h1>
        </div>
        <h1>
            my login for my airbnb
</h1>
        <form method="post">
            <div class="register_pane">
            username <br>
            <input type="text" name="uname" class="uname" required>
                    <br>
                    image <br>
                    <input type="file" name="image" accept="image/*" class="avatar" required>
                    <br>
            password<br>
            <input type="password" name="password">
            <br>
            confirm password<br>
            <input type="password" name="confirmpassword">
            <br>
            <input type="submit">
            </div>
        </form>
    </body>
</html>
