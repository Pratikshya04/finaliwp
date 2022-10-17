
    <?php
     
     session_start();

      $con=mysqli_connect("localhost","root","","vendorsnearyou");

<<<<<<< HEAD
      $fn=$_POST["fname"];
      $ln=$_POST["lname"];
      $email=$_POST["email"];
      $phone=$_POST["phone"];
      $pass=$_POST["password"];       
      if($fn)

      $pass=$_POST["password"];
      $r=mysqli_query($con,"insert into customerregister(firstname,lastname,email,phonenumber,password)values('$fn','$ln','$email','$phone','$pass') ");
        if($r)
        header("location:loginform.php?register=true");
    

=======
      $fn=$_SESSION['fname']; 
      $ln=$_SESSION['lname']; 
      $email=$_SESSION['email']; 
      $phone=$_SESSION['phone']; 
      $pass=$_SESSION['password']; 
      
     $r=mysqli_query($con,"insert into customerregister(firstname,lastname,email,phonenumber,password)values('$fn','$ln','$email','$phone','$pass') ");
         if($r)
            header("Location:loginform.php?register=true");

     unset($_SESSION['fname']);
     unset($_SESSion['lname']);
     unset($_SESSION['email']);
     unset($_SESSion['phone']);
     unset($_SESSION['password']);       
       
>>>>>>> b557201c54844e76d690633798e156889e9c1a30
    ?>

