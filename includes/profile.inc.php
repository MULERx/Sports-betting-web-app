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

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['send_money'])){
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

            $balance_succ = "successfully send to ".$reciver;
            
            $reciver = "";
            $amount = "";
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