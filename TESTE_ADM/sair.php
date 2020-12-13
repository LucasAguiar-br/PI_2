<?php

session_start();

if($_SESSION['email']){
    unset($_SESSION['email']);
    header("Location: index.html");
}
if($_SESSION['admin']){
    unset($_SESSION['admin']);
    header("Location: login.html");
}
