<?php
session_start();
unset($_SESSION['login']);
setcookie('shoppingCart', null, time() - 365*24*3600, "/", null, false, true );
setcookie('name', null, time() - 365*24*3600, "/", null, false, true);
setcookie('description', null, time() - 365*24*3600, "/", null, false, true);
session_destroy();
header("location: login.php");
?>
