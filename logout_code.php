
<?php

session_start();
if ($_SESSION["login"] == 'true') {
include 'dbi.php';

session_destroy();

header("location:index.php");

} else {
   header("location:index.php");
}

?>