<?php ob_start();?>
<?php require_once('includes/db.php') ;?>
<?php session_start();?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="App/style/component/footer.css">
    <link rel="stylesheet" href="App/style/main.css" />
    <link
      rel="stylesheet"
      href="node_modules/bootstrap-icons/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="App/style/app.css" />
    <?php  
    if (basename($_SERVER['PHP_SELF']) == 'index.php'){
      // echo basename($_SERVER['PHP_SELF']);
      echo '<link rel="stylesheet" href="App/style/home.css" />';
      echo '<link rel="stylesheet" href="App/style/mobHome.css" />';
    }else if (basename($_SERVER['PHP_SELF']) == 'register.php' || basename($_SERVER['PHP_SELF']) == 'login.php' || basename($_SERVER['PHP_SELF']) == 'pass-reset.php'){
      // echo basename($_SERVER['PHP_SELF']);
      echo '<link rel="stylesheet" href="App/style/mob-ligue_nav.css" />';
      echo '<link rel="stylesheet" href="App/style/login.css" />';
      echo '<link rel="stylesheet" href="App/style/register.css" />';
    }
    else if(basename($_SERVER['PHP_SELF']) == 'deposit.php' || basename($_SERVER['PHP_SELF']) == 'betinfo.php' || basename($_SERVER['PHP_SELF']) == 'rule.php' || basename($_SERVER['PHP_SELF']) == 'profile.php'){
      echo '<link rel="stylesheet" href="App/style/mob-ligue_nav.css" />';
      echo '<link rel="stylesheet" href="App/style/mobHome.css" />';
      echo '<link rel="stylesheet" href="App/style/app.css" />';
      
    }else if(basename($_SERVER['PHP_SELF']) == 'bet_history.php'){
      echo '<link rel="stylesheet" href="App/style/mob-ligue_nav.css" />';
      echo '<link rel="stylesheet" href="App/style/bet_history.css" />';
      echo '<link rel="stylesheet" href="App/style/mobHome.css" />';
      echo '<link rel="stylesheet" href="App/style/app.css" />';
    }
    else if(basename($_SERVER['PHP_SELF']) == 'league.php'){
      echo '<link rel="stylesheet" href="App/style/main.css" />';
      echo '<link rel="stylesheet" href="App/style/app.css" />';
      echo '<linkrel="stylesheet" href="node_modules/bootstrap-icons/bootstrap-icons.css" />';
      echo '<link rel="stylesheet" href="App/style/component/footer.css">';
      echo '<link rel="stylesheet" href="App/style/home.css" />';
      echo '<link rel="stylesheet" href="App/style/mobHome.css">';
      echo '<link rel="stylesheet" href="App/style/leage.css" />';
    }
    else{
      echo "No page found".basename($_SERVER['PHP_SELF']);;
    }
    
    ?>
    
    <title>UNITY bet</title>
  </head>

  <body>
    
    