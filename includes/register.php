<?php require_once('db.php') ;?>

<?php 

$phone = $password = $confirm_password = $user_id= "";
$phone_err = $password_err = $confirm_password_err =  "";


if($_SERVER["REQUEST_METHOD"] == "POST"){

  $dob = trim(mysqli_real_escape_string($connection, $_POST['dob']));

  $sql = "SELECT id FROM user WHERE phone = ?";
  
  // Validate username
  if($stmt = mysqli_prepare($connection, $sql)){
    mysqli_stmt_bind_param($stmt, "s", $param_phone);
    
    $param_phone = trim(mysqli_real_escape_string($connection,$_POST['phone']));
    
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        mysqli_stmt_bind_result($stmt, $id);
         mysqli_stmt_fetch($stmt);
        
        if(mysqli_stmt_num_rows($stmt) == 1){
            $phone_err = "This phone is already taken.";

        } else{
            $phone = trim(mysqli_real_escape_string($connection,$_POST['phone']));
            $user_id = random_int(100000,999999);
            
        }
    } else{
        echo "Oops! Something went wrong. Please try again later.";
    }
    mysqli_stmt_close($stmt);
 }
 
  // validate password
  if(strlen(trim($_POST["password"])) < 6){
    $password_err = "Password must have atleast 6 characters.";
  } else{
      $password = trim(mysqli_real_escape_string($connection, $_POST['password']));
  }

  // Validate confirm password
    $confirm_password = trim(mysqli_real_escape_string($connection,$_POST['confirm_password']));
    if($password != $confirm_password){
        $confirm_password_err = "Password did not match.";
    }

    



    // Check input errors before inserting in database
    if(empty($phone_err) && empty($password_err) && empty($confirm_password_err)){
        
      $sql = "INSERT INTO user (id,phone, password,DOB,user_role) VALUES (?,?, ?,'$dob','user')";
       
      if($stmt = mysqli_prepare($connection, $sql)){
          mysqli_stmt_bind_param($stmt, "sss", $param_id,$param_phone, $param_password);
          
          $param_phone = $phone;
          $param_id = $user_id;
          $param_password = password_hash($password, PASSWORD_BCRYPT);
          
          if(mysqli_stmt_execute($stmt)){
              header("location: login.php");
          } else{
              echo "Oops! Something went wrong. Please try again later.";
          }

          mysqli_stmt_close($stmt);
      }
  }

    mysqli_close($connection);



}



?>