
<?php 
$activePage = basename($_SERVER['PHP_SELF'], ".php");
?>
<div
      class=" mobile top-nav d-flex flex-row p-md-2 justify-content-between align-items-center bg-dark"
    >
      <div class="p-2 logo d-none d-md-block">
        <img src="img/betting-logo.png" alt="" />
      </div>
      <div class=" logo-mobile d-block d-md-none">
          <!--  -->
     <a class="menu-button" type="button" data-trigger="#main_nav">
      <i class="bi bi-list"></i>
     </a>
    <!--  -->
        <img src="img/betting-logo-mob.png" alt="" />
      </div>
      <div class="p-2 d-flex align-items-center top-right-nav">
        <!-- main search -->
        <div class="input-group main-search">
          <input
            id="searchbar" onkeyup="search_animal()" 
            type="text"
            name="search"
            placeholder="Search here..."
            aria-describedby="button-addon5"
            class="form-control"
          />
          <div class="input-group-append">
            <button id="button-addon5" type="submit" class="btn btn-primary">
              <i class="bi bi-search"> </i>
            </button>
          </div>
        </div>
        
     
    <div class="mobsearchbar d-md-none " >
        <i class="bi bi-search" aria-hidden="true"></i>
         <div class="togglesearch">
            <input id="searchbarMob" onkeyup="search_mobo()" 
            type="text"
            name="search"
            placeholder="Search here..."/>
            <!-- <input type="button" value="Search"/> -->
        </div>
    </div>


<?php if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true):?>
        
        <div class="top-btn">
          <a class="btn-login btn btn-outline-primary" href="login.php"
            >Login</a
          >
          <a class="btn-register btn btn-primary" href="register.php"
            >Register</a
          >
        </div>
     <?php  else:?>

      <!-- when user logedin -->
      <div class="user user-main">
        <div class="user__log-in">
            <div class="balance">
              <div class="balance__info">
                <div  class="balance__info-money">

<?php
$u_id = $_SESSION['id'];
$sql = "SELECT balance FROM user WHERE id = $u_id ";
$result = mysqli_query($connection,$sql);
if (mysqli_num_rows($result) > 0){
  $row = mysqli_fetch_assoc($result);
  $balance = $row['balance'];
}else{
  $balance = "00.0";
}


