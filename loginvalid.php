<?php
    session_start();
      $con=mysqli_connect("localhost","root","","vendorsnearyou");

      $un=$_POST["username"];
      $pp=$_POST["password"];

      $r=mysqli_query($con,"select * from customerregister");
      if($row=mysqli_fetch_array($r))
      {
        if($row[3]==$un)
        {
            if($row[5]==$pp)
            { 
                $_SESSION["clog"]="yes";
                $_SESSION["unm"]=$un;
                header("location:index.php");
            }
            else{
              header("Location:loginform.php?invalid_login=true");

            }
        }
        else
        {
          header("Location:loginform.php?invalid_login=true");
        }
      }
?>