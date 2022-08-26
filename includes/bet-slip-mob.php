
<div class="bet-slip  active">
  <div class="bet-slip__fixed-container">
    <div class="bet-slip__container">
      <div class="bet-slip__overflow-first">
        <div class="bet-slip__header">
          <div class="bet-slip__header-left">
            <div class="bet-slip__header-text">Betslip</div>
          </div>
          <div class="bet-slip__header-right">
            <div class="bet-slip__multi-clear-bets-button">
            <i onClick="window.location.reload();" class="bi bi-trash"></i>
            </div>
          </div>
        </div>
        <div class="bet-slip__body ">
          <div class="bet-slip__multi-single-container">
            <div class="bet-slip__multi-container active bet-slip__multi-container--multi">
              <div class="bet-slip__multi-bets bet-slip__multi-bets--multi-max-height ">
                
                
              </div>
            </div>
           
          </div>
        </div>
      </div>
      <div  class="">
            <div  class="bet-slip__bet-container active">
              <div  class="bet-slip__row bet-slip__row--border-bottom">
                
              </div>
              <div  class="bet-slip__row new-bet-slip__input">
                <!-- <button  class="new-bet-slip__button new-bet-slip__button--minus">minus bet</button> -->
                <input id="mob-money"  class="bet-slip__bet-input ng-untouched ng-pristine ng-valid" inputmode="numeric"  pattern="[0-9]*" placeholder="Bet Amount" type="number">
                <!-- <button  class="new-bet-slip__button new-bet-slip__button--plus">plus bet</button> -->
              </div>
              <div  class="bet-slip__tool-tip-imitation-container"></div>
              <div  class="bet-slip__row ">
                <div  class="bet-slip__bet-container-cell-left">Total odd</div>
                <div id="mob-selectodd"  class="bet-slip__bet-container-cell-right"></div>
              </div>
              <div  class="bet-slip__row ">
                <div name="vat" class="bet-slip__bet-container-cell-left">VAT 15%</div>
                <div id="mob-vat"  class="bet-slip__bet-container-cell-right">ETB</div>
              </div>
              <!-- <div  class="bet-slip__row ">
                <div  class="bet-slip__bet-container-cell-left">Stake after VAT</div>
                <div  class="bet-slip__bet-container-cell-right">8.7 ETB</div>
              </div> -->
              <div  class="bet-slip__row">
                <div  class="bet-slip__bet-container-cell-left">Income Tax 15%</div>
                <div id="mob-tax" class="bet-slip__bet-container-cell-right">ETB</div>
              </div>
              <div  class="bet-slip__row">
                <div  class="bet-slip__bet-container-cell-left">Possible Win</div>
                <div id="mob-win"  class="bet-slip__bet-container-cell-right">ETB</div>
              </div>
              <!-- <div  class="bet-slip__row">
                <button  class="auth__fastBet"> Ticket preview </button>
              </div> -->
              <div class="bet-slip__row">
                <button  class="auth__button place-bet-btn-mob"> Check slip </button>
              </div>
              <form action="" method="POST">
                <div style="display: none;">
                <input name="dataodd" id="mob-dataodd" type="text">
                <input name="datavat" id="mob-datavat" type="text">
                <input name="datatax" id="mob-datatax" type="text">
                <input name="datawin" id="mob-datawin" type="text">
                <input name="datamoney" id="mob-datamoney" type="text">
                </div>
                <div class="bet-slip__row">
                  <button  class="auth__button" name="submitslipMob"> Place bet </button>
                </div>

                <?php

                $er = "";
                $su = "";

                if(isset($_POST['submitslipMob'])){
                  if (isset($_SESSION["loggedin"])){

                    $user_id = $_SESSION['id'];
                    $odd = floatval($_POST['dataodd']);
                    $vat = floatval($_POST['datavat']);
                    $tax = floatval($_POST['datatax']);
                    $win = floatval($_POST['datawin']);
                    $money = intval($_POST['datamoney']);
                    $bet_id = random_int(100000,999999);   

                    if(!empty($user_id) && !empty($odd) && !empty($vat) && !empty($win) && !empty($money)){

                      $sql = "SELECT balance FROM user WHERE id = $user_id ";
                      $result = mysqli_query($connection,$sql);

                      if (mysqli_num_rows($result) > 0){
                          $row = mysqli_fetch_assoc($result);
                          $balance = $row['balance'];
                        if($balance > 0){
                          if( $balance-$money >= 0){
                            $sql = "INSERT INTO betslip VALUES($bet_id,$user_id,$money,$odd,$vat,$tax,$win,12,now())";
                            $bet_query = mysqli_query($connection,$sql);
                            
                            $sql = "UPDATE user SET balance = balance - $money WHERE id = $user_id";
                            $bet_query = mysqli_query($connection,$sql);

                            $er = "";
                            // $su = "<script>alert('successfully bet');</script>";
                            echo "<script>
                            alert('successfully bet');
                            window.location.href='index.php';
                            </script>";
                          }else{
                            $su = "";
                            $er = " <script>alert('insefficient balance');</script>";
                          }
                        }else{
                          $su = "";
                          $er = " <script>alert('you have no balance');</script>";
                        }
                      }

                      
                    }else{
                      $su = "";
                      $er = " <script>alert('check the bet please!');</script>";
                      
                    } 

                }else{
                  $er = " <script>alert('first please login!');</script>";

                }
              }
                
                ?>
              </form>
              <div >
                <span id="mob-messempty"  class="cheangeMsg"> <?php echo $er; ?>  </span>
                <span id="sgsuccess" class="cheangeMsgsuccess"> <?php echo $su; ?> </span>
              </div>
            </div>
            
          </div>
      <!-- -->
    </div>
  </div>
</div>