<?php include 'includes/header.php'?>

<style>

/* Set a style for all buttons */
.button-btn {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Float cancel and delete buttons and add an equal width */
.cancelbtn, .deletebtn {
  float: left;
  width: 50%;
}

/* Add a color to the cancel button */
.cancelbtn {
  background-color: #ccc;
  color: black;
}

/* Add a color to the delete button */
.deletebtn {
  background-color: #f44336;
}

/* Add padding and center-align text to the container */
.container {
  padding: 16px;
  text-align: center;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgba(0, 0, 0, 0.356);
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
/* The Modal Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and delete button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .deletebtn {
     width: 100%;
  }
}
</style>

<?php include 'includes/navigation.php'?>

<?php
$phone = $id = $mach_er = $balance_er = $balance_succ = $success ="";


if (isset($_SESSION["loggedin"])){
  $id = $_SESSION['id'];

  $sql = "SELECT id, phone,password,balance FROM user WHERE id = ?";

  if($stmt = mysqli_prepare($connection, $sql)){
       
    mysqli_stmt_bind_param($stmt, "i", $param_id);
    $param_id = $id;
 
  if(mysqli_stmt_execute($stmt)){
     mysqli_stmt_store_result($stmt);
     
     if(mysqli_stmt_num_rows($stmt) == 1){ 
         mysqli_stmt_bind_result($stmt, $id, $phone,$hashed_password,$user_balance);
         mysqli_stmt_fetch($stmt);
     } else{
         header("location:index.php");
     }
 } else{
     echo "Oops! Something went wrong. Please try again later.";
 }

 mysqli_stmt_close($stmt);
}

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Change_Password'])){
  $oldPass = trim(mysqli_real_escape_string($connection,$_POST['oldPass']));
  $newPass = trim(mysqli_real_escape_string($connection,$_POST['newPass1']));
  $newPassConfirm = trim(mysqli_real_escape_string($connection,$_POST['newPass2']));
  if (password_verify($oldPass,$hashed_password)){
    if(strlen($newPass) > 6){ 
      if($newPass == $newPassConfirm){
        $newPass = password_hash($newPass, PASSWORD_BCRYPT);
        $sql = "UPDATE user SET password = ? WHERE id = ?";
        $stmt = mysqli_prepare($connection, $sql);
        mysqli_stmt_bind_param($stmt, "ss", $param_Newpassword, $param_id);
              
        $param_Newpassword = $newPass;
        $param_id = $id;
        mysqli_stmt_execute($stmt);
        $success ="password has been successfully changed";
        session_destroy();
        header("location: login.php");
      } else{
        $mach_er = "your new Passwords do not match.";
      } 
    }else{
      $mach_er = "Password must have atleast 6 characters.";
    } 
  }else{
    $mach_er = "Passwords do not match.";
  }
}

if(isset($_POST['send_money'])){
  if ($balance > 20){
    $reciver = trim(mysqli_real_escape_string($connection,$_POST['reciver']));
    $amount = trim(mysqli_real_escape_string($connection,$_POST['amount']));

    if(!empty($reciver)){
      if(!empty($amount)){
        if($user_balance >= 20){
              $Bsql = "UPDATE user SET balance = balance + $amount WHERE phone = $reciver ";
              $check = mysqli_query($connection,$Bsql); 

          if ($check){
            $sql = "UPDATE user SET balance = balance - $amount WHERE id = $id";
            mysqli_query($connection,$sql);
            // echo '<script>alert("successfully send to");</script>';
            // header("Location:profile.php");
            // $balance_succ = "successfully send to ".$reciver;
            echo "<script>
                  alert('successfully send to $reciver');
                  window.location.href='profile.php';
                  </script>";
            
          }else{
            $balance_er = "Reciver phone not exists";
          }
        
        }else{
          $balance_er = "your balance is under 20ETB";
        }
      }else{
        $balance_er = "please enter amount.";
      }

    }else{
      $balance_er = "please enter reciver phone number.";
    }
  }else{
    $balance_er = "Your balance is under 20 ETB.";
  }
  
}
// mysqli_close($connection);
}else{
  header("location:index.php");
}




?>
    <!-- MAIN -->
<div  class="main main--center main-profile">
  <div  class="main__column container-user">
    <div >
      <header  class="auth__header"> My account </header>
      <div  class="my-account"><div  class="my-account__row my-account__row--first">
        <div  class="my-account__column my-account__column--for-image">
          <div  class="my-account__my-image">
            <div  class="my-account__my-image-container">
              <img  alt="user image" class="my-account__my-image-img" src="img/profavatart.png">
            </div>
          </div>
        </div>
        <div  class="my-account__column my-account__column--inputs">
          <div  class="auth__row auth__row--account-title-margin my-account__column-title--change-margin">
            <div  class="my-account__column-title"> Personal Info </div>
          </div>
          <div  class="auth__row auth__row--inputs">
            <input  class="auth__input ng-untouched ng-pristine"  id="f_name" type="text" placeholder="First name">
          </div>
          <div  class="auth__row auth__row--inputs">
            <input  class="auth__input ng-untouched ng-pristine"  id="l_name" type="text" placeholder="Last name">
          </div>
          <div  class="auth__row auth__row--inputs">
            <input  class="auth__input ng-untouched ng-pristine" value="<?php echo $phone; ?>"  id="phone" type="text" placeholder="Phone">
          </div>
          <div class="user-id">ID: <?php echo $id;?></div>
        </div>
        <form  style="width: 32%" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <div  class="my-account__column my-account__column--inputs modification-form" style="width: 100%">
        <div  class="auth__row auth__row--inputs">
          <div >
            <div class="my-account__column-title my-account__column-title-mb"> Change Password </div>
          </div>
          <input  class="auth__input " name="oldPass" type="password" placeholder="Old password">
        </div>
        <div  class="auth__row auth__row--inputs">
          <input  class="auth__input "  id="password" name="newPass1" type="password" placeholder="New password">
        </div>
        <div  class="auth__row auth__row--inputs">
          <input  class="auth__input "  id="newPass2" name="newPass2" type="password" placeholder="Confirm password">
        </div>
        <div >
          <span  class="cheangeMsg"> <?php echo $mach_er;?> </span>
          <span  class="cheangeMsgsuccess"> <?php echo $success ;?> </span>
        </div>
        <!-- <div ><span  class="CPError"></span></div>  -->
      </div>
      <div  class="auth__row auth__row--my-account-button-large-margin">
        <button  class="auth__button" type="submit" name="Change_Password" >Change password </button>
      </div>
    </form>
  </div>
  <form  style="width: 32%" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <div  class="my-account__column my-account__column--inputs modification-form" style="width: 100%">
        <div  class="auth__row auth__row--inputs">
          <div >
            <div class="my-account__column-title my-account__column-title-mb"> Send money to player </div>
          </div>
          <input  class="auth__input " name="reciver" type="number" pattern="[9][0-9]{8}" value="<?php echo $reciver; ?>" placeholder="Reciver number">
        </div>
        <div  class="auth__row auth__row--inputs">
          <input  class="auth__input "  id="password" name="amount" type="number" pattern="[9][0-9]{8}" value="<?php echo $amount; ?>" placeholder="amount">
        </div>
        <div >
          <span  class="cheangeMsg"> <?php echo $balance_er;?> </span>
          <span  class="cheangeMsgsuccess"> <?php echo $balance_succ;?> </span>
        </div>
        <!-- <div ><span  class="CPError"></span></div>  -->
      </div>
      <div  class="auth__row auth__row--my-account-button-large-margin">
        <button  class="auth__button" type="submit" name="send_money" >Send</button>
      </div>
    </form>

<!-- delete php -->
<?php
$errD = " ";
if(isset($_POST['deleteAccount'])){
  $id = $_SESSION['id'];
  $sql = "DELETE FROM user WHERE id = $id";
  
  if(mysqli_query($connection,$sql)){
    header("Location: index.php");
    session_destroy();
  }else{
    $errD =  "Error deleting user" . mysqli_error($conn);
  }
}

?>
   <span  class="cheangeMsg"> <?php echo $errD;?> </span>
  <div  class="my-account__column my-account__column--phone-information">
    <button   onclick="document.getElementById('id01').style.display='block'" class="my-account__phone-information my-account__phone-information--big-top-padding cursor_pointer">Delete Account</button>
  </div>
</div>
</div>
</div>
</div>

<!-- delete modal -->
<!-- delete modal -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
  <form class="modal-content" action="" method="POST"  >
    <div class="container">
      <h1>Delete Account</h1>
      <p>Are you sure you want to delete your account?</p>
    
      <form action="" method="POST" class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn button-btn">Cancel</button>
        <button type="submit" name="deleteAccount"  onclick="document.getElementById('id01').style.display='none'" class="deletebtn button-btn">Delete</button>
      </form>
    </div>
  </form>
</div>
<!--  -->
<!--  -->

    <!-- MOBILE -->
<div class="mobile">
<di  class="mob-main main--auth">
  <div  class="auth my-account">
    <header  class="auth__header"> My account </header>
    <div  class="auth__form">
      <div  class="auth__form-container">
        <div  class="my-account__container my-account__container--personal-info">
          <div  class="auth__row auth__row-my-account-title">Personal info</div>
          <div  class="auth__row auth__row--inputs">
            <input  class="auth__input " id="f_name" type="text" placeholder="First name">
          </div>
          <div  class="auth__row auth__row--inputs">
            <input  class="auth__input"  type="text" placeholder="Last name">
          </div>
          <div  class="auth__row auth__row--inputs">
            <input  class="auth__input" value="<?php echo $phone; ?>"  type="text" placeholder="Phone">
          </div>
          <div class="user-id">ID: <?php echo $id;?></div>
        </div>
        <form  novalidate="" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
          <div  class="my-account__container">
            <div  class="auth__row auth__row-my-account-title">Change password</div>
            <div  class="auth__row auth__row--inputs">
              <input  class="auth__input " formcontrolname="oldPass" name="oldPass" type="password" placeholder="Old password">
          </div>
          <div  class="auth__row auth__row--inputs">
            <input  class="auth__input " formcontrolname="newPass1" id="password" name="newPass1" type="password" placeholder="New password">
          </div>
          <div  class="auth__row auth__row--inputs">
            <input  class="auth__input " formcontrolname="newPass2" id="newPass2" name="newPass2" type="password" placeholder="Confirm password">
          </div>
          <div >
          <span  class="cheangeMsg"> <?php echo $mach_er;?> </span>
          <span  class="cheangeMsgsuccess"> <?php echo $success;?> </span>
          </div>
          <!-- <div ><span  class="CPError"></span></div> -->
        </div>
        <div  class="auth__row auth__row--my-account-button-large-margin">
          <button  class="auth__button" type="submit" name="Change_Password" >Change password</button>
        </div>
      </form>
      <form  novalidate="" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
          <div  class="my-account__container">
            <div  class="auth__row auth__row-my-account-title">SEND MONEY TO PLAYER</div>
            <div  class="auth__row auth__row--inputs">
              <input  class="auth__input " formcontrolname="oldPass" name="reciver" type="number" value="<?php echo $reciver; ?>" placeholder="Reciver number">
          </div>
          <div  class="auth__row auth__row--inputs">
            <input  class="auth__input " formcontrolname="newPass1" id="password" name="amount" type="number" value="<?php echo $amount; ?>" placeholder="amount">
          </div>
          <div >
          <span  class="cheangeMsg">  <?php echo $balance_er;?></span>
          <span  class="cheangeMsgsuccess"> <?php echo $balance_succ;?> </span>
          </div>
          <!-- <div ><span  class="CPError"></span></div> -->
        </div>
        <div  class="auth__row auth__row--my-account-button-large-margin">
          <button  class="auth__button" type="submit" name="send_money" >send</button>
        </div>
      </form>
      <div  class="my-account__container my-account__container--phone-number">
        <!-- <div  class="auth__row auth__row-my-account-title"> Primary number </div>
        <div  class="auth__row auth__row--inputs"><div  class="auth__row-input-container">
          <input  class="auth__input"  type="text">
        </div>
      </div>
      <div  class="auth__row auth__row-my-account-phone-number-description"> If You want to change Your number, please contact via chat </div> -->
      <span  class="cheangeMsg"> <?php echo $errD;?> </span>
      <button onclick="document.getElementById('id01').style.display='block'"  class="auth__row auth__row-my-account-phone-number-description"> Delete Account </button>
    </div>
  </div>
</div>
</div>
</di>    
</div>


<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

    <?php include 'includes/footer.php' ?>