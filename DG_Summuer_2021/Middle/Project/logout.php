<?php
require_once 'library/Auth.php';

Auth::logout();

header("Location: " . $_SERVER["HTTP_REFERER"]);


//echo '<pre>';
//var_dump($_SERVER);