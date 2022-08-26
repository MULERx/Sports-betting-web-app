
<?php include 'includes/header.php'?>
<?php include 'includes/navigation.php'?>

<?php include 'includes/register.php';?>


    <!-- Register -->
    <div class="container register-container " style="overflow:scroll; max-height: calc(100vh - 141px);">
      <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Register</div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="needs-validation" novalidate>
              <div class="input-boxes">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">+251</span>
                  </div>
                  <input
                    name="phone"
                    type="tel"
                    pattern="[9][0-9]{8}"
                    class="form-control phone <?php echo (!empty($phone_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $phone; ?>"
                    placeholder="Phone numbe"
                    aria-describedby="basic-addon1"
                    required
                  />
                  <div class="invalid-feedback"><?php echo $phone_err; ?>
                    Please enter your phone number.
                  </div>
                </div>
                <div class="input-box" id="show_first_password">
                  <i class="bi bi-lock"></i>
                  <input
                    name="password"
                    type="password"
                    placeholder="Enter your password"
                    required
                    class="<?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>"
                  />
                  <div class="invalid-feedback"><?php echo $password_err; ?> Please enter password.</div>
                  <div class="input-group-addon">
                    <a href="#"
                      ><i
                        class="show-pass bi bi-eye-slash"
                        aria-hidden="true"
                      ></i
                    ></a>
                  </div>
                </div>
                <div class="input-box" id="show_last_password">
                  <i class="bi bi-lock"></i>
                  <input
                    name="confirm_password"
                    type="password"
                    placeholder="Confirm password"
                    required
                    class="<?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>""
                  />
                  <div class="invalid-feedback"><?php echo $confirm_password_err; ?>
                     Please enter Confirm password.
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
                <div class="input-box">
                  <input
                    name="dob"
                    type="date"
                    name="dateofbirth"
                    id="dateofbirth"
                    required
                  />
                  <div class="invalid-feedback">
                    Please enter your birth date.
                  </div>
                </div>
                <div class="button input-box">
                  <input name="register" type="submit" value="REGISTER" />
                </div>
                <div class="text sign-up-text">
                  Already have an account?
                  <label for="flip">
                    <a href="login.php">Login now</a>
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