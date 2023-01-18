<?php 
session_start();

$_SESSION["giriskontrol"] = 0;
unset($_SESSION["kullanıcıAd"]);
header("Location: index.php ?i=cikis");

session_destroy();
?>