<?php include 'includes/header.php'?>
<?php include 'includes/navigation.php'?>

<!-- MAIN  -->
<main class="main main--center betinfo">
  <div class="main__column main__column--bet-history">
    <div class="auth auth--bet-history">
      <header class="auth__header">My Bets</header>
      <div class="auth__container">
        <div class="bet-history">
          <div class="bet-history__table">
            <div class="bet-history__row bet-history__row--header">
              <div class="bet-history__cell-main bet-history__cell--date">Date</div>
              <div class="bet-history__cell-main bet-history__cell--type">Tickate ID</div>
              <div class="bet-history__cell-main bet-history__cell--amount">
                Amount
              </div>

              <div class="bet-history__cell-main bet-history__cell--odd">Odd</div>

              <div class="bet-history__cell-main bet-history__cell--payout">
                Payout
              </div>
              <div class="bet-history__cell-main bet-history__cell--status">
                Status
              </div>
            </div>

            <div class="bet-history__rows">
   <?php
           $noRec = "";
       if (isset($_SESSION["loggedin"])){
              $id = $_SESSION['id'];

              $sql = "SELECT * FROM betslip WHERE user_id = $id ORDER BY bet_date DESC";
              $result = mysqli_query($connection,$sql);

              $row = mysqli_num_rows($result);
              if(!$row){
                $noRec =  "NO HISTORY";
              }
          ?>
          <div style="background-color: red; color: white;"> <?php echo $noRec; ?> </div>
          <?php
              while($row = mysqli_fetch_assoc($result)){
                 $bet_id = $row['bet_id'];
                 $bet_date = $row['bet_date'];
                 $bet_money = $row['bet_money'];
                 $bet_odd = $row['total_odd'];
                 $possible_win = $row['possible_win'];
                 $status = $row['status'];
                 
                 ?>
             
               
              <div tabindex="0">
                <div  class="bet-history__row-bet bet-history__row--body bet-history__row--lose" >
                  <div class="bet-history__cell-main bet-history__cell--date">
                    <div   class="bet-history__cell-bottom bet-history__cell-bottom--bet-date"><?php echo $bet_date; ?>
                    </div>
                  </div>
                  <div class="bet-history__cell-main bet-history__cell--type">
                    <div class="bet-history__cell-top bet-history__cell-top--bet-type">
                      <span> <?php echo $bet_id; ?> </span>
                    </div>
                  </div>
                  <div class="bet-history__cell-main bet-history__cell--amount">
                    <div class="bet-history__cell-top bet-history__cell-top--amount"> <?php echo  $bet_money; ?> </div>
                  </div>
                  <div class="bet-history__cell-main bet-history__cell--odd">
                    <div class="bet-history__cell-bottom bet-history__cell-bottom--odd" >x <?php echo $bet_odd; ?></div>
                  </div>
                  <div class="bet-history__cell-main bet-history__cell--payout" ><?php  if($status == 1){ echo $possible_win; }else if($status == 12){ echo $possible_win; } else{echo "0.0";}  ?></div>
                  <div class="bet-history__cell-main bet-history__cell--status">
                    <div class="bet-history__cell-bet-status"><i class="<?php  if($status == 1){ echo "bi bi-hand-thumbs-up-fill"; }else if($status == 12){ echo "bi bi-clock"; } else{echo "bi bi-hand-thumbs-down-fill";}  ?> "></i></div>
                    <!-- <div class="bet-history__cell-bet-status"><i class="bi bi-hand-thumbs-down-fill"></i></i></div> -->
                  </div>
                </div>
              </div>

              <?php } ?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<!-- MOBILE -->

<div class="mobile main-for-bet-history">
  <div class="bet-history">
    <div class="bet-history__table">
      <div class="bet-history__row bet-history__row--header">
        <div class="bet-history__cell bet-history__cell--type-date">
          ID/Date
        </div>
        <div class="bet-history__cell bet-history__cell--amount-odd">
          Amount/odd
        </div>
        <div class="bet-history__cell bet-history__cell--payout">Payout</div>
        <div class="bet-history__cell bet-history__cell--status">Status</div>
      </div>
      <div class="account-table__rows" scrolltracker="">

      <?php

      
                  $sql = "SELECT * FROM betslip WHERE user_id = $id ORDER BY bet_date DESC";
                  $result = mysqli_query($connection,$sql);

                  $row = mysqli_num_rows($result);
              while($row = mysqli_fetch_assoc($result)){
                 $bet_date = $row['bet_date'];
                 $bet_money = $row['bet_money'];
                 $bet_odd = $row['total_odd'];
                 $possible_win = $row['possible_win'];
                 $status = $row['status'];
                 
                 ?>

        <div class="account-table__row" tabindex="0">
          <div   class="bet-history__row-mob bet-history__row--body bet-history__row--lose"  >
            <div class="bet-history__cell bet-history__cell--type-date">
              <div  class="bet-history__cell-top bet-history__cell-top--bet-type"
              >
              <?php echo $bet_id; ?>
              </div>
              <div
                class="bet-history__cell-bottom bet-history__cell-bottom--bet-date"
              >
              <?php echo $bet_date; ?>
              </div>
            </div>
            <div class="bet-history__cell bet-history__cell--amount-odd">
              <div class="bet-history__cell-top bet-history__cell-top--amount">
              <?php echo $bet_money." &nbsp;"." &nbsp;"; ?>
              </div>
              <div
                class="bet-history__cell-bottom bet-history__cell-bottom--odd"
              >
                x <?php echo $bet_odd; ?>
              </div>
            </div>
            <div class="bet-history__cell bet-history__cell--payout"><?php  if($status == 1){ echo $possible_win; }else if($status == 12){ echo $possible_win; } else{echo "0.0";}  ?></div>
            <div class="bet-history__cell bet-history__cell--status">
              <div class="bet-history__cell-bet-status"><i class="<?php  if($status == 1){ echo "bi bi-hand-thumbs-up-fill"; }else if($status == 12){ echo "bi bi-clock"; } else{echo "bi bi-hand-thumbs-down-fill";}  ?> "></i></div>
            </div>
          </div>
        </div>
        
<?php
              }
    }else{
      header("location:index.php");
      }

?>
        
      </div>
    </div>
  </div>
</div>

<?php include 'includes/footer.php'?>
