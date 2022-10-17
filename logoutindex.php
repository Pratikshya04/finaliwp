<?php
session_start();
<<<<<<< HEAD
unset($_SESSION['clog']);
=======
session_destroy();
>>>>>>> 625f6afebe62864017214df6db8f2a4c09b2913d
header("location:index.php");
?>