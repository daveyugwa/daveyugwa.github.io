

 <?php
    session_start();
    
    
    ?>
<?PHP
    //session starting
    // you can put 2 or PHP_SESSION_ACTIVE
    if(function_exists('session_status')){
    if (session_status()!==PHP_SESSION_ACTIVE) {
    session_start();
}
}
 else {
    session_start();
}
$msg='';


    
//validation starts here

    if ($_SERVER['REQUEST_METHOD']=='POST') {
    $con=  mysqli_connect("localhost", "root", "", "airbnb");
    $record = mysqli_query($con, "select username, password from users where (username='$_POST[username]')");
    if (mysqli_num_rows($record)>0) {
        $user = mysqli_fetch_array($record);
        // now you needd to verify password
        $pass=  md5($_POST['password'], 1);
        if($pass==$user['password']){
           // authentication starts here
            $_SESSION['id']=$user['username'];
            session_set_cookie_params(time());
            header('location:account.php');
            $_SESSION['username']=$user['username'];
$_SESSION['password']=$user['password'];
        }  else {
            $msg="invalid username or password";
        }
    }
 else {
       $msg="invalid username or password"; 
    }
    
}



?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
    </head>
    <body>
        <form method="post" action="">
            <table border="0">
                <tr>
                    <td>username:</td>
                    <td><input type="text" name="username" /></td>
                </tr>
                <tr>
                    <td>password:</td>
                    <td><input type="password" name="password" /></td>
                </tr>
                
                
                <tr>
                    <td></td>
                    <td><input type="submit" value="login" /></td>
                </tr>
            </table>
            <span style="color:red"><?PHP echo $msg; ?></span>
        </form>
    </body>
</html>