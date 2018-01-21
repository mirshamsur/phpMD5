<?php
include './db.php';
if(isset ($_POST ["sub"]))
{
    $username=$_POST["txtuser"];
    $password = md5($_POST["txtpass"]);
    $query="select * from login where username ='$username' and password='$password'";
    $exe_query= mysqli_query($conn, $query);
    $found_num_rows = mysqli_num_rows($exe_query);
    if ($found_num_rows==1)
    {
        echo 'Welcome to world of PHP & MySQL learning';

    }else{
     echo 'Login Failed';
     }
    }
  ?> 