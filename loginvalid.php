<?php
    session_start();
      $con=mysqli_connect("localhost","root","","vendorsnearyou");
      $count=0;
      $un=$_POST["username"];
      $pp=$_POST["password"];
      $r=mysqli_query($con,"select * from customerregister");
<<<<<<< HEAD
      while($row=mysqli_fetch_row($r))
=======

      while($row=mysqli_fetch_array($r))
>>>>>>> b557201c54844e76d690633798e156889e9c1a30
      {
        if($row[3]==$un and $row[5]==$pp)
        {
<<<<<<< HEAD
          $count=1;
          break;
         
=======
            if($row[5]==$pp)
            { 
                $_SESSION["clog"]="yes";
                $_SESSION["un"]=$un;
                header("location:index.php");
            }
            else{
              header("location:loginform.php?invalid_login=true");

            }
        }
        else
        {
          header("location:loginform.php?invalid_login=true");
>>>>>>> b557201c54844e76d690633798e156889e9c1a30
        }
       
      }
<<<<<<< HEAD
      if($count==1)
      {
        $_SESSION["clog"]="yes";
        $_SESSION["un"]=$un;
        header("location:index.php");
      }
      else
      {
        header("location:loginform.php?invalid_login=true");
      }


=======

      
>>>>>>> b557201c54844e76d690633798e156889e9c1a30
?>