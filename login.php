<?php include 'includes/header.php'?>
<?php include 'includes/navigation.php'?>
<?php include 'includes/login.php'?>
    <!-- login -->
    <div class="container login-container"  style="overflow:scroll; max-height: calc(100vh - 141px);">
      <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Login</div>
            <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="needs-validation"  novalidate>
              <div class="input-boxes">
                <div class="input-box">
                  <i class="bi bi-person-circle"></i>
                  <input name="phone" type="tel" placeholder="Enter your phone" pattern="[9][0-9]{8}" required />
                  <div class="invalid-feedback">Please enter your phone.</div>
                </div>
                <div class="input-box" id="show_hide_password">
                  <i class="bi bi-lock"></i>
                  <input
                    name="password"
                    type="password"
                    placeholder="Enter your password"
                    required
                    class=""
                  />
                  <div class="invalid-feedback">
                    Please enter your password.
                  </div>
                  <div class="input-group-addon">
                    <a href="#"
                      ><i
                        class="show-pass bi bi-eye-slash"
                        aria-hidden="true"
                      ></i
                    ></a>
                  </div>
                </div>
                <div class="text d-flex justify-content-between">
                  <a href="pass-reset.php">Forgot password?</a>
                  <div class="d-flex align-items-center g-1">
                    <input
                      type="checkbox"
                      value="lsRememberMe"
                      id="rememberMe"
                      class="me-1"
                    />
                    <label for="rememberMe">Remember me</label>
                  </div>
                </div>
                <div class="button input-box">
                  <input name="login" type="submit" value="LOGIN" />
                </div>
                <div class="text sign-up-text">
                  Don't have an account?
                  <label for="flip">
                    <a href="register.html">Sigup now</a>
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