?>              

                  <span  class="balance__info-money-status"><?php echo $balance;?> </span>
                  <span  class="balance__info-money-currency">ETB</span>
                </div>
                <div  class="balance__info-id">
                  <span  class="balance__info-id-text">ID:</span>
                  <span  class="balance__info-id-number"> <?php echo $u_id;?></span>
                </div>
              </div>
              <div  class="balance__button-container ">
                <a  class="balance__button-link" href="deposit.php">Deposit</a>
              </div>
              <div  class="account__dropdown">
                <div  class="account__dropdown-wrapper"></div>
                <div  class="account__dropdown-content">
                  <ul  class="account__dropdown-list">
                    <li  class="account__dropdown-item">
                      <div  class="account__dropdown-left">Balance</div>
                      <div  class="account__dropdown-right">
                        <span  class="account__dropdown-right-number account__dropdown-right-number--green"><?php echo $balance;?></span> ETB 
                      </div>
                    </li>
                    <li  class="account__dropdown-item">
                      <div  class="account__dropdown-left">POINT</div>
                      <div  class="account__dropdown-right">
                        <span  class="account__dropdown-right-number"> 0 </span>
                      </div></li>
                    <li  class="account__dropdown-item-center "> 1 POINT = 1 ETB </li>
                    </ul>
                    <div class="account__dropdown-buttons">
                      <!-- <button  class="account__dropdown-button account__dropdown-button--green">Refresh </button> -->
                      <button  class="account__dropdown-button account__dropdown-button--green">Close</button>
                    </div>
                  </div>
              </div>
            </div>
            <button class="settings__button">
               <img  alt="open settings button" class="settings__button-svg" src="img/icons/user-figure.svg">
            </button>
            <div  class="account-menu">
              <div  class="account-menu__wrapper"></div>
              <ul  class="account-menu__list">
                <li  class="account-menu__item">
                  <a class="account-menu__link" tabindex="-1" href="bet_history.php">bets history </a>
                </li>
                <li  class="account-menu__item">
                  <a  class="account-menu__link" tabindex="-1" href="deposit.php">deposit </a>
                </li>
                <li  class="account-menu__item">
                  <a  class="account-menu__link" tabindex="-1" href="deposit.php">withdraw </a>
                </li>
                
                <li class="account-menu__item">
                  <a  class="account-menu__link" tabindex="-1" href="betinfo.php">check ticket </a>
                </li>
                <li  class="account-menu__item">
                  <a  class="account-menu__link" tabindex="-1" href="profile.php?id=<?php echo $_SESSION["id"];?>">profile </a>
                </li>
                <li  class="account-menu__item account-menu__item--sign-out">
                  <a href="includes/logout.php"  class="account-menu__link" tabindex="-1">Sign out</a>
                </li>
              </ul>
            </div>
          </div>
        </div> 
        
    

     <div class="mobile">
      <div class="mb-main-header__right">
        <div  class="mb-main-header__log-in">
          <div  class="mb-account">
            <div  class="mb-account-info">
              <div  class="mb-container" role="button">
                <div  class="mb-account-info__deposit">
                  <span  class="mb-account-info__deposit-total"><?php echo $balance;?></span>
                  <span  class="mb-account-info__deposit-currency">ETB</span>
                </div>
              <div  class="mb-account-info__id">
                <span  class="mb-account-info__id-key">ID:</span>
                <span  class="mb-account-info__id-value">415347</span>
              </div>
            </div>
          <div  class="mb-account__dropdown">
            <div  class="mb-account__dropdown-wrapper"></div>
            <div  class="mb-account__dropdown-content">
              <ul  class="mb-account__dropdown-list">
                <li  class="account__dropdown-item">
                  <div class="account__dropdown-left">Balance</div>
                  <div  class="account__dropdown-right">
                    <span  class="account__dropdown-right-number account__dropdown-right-number--green"><?php echo $balance;?> </span>ETB 
                  </div>
                </li>
                <li  class="account__dropdown-item">
                  <div  class="account__dropdown-left">POINT</div>
                  <div  class="account__dropdown-right">
                    <span  class="account__dropdown-right-number"> 0 </span>
                  </div>
                </li>
                <li  class="account__dropdown-item-center"> 1 POINT = 1 ETB </li>
              </ul>
              <div  class="mb-account__dropdown-buttons">
                <!-- <button  class="account__dropdown-button account__dropdown-button--green ">Refresh </button> -->
                <button class="mb-account__dropdown-button mb-account__dropdown-button--green">Close</button>
              </div>
            </div>
          </div>
          </div>
        <!-- <span  class="mb-account__deposit-button">Deposit</span> -->
          </div>
      <a type="button" data-trigger="#profile_nav" class=" mb-more-menu-button more-menu-button--additional mb-main-header__more-menu-button">
        <img  alt="" src="img/icons/user-figure.svg">
      </a>
       </div> 
       <!-- main-header-login-end -->

    <div class="profile_nav navbar-collapse" id="profile_nav">
        <div class="offcanvas-header">
          <button  class="btn-close btn-mob-close">
            <i class="bi bi-x-lg"></i>
          </button>
        </div>
        <!-- <div class="collapse navbar-collapse flex-column" id="navbar"> -->
        <ul
          class="navbar-nav w-100 justify-content-center align-items-stretch px-3"
        >
          <li class="nav-item">
            <a class="nav-link" href="profile.php?id=<?php echo $_SESSION["id"];?>">MY PROFILE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="bet_history.php">BETS HISTORY</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="deposit.php">DEPOSITE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="deposit.php">WITHDRAW</a>
          </li>
          <a href="includes/logout.php"  class="menu__button-log-out menu__button--log-out">Sign out</a>
         
        </ul>
      </div>
    
  </div>
  </div>
    
    
    <?php endif;?>
    </div>
  </div>

    <nav class="second-nav navbar navbar-expand-md navbar-dark bg-primary ">
      <!-- <button class="navbar-toggler" type="button" data-trigger="#main_nav sticky-top">
        <span class="navbar-toggler-icon"></span>
      </button> -->
      <div class="navbar-collapse navbar-collapse-main" id="main_nav">
        <div class="offcanvas-header">
          <button  class="btn-close">
            <i class="bi bi-x-lg"></i>
          </button>
        </div>
        <!-- <div class="collapse navbar-collapse flex-column" id="navbar"> -->
        <ul
          class="navbar-nav w-100 justify-content-center align-items-stretch px-3"
        >
          <li class="nav-item <?= ($activePage == 'index') ? 'active':''; ?>">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <!-- <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              role="button"
              id="navbarDropdownMenuLink"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              sports
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#"> Upcoming events </a>
              <a class="dropdown-item" href="#"> Top Sports </a>
              <a class="dropdown-item" href="#">sport</a>
              <a class="dropdown-item" href="#"> Results </a>
            </div>
          </li> -->
          <li class="nav-item <?= ($activePage == 'deposit') ? 'active':''; ?>">
            <a class="nav-link" href="deposit.php">deposit</a>
          </li>
          <li class="nav-item <?= ($activePage == 'betinfo') ? 'active':''; ?>">
            <a class="nav-link" href="betinfo.php">check ticket</a>
          </li>
          <li class="nav-item <?= ($activePage == 'rule') ? 'active':''; ?>">
            <a class="nav-link" href="rule.php">rules</a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- Serach -->
    <script>

      function search_mobo() {
        let input = document.getElementById('searchbarMob').value
        input=input.toLowerCase();
        let x = document.getElementsByClassName('sport__bets-item');

        for (i = 0; i < x.length; i++) { 
        if (!x[i].innerHTML.toLowerCase().includes(input)) { 
          x[i].style.display="none";
        }
        else {
          x[i].style.display="list-item";                 
        }
        }
        }
      function search_animal() {
        let input = document.getElementById('searchbar').value
        input=input.toLowerCase();
        let x = document.getElementsByClassName('bet-grid__rows');


        for (i = 0; i < x.length; i++) { 
        if (!x[i].innerHTML.toLowerCase().includes(input)) { 
          x[i].style.display="none";
        }
        else {
          x[i].style.display="list-item";                 
        }
        }
        }
    
    </script>