<?php require_once('db.php') ;?>

<?php 

$login_err = "";

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: index.php");
  exit;
}


if ($_SERVER["REQUEST_METHOD"] == "POST"){

   $phone = trim(mysqli_real_escape_string($connection,$_POST['phone']));
   $password = trim(mysqli_real_escape_string($connection,$_POST['password']));

   $sql = "SELECT id, phone, password FROM user WHERE phone = ?";

   if($stmt = mysqli_prepare($connection, $sql)){
       
       mysqli_stmt_bind_param($stmt, "i", $param_phone);
       $param_phone = $phone;
    
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        
        if(mysqli_stmt_num_rows($stmt) == 1){ 
            mysqli_stmt_bind_result($stmt, $id, $phone, $hashed_password);
            if(mysqli_stmt_fetch($stmt)){
                if(password_verify($password, $hashed_password)){
                    session_start();
                    
                    $_SESSION["loggedin"] = true;
                    $_SESSION["id"] = $id;
                    $_SESSION["phone"] = $phone;                            
                    
                    header("location: index.php");
                } else{
                    $login_err = "Invalid username or password.";
                }
            }
        } else{
            $login_err = "Invalid username or password.";
        }
    } else{
        echo "Oops! Something went wrong. Please try again later.";
    }

    mysqli_stmt_close($stmt);
}
mysqli_close($connection);

}


?>