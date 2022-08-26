
<div class="bet-slip active opened">
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
                <input id="money"  class="bet-slip__bet-input ng-untouched ng-pristine ng-valid" inputmode="numeric"  pattern="[0-9]*" placeholder="Bet Amount" type="number">
                <!-- <button  class="new-bet-slip__button new-bet-slip__button--plus">plus bet</button> -->
              </div>
              <div  class="bet-slip__tool-tip-imitation-container"></div>
              <div  class="bet-slip__row ">
                <div  class="bet-slip__bet-container-cell-left">Total odd</div>
                <div id="selectodd"  class="bet-slip__bet-container-cell-right"></div>
              </div>
              <div  class="bet-slip__row ">
                <div name="vat" class="bet-slip__bet-container-cell-left">VAT 15%</div>
                <div id="vat"  class="bet-slip__bet-container-cell-right">ETB</div>
              </div>
              <!-- <div  class="bet-slip__row ">
                <div  class="bet-slip__bet-container-cell-left">Stake after VAT</div>
                <div  class="bet-slip__bet-container-cell-right">8.7 ETB</div>
              </div> -->
              <div  class="bet-slip__row">
                <div  class="bet-slip__bet-container-cell-left">Income Tax 15%</div>
                <div id="tax" class="bet-slip__bet-container-cell-right">ETB</div>
              </div>
              <div  class="bet-slip__row">
                <div  class="bet-slip__bet-container-cell-left">Possible Win</div>
                <div id="win"  class="bet-slip__bet-container-cell-right">ETB</div>
              </div>
              <!-- <div  class="bet-slip__row">
                <button  class="auth__fastBet"> Ticket preview </button>
              </div> -->
              <div class="bet-slip__row">
                <button  class="auth__button place-bet-btn"> Check slip </button>
              </div>
              <form action="" method="POST">
                <div style="display: none;">
                <input name="dataodd" id="dataodd" type="text">
                <input name="datavat" id="datavat" type="text">
                <input name="datatax" id="datatax" type="text">
                <input name="datawin" id="datawin" type="text">
                <input name="datamoney" id="datamoney" type="text">
                </div>
                <div class="bet-slip__row">
                  <button  class="auth__button" name="submitslip"> Place bet </button>
                </div>
                <?php

                $er = "";
                $su = "";

                if(isset($_POST['submitslip'])){
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
                            // $su = "successfully bet";
                            echo "<script>
                                alert('successfully bet');
                                window.location.href='index.php';
                                </script>";
                          }else{
                            $su = "";
                            $er = "insefficient balance";
                          }
                        }else{
                          $su = "";
                          $er = "you have no balance";
                        }
                      }

                      
                    }else{
                      $su = "";
                      $er = "check the bet please!";
                    } 

                }else{
                  $er = "first please login";
                }
              }
                
                ?>
              </form>
              <div >
                <span id="messempty"  class="cheangeMsg"> <?php echo $er; ?>  </span>
                <span id="sgsuccess" class="cheangeMsgsuccess"> <?php echo $su; ?> </span>
              </div>
             
            </div>
            <!-- <div  class="bet-slip__bet-container bet-slip__bet-container--single">
              <div  class="bet-slip__row bet-slip__row--border-bottom">
                <div  class="bet-slip__bet-container-cell-left">
                  <div  class="bet-slip__bet-container-total-odds-text">Total bet amount</div>
                </div>
                <div  class="bet-slip__bet-container-cell-right">
                  <div  class="bet-slip__bet-container-total-odds-number">2</div>
                </div>
              </div>
              <div  class="bet-slip__row bet-slip__row--border-bottom">
                <div  class="bet-slip__bet-container-cell-left">
                  <div  class="bet-slip__bet-container-total-odds-text">Deposit</div>
                </div>
                <div  class="bet-slip__bet-container-cell-right">
                  <div  class="bet-slip__bet-container-total-odds-number">10 ETB</div>
                </div>
              </div>
              <div  class="bet-slip__tool-tip-imitation-container"></div>
              <div  class="bet-slip__row ">
                <div  class="bet-slip__bet-container-cell-left">
                  <div  class="bet-slip__bet-container-total-odds-text">VAT 15%</div>
                </div>
                <div  class="bet-slip__bet-container-cell-right">
                  <div  class="bet-slip__bet-container-total-odds-number"> 1.30 ETB </div>
                </div>
              </div>
              <div  class="bet-slip__row ">
                <div  class="bet-slip__bet-container-cell-left">
                  <div  class="bet-slip__bet-container-total-odds-text">Stake after VAT</div>
                </div>
                <div  class="bet-slip__bet-container-cell-right">
                  <div  class="bet-slip__bet-container-total-odds-number">8.7 ETB</div>
                </div>
              </div>
              <div  class="bet-slip__row">
                <div  class="bet-slip__bet-container-cell-left">Income Tax 15%</div>
                <div  class="bet-slip__bet-container-cell-right">0 ETB</div>
              </div>
              <div  class="bet-slip__row">
                <div  class="bet-slip__bet-container-cell-left">Possible Win</div>
                <div  class="bet-slip__bet-container-cell-right">64.28 ETB</div>
              </div>
              <div  class="bet-slip__row">
                <button  class="auth__fastBet"> Ticket preview </button>
              </div>
              <div  class="bet-slip__row"></div>
              <div  class="bet-slip__row ">
                <button  class="auth__button"> Place bet online </button>
              </div>
            </div> -->
            <!-- <div  class="bet-slip__bet-container">
              <div  class="bet-slip__row bet-slip__row--border-bottom bet-slip__row--fixed-scroll">
                <div  class="bet-slip__bet-container-cell-left">
                  <div  class="bet-slip__bet-container-total-odds-text">Total odds</div>
                </div>
                <div  class="bet-slip__bet-container-cell-right">
                  <div  class="bet-slip__bet-container-total-odds-number "> 7.39 </div>
                </div>
              </div>
              <div  class="bet-slip__row">
                <input  class="bet-slip__bet-input ng-untouched ng-pristine ng-valid" onclick="this.select();" type="text" placeholder="Bet Amount">
              </div>
              <div  class="bet-slip__row bet-slip__row--combinations">
                <div  class="bet-slip__row-span-combination">/ 2</div>
                <input  class="bet-slip__bet-input ng-untouched ng-pristine ng-valid" onclick="this.select();" type="text" placeholder="Combinations">
              </div>
              <div  class="bet-slip__tool-tip-imitation-container"></div>
              <div  class="bet-slip__row">
                <div  class="bet-slip__bet-container-cell-left">Income Tax 15%</div>
                <div  class="bet-slip__bet-container-cell-right">0 ETB</div>
              </div>
              <div  class="bet-slip__row">
                <div  class="bet-slip__bet-container-cell-left">Win</div>
                <div  class="bet-slip__bet-container-cell-right">64.28 ETB</div>
              </div>
              <div  class="bet-slip__row ">
                <button  class="auth__fastBet"> Place bet online </button>
              </div>
            </div> -->
          </div>
      <!-- -->
    </div>
  </div>
</div>