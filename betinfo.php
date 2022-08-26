<?php include 'includes/header.php'?>
<?php include 'includes/navigation.php'?>

    <!-- MAIN -->
    <div class="main main--center betinfo">
      <div class="main__column container-coupon">
        <div class="bet-details">
          <div  class="bet-details__header">
            <div  class="bet-details__header-left"> Bet details </div>
            <div  class="bet-details__header-right">
              <button  class="bet-details__header-button bet-details__header-icon--share">
                <span class="bet-details__header-button-icon"></span>
              </button>
            </div>
          </div>
       <div  class="bet-details__settings">
        <div  class="bet-details__row bet-details__row--header">
          <div  class="bet-details__row-left">
            <div class="bet-details__package-id">
              <form  class="bet-details__package-id-bottom" action="" method="POST">
                <input name="tickate" class="bet-details__package-id-input auth__input" id="bet-details-package-id" name="" type="text">
                <button name="checktickate"  class="bet-details__button bet-details__button--check"> Check </button>
              </form>
            </div>
          </div>
        </div>
       </div>

<?php  

$val_money = $val_odd = $val_win = $win_status = 00;
$err = "";

if(isset($_POST['checktickate'])){


    $tickate = intval(trim($_POST['tickate']));
 
    $sql = "SELECT bet_money,total_odd,possible_win,status FROM betslip WHERE bet_id = ?";
 
    if($stmt = mysqli_prepare($connection, $sql)){
        
        mysqli_stmt_bind_param($stmt, "i", $param_tickate);
        $param_tickate = $tickate;
     
     if(mysqli_stmt_execute($stmt)){
         mysqli_stmt_store_result($stmt);
         if(mysqli_stmt_num_rows($stmt) == 1){ 
             mysqli_stmt_bind_result($stmt, $bet_money, $total_odd, $possible_win,$status);
             if(mysqli_stmt_fetch($stmt)){
                 $val_money = $bet_money;
                 $val_odd = $total_odd;
                 $val_win = $possible_win;
                 $win_status = $status;
             }
         } else{
          $err = "Tickate number not exists";
         }
     } else{
         echo "Oops! Something went wrong. Please try again later.";
     }
 
     mysqli_stmt_close($stmt);
 }
 mysqli_close($connection);
 
 
}
// $tickate = intval(trim($_POST['tickate']));
 
//     $sql = "SELECT * FROM betslip WHERE bet_id = $tickate";
//     $result = mysqli_query($connection,$sql);
//     $row = mysqli_fetch_array($result);
//     echo $row['bet_money'];

?>


        <div class="sport__bets-total-information">
            <div style="padding-right: 200px; color: red;"><?php echo $err; ?></div>
            <div  class="sport__bets-total-information-cell sport__bets-total-information-cell--amount">
              <div  class="sport__bets-total-information-cell-top">Deposit</div>
              <div class="sport__bets-total-information-cell-bottom"><?php echo $val_money." "."ETB"; ?></div>
            </div>
            <div  class="sport__bets-total-information-cell">
              <div  class="sport__bets-total-information-cell-top">Total odds</div>
              <div  class="sport__bets-total-information-cell-bottom"><?php echo $val_odd; ?></div>
            </div>
            <div  class="sport__bets-total-information-cell">
              <div  class="sport__bets-total-information-cell-top">Win</div>
              <div _ngcontent-c8="" class="sport__bets-total-information-cell-bottom"> <?php echo $win_status == 1 || $win_status == 12 ? $val_win." "."ETB" : " 0.0"." ETB"; ?> </div>
            </div>
        </div>
        <!--  -->

        </div> 
      </div>
    </div>
    <!-- MOBILE -->
    <div class="mobile bet-details">
      <div class="bet-details__header">
        <div class="bet-details__header-left"> Bet Details </div>
        <div class="bet-details__header-right">
          <button class="bet-details__header-button">
            <span class="bet-details__header-button-icon"></span>
          </button>
        </div>
      </div>
      <div class="bet-details__settings">
        <div class="bet-details__row">
          <div class="bet-details__package-id">
            <div class="bet-details__package-id-top">
              <label ]class="bet-details__package-id-label" for="bet-details-package-id">Ticket Number</label>
            </div>
            <form class="bet-details__package-id-bottom" action="" method="POST">
              <input name="tickate" class="bet-details__package-id-input auth__input ng-untouched ng-pristine ng-valid" id="bet-details-package-id" name="" type="text">
              <button name="checktickate" class="bet-details__button bet-details__button--check"> Check </button>
            </form>
          </div>
        </div>
       <!--  -->
       <div >
        <div _ngcontent-c9="" class="bet-details__row">
          <div _ngcontent-c9="" class="bet-details__row-left">Deposit</div>
          <div _ngcontent-c9="" class="bet-details__row-right"><?php echo $val_money." "."ETB"; ?></div>
        </div>
        <div _ngcontent-c9="" class="bet-details__row">
          <div _ngcontent-c9="" class="bet-details__row-left">Total Odds:</div>
          <div _ngcontent-c9="" class="bet-details__row-right"><?php echo $val_odd; ?></div>
        </div>
        <div _ngcontent-c9="" class="bet-details__row">
          <span _ngcontent-c9="" class="bets-history-more__info-total-key bet-details__row-left"> Win amount: </span>
          <span _ngcontent-c9="" class="bets-history-more__info-total-value bet-details__row-right"> <?php echo $win_status == 1 || $win_status == 12? $val_win." "."ETB" : " 0.0"." ETB"; ?> </span>
        </div>
      </div>
        <!--  -->
        <div style=" color: red; font-size: 14px"><?php echo $err; ?></div>
      </div>
    </div>


    <?php include 'includes/footer.php' ?>