<?php
session_start();

$fname_err = $lname_err =  $email_err = $phone_err = $pass_err = $repass_err = "";

$fn=$ln=$email =$phone =$pass =$repass ="";

if (isset($_POST['submit'])){

$fn=$_POST["fname"];
$ln=$_POST["lname"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$pass=$_POST["password"];
$repass = $_POST["repassword"];

if(empty($fn)){
  echo "<script> alert('First Name is Required'); </script>";
  $fname_err = "error";
}
else{
  if(!preg_match("/^[a-zA-Z-' ]*$/",$fn)){
   echo "<script> alert('Only Letters and white space allowed'); </script>";
   $fname_err = "error";
  }
  
}

if(empty($ln)){
  echo "<script> alert('Last Name is Required');";
  $fname_err = "error";
}
else{
  if(!preg_match("/^[a-zA-Z-' ]*$/",$ln)){
    echo "<script> alert('Only Letters and white space allowed');";
    $fname_err = "error";
  }
}

if(empty($email)){
  echo "<script> alert('Email is Required');";
  $email_err = "error";
}
else{
  if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo "<script> alert('Email is Invalid');";
    $email_err = "error";
  }
}

if(empty($phone)){
  echo "<script> alert('Phone no. is Required');";
  $phone_err = "error";
}

if(empty($pass)){
  echo "<script> alert('Password is Required');";
  $pass_err = "error";
}

if($pass != $repass){
  echo "<script> alert('Password did not match');";
  $repass_err = "error";
}

 
if($fname_err == '' && $lname_err == '' && $email_err =='' && $phone_err=='' && $pass_err == '' && $repass_err=''){
      $_SESSION['fname'] = $fn;
      $_SESSION['lname'] = $ln;
      $_SESSION['email'] = $email;
      $_SESSION['phone'] = $phone;
      $_SESSION['password'] =$pass;
      
      header("Location:validsignupform.php");
  }

} 
      
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/signupstyle.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="font-awesome.css">

    <title>Customer Sign Up</title>
</head>

  <body>

  <header class="header-area header-sticky" style="height: 6.5rem ;">
        <div class="container" >
            <div class="row" >
                <div class="col-12" >
                    <nav class="main-nav" >
                        <!-- ***** Logo Start ***** -->
                        <a href="index.php" class="logo"><img src ="assets/images/logonew.svg" style="height:9rem; width:9rem; margin-top:-1.5rem; margin-left:-5.2rem;"><span style="padding-left:-2rem;font-size:2rem; color:black;">Gro-Fresh</span><em> </em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav" style="padding-top:1.3rem;">
                            <li><a href="index.php" style="color:black;">Home</a></li>
                            <li><a href="" style="color:black;">Products</a></li>
                            <li><a href="" style="color:black;">Checkout</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="color:red";>Login</a>
                                <div class="dropdown-menu">
                                <a class="dropdown-item" href="loginform.php" style="color:black;">Customer Login</a>
                                    
                                </div>
                                </li>
                                <li><a href=""style="color:black;" >About Us</a></li>
                            
                            <li><a href="" style="color:black;">Contact</a></li> 
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <div class="d-lg-flex half" style="height:100%">
    <div class="bg order-1 order-md-2" style="background-image: url('assets/images/customer.jpg');margin-top:1% ;width:55%;"></div>
    <div class="contents order-2 order-md-1">
      <div class="container">
        <div class="row align-items-center" style= "margin-left:10% ;margin-top:7%;">
          <div class="col-md-7">
            <h3>Register</h3>
            <p class="mb-4" style="color:black">Enter User details to register</p>
            <form  method="POST">
            
            <div class="row">
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" class="form-control" placeholder="e.g. John" id="fname" required>
                  </div>    
                </div>
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" class="form-control" placeholder="e.g. Smith" id="lname" required>
                  </div>    
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group first">
                    <label for="email">Email Address</label>
                    <input type="email" name="email" class="form-control" placeholder="e.g. john@your-domain.com" id="email" required>
                  </div>    
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="phoneno">Phone Number</label>
<<<<<<< HEAD
                    <input type="text" name="phone" class="form-control" placeholder="+00 0000 000 0000" id="phoneno" required>
=======
                    <input type="text" name="phone" class="form-control" placeholder="+9100000000000" id="phoneno">
>>>>>>> b557201c54844e76d690633798e156889e9c1a30
                  </div>    
                </div>
              </div>
                
                <div class="row">
                  <div class="col-md-6">                
                    <div class="form-group last mb-3">
                      <label for="password">Password</label>
                      <input type="password" name="password" class="form-control" placeholder="Your Password" id="password" required>
                    </div>
                  </div>
                <div class="col-md-6">
              
                  <div class="form-group last mb-3">
                    <label for="re-password">Re-type Password</label>
<<<<<<< HEAD
                    <input type="password" class="form-control" placeholder="Your Password" id="re-password" required>
=======
                    <input type="password" name="repassword" class="form-control" placeholder="Your Password" id="re-password">
>>>>>>> b557201c54844e76d690633798e156889e9c1a30
                  </div>
                </div>
              </div>
              
              <div class="d-flex mb-5 mt-4 align-items-center">
                <div class="d-flex align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Creating an account means you're okay with our <a href="#">Terms and Conditions</a> and our <a href="#">Privacy Policy</a>.</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
              </div>
              </div>

              <input type="submit"  name ="submit" value="Register" class="btn px-5">
              <p><a href="loginform.php">Already registered? Back to Login</a></p>
            </form>
          </div>
        </div>
      </div>
    </div>
 </div>
    
    

   <!-- jQuery -->
<script src="assets/js/jquery-2.1.0.min.js"></script>

<!-- Bootstrap -->
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- Plugins -->
<script src="assets/js/scrollreveal.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/imgfix.min.js"></script> 
<script src="assets/js/mixitup.js"></script> 
<script src="assets/js/accordions.js"></script>

<!-- Global Init -->
<script src="assets/js/custom.js"></script>
  </body>
</html>