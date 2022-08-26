<?php include 'includes/header.php'?>
<?php include 'includes/navigation.php'?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
 $locl_phone = trim(mysqli_real_escape_string($connection,$_POST['phone']));
  $sql = "SELECT id, phone, password FROM user WHERE phone = ?";

  if($stmt = mysqli_prepare($connection, $sql)){
       
    mysqli_stmt_bind_param($stmt, "i", $param_phone);
    $param_phone = $locl_phone;
 
 if(mysqli_stmt_execute($stmt)){
     mysqli_stmt_store_result($stmt);
     
     if(mysqli_stmt_num_rows($stmt) == 1){ 
         mysqli_stmt_bind_result($stmt, $id, $phone, $hashed_password);
         if(mysqli_stmt_fetch($stmt)){
             if($phone == $locl_phone){
               session_start();
               $_SESSION['valid_phone'] = true;
               header("location: pass-reset.php") ;                                           
             } else{
                 $login_err = "This phone is not registerd.";
             }
         }
     } else{
         $login_err = "This phone not registerd.";
     }
 } else{
     echo "Oops! Something went wrong. Please try again later.";
 }

 mysqli_stmt_close($stmt);
}
mysqli_close($connection);

}





?>
    <!-- login -->
    <div class="container login-container"  style="overflow:scroll; max-height: calc(100vh - 141px);">
      <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">FORGOT PASSWORD</div>
            <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="needs-validation"  novalidate>
              <div class="input-boxes">
                <div class="input-box">
                  <i class="bi bi-person-circle"></i>
                  <input name="phone" type="text" placeholder="Enter your phone" required />
                  <div class="invalid-feedback">Please enter your phone.</div>
                </div>
                
                <div class="button input-box">
                  <input name="login" type="submit" value="RESTORE" />
                </div>
                <div class="text sign-up-text">
                  Don't have an account?
                  <label for="flip">
                    <a href="register.php">Sigup now</a>
                  </label>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!--  -->



    <?php include 'includes/footer.php' ?>