<?php
    
    ob_start();
    session_start();
    ob_end_clean();
    
    $username=$_POST["username"];
    $password=$_POST["password"];
    
    if($username=="PKNSTAN20" AND $password=="pastibisa")
	{
        $_SESSION["username"]=$username;
        header("location:index.php");
    }else{
        header("location:index.php?login_error");
    }
?>