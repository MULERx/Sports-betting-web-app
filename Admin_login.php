<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Admin Login Page</title>
    <link rel="stylesheet" href="App/style/main.css" />
    <link
      rel="stylesheet"
      href="node_modules/bootstrap-icons/bootstrap-icons.css"
    />
    <!-- Bootstrap core CSS -->
<link href="app/style/signin.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    
<main class="form-signin">
<?php 
include 'includes/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
  $user = trim(mysqli_real_escape_string($connection,$_POST['Admin_U']));
  $Admin_password = trim(mysqli_real_escape_string($connection,$_POST['Admin_Pass']));

  $sql = "SELECT Admin_Name,Password FROM admin WHERE Admin_Name = ?";

  if($stmt = mysqli_prepare($connection, $sql)){
      
      mysqli_stmt_bind_param($stmt, "i", $admin);
      $admin = $user;
   
   if(mysqli_stmt_execute($stmt)){
       mysqli_stmt_store_result($stmt);
       
       if(mysqli_stmt_num_rows($stmt) == 1){ 
           mysqli_stmt_bind_result($stmt, $Admin_Name, $Password);
           if(mysqli_stmt_fetch($stmt)){
               if($Password == $Admin_password){
                   session_start();
                   
                   $_SESSION["AdminLoggedin"] = true;
                   $_SESSION["Admin"] = $Admin_Name;                         
                   
                   header("location: Admin/");
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

  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
    <img class="mb-4" src="img/betting-logo-mob.png" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">LOGIN</h1>
    <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>
    <div class="form-floating">
      <input name="Admin_U" type="text" class="form-control" id="floatingInput" placeholder="username">
      <label for="floatingInput">UserName</label>
    </div>
    <div class="form-floating">
      <input name="Admin_Pass" type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy;Unity Betting PLC-2022</p>
  </form>
</main>


    
  </body>
</html>
