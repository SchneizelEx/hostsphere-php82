<?php

    $username = $_POST["username"];
    $password = $_POST["password"];

    if($username == "admin" && $password == "admin")
    {
        header('Location: index.html');
    }
    else 
    {
        header('Location: login.html');
    }

?>