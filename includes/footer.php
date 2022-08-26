 
 <?php 
$activePage = basename($_SERVER['PHP_SELF'], ".php");
?>

 
 <!-- MOBILE FOOTER -->
  <nav class="mobile-bottom-nav">
      <div class="mobile-bottom-nav__item <?= ($activePage == 'index') ? 'mobile-bottom-nav__item--active':''; ?> ">
        <a class="mobile-bottom-nav__item-content" href="index.php">
          <i class="bi bi-house-door-fill"></i>
          HOME
        </a>
      </div>
      <div class="mobile-bottom-nav__item">
        <div class="mobile-bottom-nav__item-content mobile-bottom-nav-slip">
          <i class="bi bi-broadcast" type="button"></i>
          SLIP
        </div>
      </div>
      <div class="mobile-bottom-nav__item <?= ($activePage == 'betinfo') ? 'mobile-bottom-nav__item--active':''; ?>">
        <a class="mobile-bottom-nav__item-content" href="betinfo.php">
          <i class="bi bi-card-checklist" ></i>
          TICKET
        </a>
      </div>

      <div class="mobile-bottom-nav__item">
        <div class="mobile-bottom-nav__item-content">
          <i class="bi bi-controller" type="button" data-trigger="#ligue_nav"></i>
          LIGUE
        </div>
      </div>
    </nav>
    <!-- MOBILE Bet Slip -->
    <!-- <div  class="navbar-collapse collaps-mob" id="mob_bet_slip"> -->
        <div  class="collaps-mob">
          <?php include "includes/bet-slip-mob.php";?>
        </div>
    <!-- </div> -->

    <!--  -->
    <!-- MOBILE NAV LIGUE LIST -->
    <div class="navbar-collapse" id="ligue_nav">
        <div style="margin-top: 90px; margin-bottom: 60px;">
        <div class="sport-country">
          <ul class="sport-type-list">
            <li class="sport-country-item">
              <div class="sport-type-container">
                <div class="sport-country-left">
                  <span class="sport-type-decore-left">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="24.997"
                      height="24.997"
                      viewBox="0 0 24.997 24.997"
                    >
                      <g
                        id="Group_2234"
                        data-name="Group 2234"
                        transform="translate(-31 -207)"
                      >
                        <circle
                          id="Ellipse_14"
                          data-name="Ellipse 14"
                          cx="12.14"
                          cy="12.14"
                          r="12.14"
                          transform="translate(31.357 207.357)"
                          fill="#fff"
                        ></circle>
                        <path
                          id="Path_174"
                          data-name="Path 174"
                          d="M17.54,20.47,13.9,14.4l.63-.37,3.64,6.07Z"
                          transform="translate(30.497 206.497)"
                          fill="#364556"
                        ></path>
                        <path
                          id="Path_175"
                          data-name="Path 175"
                          d="M25.14,13a8.447,8.447,0,0,1-.06,1.24L21,11l1.94-5a12.1,12.1,0,0,1,2.2,7Z"
                          transform="translate(30.497 206.497)"
                          fill="#364556"
                        ></path>
                        <path
                          id="Path_176"
                          data-name="Path 176"
                          d="M17.51,19.7l5.28.46a12.16,12.16,0,0,1-7.48,4.76Z"
                          transform="translate(30.497 206.497)"
                          fill="#364556"
                        ></path>
                        <path
                          id="Path_177"
                          data-name="Path 177"
                          d="M17.86,11.85,16,17.56H10L8.15,11.85,13,8.33Z"
                          transform="translate(30.497 206.497)"
                          fill="#364556"
                        ></path>
                        <path
                          id="Path_178"
                          data-name="Path 178"
                          d="M17.66,1.8,13,5.18,8.34,1.8a12,12,0,0,1,9.32,0Z"
                          transform="translate(30.497 206.497)"
                          fill="#364556"
                        ></path>
                        <path
                          id="Path_179"
                          data-name="Path 179"
                          d="M9,19.7,11.22,25a12.05,12.05,0,0,1-8-4.8Z"
                          transform="translate(30.497 206.497)"
                          fill="#364556"
                        ></path>
                        <path
                          id="Path_180"
                          data-name="Path 180"
                          d="M3.38,5.61,5.45,11,1,14.59A11.79,11.79,0,0,1,.86,13,12,12,0,0,1,3.38,5.61Z"
                          transform="translate(30.497 206.497)"
                          fill="#364556"
                        ></path>
                        <g
                          id="Group_19"
                          data-name="Group 19"
                          transform="translate(30.497 206.497)"
                          opacity="0.3"
                        >
                          <path
                            id="Path_181"
                            data-name="Path 181"
                            d="M25.14,13A12.13,12.13,0,0,1,3,19.93,12.12,12.12,0,0,0,22.1,10a12.05,12.05,0,0,0-2.17-7,12.13,12.13,0,0,1,5.21,10Z"
                          ></path>
                        </g>
                        <rect
                          id="Rectangle_63"
                          data-name="Rectangle 63"
                          width="0.73"
                          height="4.86"
                          transform="translate(43.136 210.997)"
                          fill="#364556"
                        ></rect>
                        <rect
                          id="Rectangle_64"
                          data-name="Rectangle 64"
                          width="0.73"
                          height="6.54"
                          transform="matrix(0.372, -0.928, 0.928, 0.372, 33.038, 216.809)"
                          fill="#364556"
                        ></rect>
                        <rect
                          id="Rectangle_65"
                          data-name="Rectangle 65"
                          width="5.17"
                          height="0.73"
                          transform="translate(47.615 218.554) rotate(-20.58)"
                          fill="#364556"
                        ></rect>
                        <path
                          id="Path_182"
                          data-name="Path 182"
                          d="M9.09,21.03l-.68-.28,2.43-6.06.68.27Z"
                          transform="translate(30.497 206.497)"
                          fill="#364556"
                        ></path>
                        <path
                          id="Path_183"
                          data-name="Path 183"
                          d="M13,25.5a11.75,11.75,0,0,1-1.84-.14A12.36,12.36,0,0,1,3,20.41,12.26,12.26,0,0,1,.61,14.63,12.5,12.5,0,1,1,25.5,13a8.792,8.792,0,0,1-.06,1.27,12.53,12.53,0,0,1-10.06,11A12.32,12.32,0,0,1,13,25.5ZM13,1.22a11.55,11.55,0,0,0-4.52.91A11.79,11.79,0,0,0,1.23,13a11.27,11.27,0,0,0,.1,1.54,11.79,11.79,0,0,0,9.94,10.1A11.731,11.731,0,0,0,24.77,13a11.63,11.63,0,0,0-2.13-6.75h0a11.74,11.74,0,0,0-5.12-4.12A11.55,11.55,0,0,0,13,1.22Z"
                          transform="translate(30.497 206.497)"
                          fill="#364557"
                        ></path>
                      </g>
                    </svg> </span
                  ><span class="sport-type-text">FOOTBALL</span>
                </div>
                <div class="sport-type-right">
                  <div>24</div>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div>
           <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container" >
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/et.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text">ethiopia</span>
                  </div>
                  <div class="sport-country-right">
                    <div>8</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
                <ul class="country-league-list">
                  <li class="country-league-item">
                    <a href="league.php" class="country-league-container">
                      <div class="country-league-left">
                        <span class="country-league-text">Premier League</span>
                      </div>
                      <div class="country-league-right">
                        <div></div>
                        <i class="bi bi-arrow-right-short"></i>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container">
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/de.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text">germany</span>
                  </div>
                  <div class="sport-country-right">
                    <div>13</div>
                    <!-- <i class="bi bi-arrow-down"></i> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
                <ul class="country-league-list">
                  <li class="country-league-item">
                    <a  class="country-league-container">
                      <div class="country-league-left">
                        <span class="country-league-text">bundesliga</span>
                      </div>
                      <div class="country-league-right">
                        <div>7</div>
                        <i class="bi bi-arrow-right-short"></i>
                      </div>
                    </a>
                  </li>
                  <li class="country-league-item">
                    <a href="" class="country-league-container">
                      <div class="country-league-left">
                        <span class="country-league-text">2 bundesliga</span>
                      </div>
                      <div class="country-league-right">
                        <div>2</div>
                        <i class="bi bi-arrow-right-short"></i>
                      </div>
                    </a>
                  </li>
                  <li class="country-league-item">
                    <a href="" class="country-league-container">
                      <div class="country-league-left">
                        <span class="country-league-text">3.Liga</span>
                      </div>
                      <div class="country-league-right">
                        <div>4</div>
                        <i class="bi bi-arrow-right-short"></i>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container">
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/es.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text">Spain</span>
                  </div>
                  <div class="sport-country-right">
                    <div>7</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
                <ul class="country-league-list">
                  <li class="country-league-item">
                    <a class="country-league-container">
                      <div class="country-league-left">
                        <span class="country-league-text">La liga</span>
                      </div>
                      <div class="country-league-right">
                        <div>4</div>
                        <i class="bi bi-arrow-right-short"></i>
                      </div>
                    </a>
                  </li>
                  <li class="country-league-item">
                    <a class="country-league-container">
                      <div class="country-league-left">
                        <span class="country-league-text"
                          >segunda division</span
                        >
                      </div>
                      <div class="country-league-right">
                        <div>3</div>
                        <i class="bi bi-arrow-right-short"></i>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container">
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/fr.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text">france</span>
                  </div>
                  <div class="sport-country-right">
                    <div>5</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
                <ul class="country-league-list">
                  <li class="country-league-item">
                    <a class="country-league-container">
                      <div class="country-league-left">
                        <span class="country-league-text">Ligue 1</span>
                      </div>
                      <div class="country-league-right">
                        <div>2</div>
                        <i class="bi bi-arrow-right-short"></i>
                      </div>
                    </a>
                  </li>
                  <li class="country-league-item">
                    <a class="country-league-container">
                      <div class="country-league-left">
                        <span class="country-league-text"
                          >Ligue 2</span
                        >
                      </div>
                      <div class="country-league-right">
                        <div>3</div>
                        <i class="bi bi-arrow-right-short"></i>
                      </div>
                    </a>
                  </li>
                </ul>
                
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container" >
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/en.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text">england</span>
                  </div>
                  <div class="sport-country-right">
                    <div>6</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
                <ul class="country-league-list">
                  <li class="country-league-item">
                    <a class="country-league-container">
                      <div class="country-league-left">
                        <span class="country-league-text">Premier League</span>
                      </div>
                      <div class="country-league-right">
                        <div>5</div>
                        <i class="bi bi-arrow-right-short"></i>
                      </div>
                    </a>
                  </li>
                  <li class="country-league-item">
                    <a class="country-league-container">
                      <div class="country-league-left">
                        <span class="country-league-text"
                          >EFL Championship</span
                        >
                      </div>
                      <div class="country-league-right">
                        <div>1</div>
                        <i class="bi bi-arrow-right-short"></i>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container" >
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/it.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text">italy</span>
                  </div>
                  <div class="sport-country-right">
                    <div>2</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
                <ul class="country-league-list">
                  <li class="country-league-item">
                    <a class="country-league-container">
                      <div class="country-league-left">
                        <span class="country-league-text">Serie A</span>
                      </div>
                      <div class="country-league-right">
                        <div>2</div>
                        <i class="bi bi-arrow-right-short"></i>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container" >
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/nl.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text">netherlands</span>
                  </div>
                  <div class="sport-country-right">
                    <div>9</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
                <ul class="country-league-list">
                  <li class="country-league-item">
                    <a class="country-league-container">
                      <div class="country-league-left">
                        <span class="country-league-text">Eredivisie</span>
                      </div>
                      <div class="country-league-right">
                        <div>6</div>
                        <i class="bi bi-arrow-right-short"></i>
                      </div>
                    </a>
                  </li>
                  <li class="country-league-item">
                    <a class="country-league-container">
                      <div class="country-league-left">
                        <span class="country-league-text"
                          >Eerste Divisie</span
                        >
                      </div>
                      <div class="country-league-right">
                        <div>3</div>
                        <i class="bi bi-arrow-right-short"></i>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container" >
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/stl.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text">scotland</span>
                  </div>
                  <div class="sport-country-right">
                    <div>3</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
                <ul class="country-league-list">
                  <li class="country-league-item">
                    <a class="country-league-container">
                      <div class="country-league-left">
                        <span class="country-league-text">Premiership</span>
                      </div>
                      <div class="country-league-right">
                        <div>3</div>
                        <i class="bi bi-arrow-right-short"></i>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container" href="">
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/al.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text">Albania</span>
                  </div>
                  <div class="sport-country-right">
                    <div>1</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container" href="">
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/dz.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text">algeria</span>
                  </div>
                  <div class="sport-country-right">
                    <div>7</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container" href="">
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/ar.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text">argentina</span>
                  </div>
                  <div class="sport-country-right">
                    <div>24</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container" href="">
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/am.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text">armenia</span>
                  </div>
                  <div class="sport-country-right">
                    <div>24</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container" href="">
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/afc.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text">asia</span>
                  </div>
                  <div class="sport-country-right">
                    <div>24</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container" href="">
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/au.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text">australia</span>
                  </div>
                  <div class="sport-country-right">
                    <div>24</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container" href="">
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/at.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text">austria</span>
                  </div>
                  <div class="sport-country-right">
                    <div>24</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container" href="">
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/qa.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text">bahrain</span>
                  </div>
                  <div class="sport-country-right">
                    <div>24</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container" href="">
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/be.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text">belgium</span>
                  </div>
                  <div class="sport-country-right">
                    <div>24</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container" href="">
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/lt.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text">bolivia</span>
                  </div>
                  <div class="sport-country-right">
                    <div>24</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container" href="">
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/ba.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text"
                      >bosnia and Herzegovina</span
                    >
                  </div>
                  <div class="sport-country-right">
                    <div>24</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container" href="">
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/br.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text">brazil</span>
                  </div>
                  <div class="sport-country-right">
                    <div>24</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container" href="">
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/bg.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text">bulgaria</span>
                  </div>
                  <div class="sport-country-right">
                    <div>24</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container" href="">
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/ca.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text">canada</span>
                  </div>
                  <div class="sport-country-right">
                    <div>24</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container" href="">
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/cl.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text">chile</span>
                  </div>
                  <div class="sport-country-right">
                    <div>24</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container" href="">
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/co.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text">colombia</span>
                  </div>
                  <div class="sport-country-right">
                    <div>24</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container" href="">
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/cr.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text">costa Rica</span>
                  </div>
                  <div class="sport-country-right">
                    <div>24</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container" href="">
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/cy.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text">cyprus</span>
                  </div>
                  <div class="sport-country-right">
                    <div>24</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container" href="">
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/cz.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text">czech republic</span>
                  </div>
                  <div class="sport-country-right">
                    <div>24</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container" href="">
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/dk.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text">denmark</span>
                  </div>
                  <div class="sport-country-right">
                    <div>24</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container" href="">
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/ec.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text">ecuador</span>
                  </div>
                  <div class="sport-country-right">
                    <div>24</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container" href="">
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/eg.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text">egypt</span>
                  </div>
                  <div class="sport-country-right">
                    <div>24</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container" href="">
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/eu.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text">europe</span>
                  </div>
                  <div class="sport-country-right">
                    <div>24</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container" href="">
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/fi.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text">finland</span>
                  </div>
                  <div class="sport-country-right">
                    <div>24</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container" href="">
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/ge.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text">georgia</span>
                  </div>
                  <div class="sport-country-right">
                    <div>24</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container" href="">
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/gr.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text">greece</span>
                  </div>
                  <div class="sport-country-right">
                    <div>24</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container" href="">
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/hu.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text">hungary</span>
                  </div>
                  <div class="sport-country-right">
                    <div>24</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container" href="">
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/is.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text">iceland</span>
                  </div>
                  <div class="sport-country-right">
                    <div>24</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container" href="">
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/in.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text">india</span>
                  </div>
                  <div class="sport-country-right">
                    <div>24</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container" href="">
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/il.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text">israel</span>
                  </div>
                  <div class="sport-country-right">
                    <div>24</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container" href="">
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/jm.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text">jamaica</span>
                  </div>
                  <div class="sport-country-right">
                    <div>24</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container" href="">
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/jp.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text">japan</span>
                  </div>
                  <div class="sport-country-right">
                    <div>24</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container" href="">
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/jo.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text">jordan</span>
                  </div>
                  <div class="sport-country-right">
                    <div>24</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container" href="">
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/lv.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text">latvia</span>
                  </div>
                  <div class="sport-country-right">
                    <div>24</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container" href="">
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/my.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text">malaysia</span>
                  </div>
                  <div class="sport-country-right">
                    <div>24</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container" href="">
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/mx.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text">mexico</span>
                  </div>
                  <div class="sport-country-right">
                    <div>24</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container" href="">
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/ge.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text">northen ireland</span>
                  </div>
                  <div class="sport-country-right">
                    <div>24</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container" href="">
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/no.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text">norway</span>
                  </div>
                  <div class="sport-country-right">
                    <div>24</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container" href="">
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/om.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text">oman</span>
                  </div>
                  <div class="sport-country-right">
                    <div>24</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container" href="">
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/py.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text">paraguay</span>
                  </div>
                  <div class="sport-country-right">
                    <div>24</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container" href="">
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/pe.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text">peru</span>
                  </div>
                  <div class="sport-country-right">
                    <div>24</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container" href="">
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/pl.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text">poland</span>
                  </div>
                  <div class="sport-country-right">
                    <div>24</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container" href="">
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/pt.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text">portugal</span>
                  </div>
                  <div class="sport-country-right">
                    <div>24</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container" href="">
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/ie.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text">rep.Ireland</span>
                  </div>
                  <div class="sport-country-right">
                    <div>24</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container" href="">
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/ro.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text">romania</span>
                  </div>
                  <div class="sport-country-right">
                    <div>24</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container" href="">
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/ru.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text">russia</span>
                  </div>
                  <div class="sport-country-right">
                    <div>24</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container" href="">
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/sa.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text">saudi arabia</span>
                  </div>
                  <div class="sport-country-right">
                    <div>24</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container" href="">
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/sk.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text">slovakia</span>
                  </div>
                  <div class="sport-country-right">
                    <div>24</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container" href="">
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/si.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text">slovenia</span>
                  </div>
                  <div class="sport-country-right">
                    <div>24</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container" href="">
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/za.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text">south africa</span>
                  </div>
                  <div class="sport-country-right">
                    <div>24</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container" href="">
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/skr.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text">south korea</span>
                  </div>
                  <div class="sport-country-right">
                    <div>24</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container" href="">
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/se.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text">sweden</span>
                  </div>
                  <div class="sport-country-right">
                    <div>24</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container" href="">
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/ch.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text">switzerland</span>
                  </div>
                  <div class="sport-country-right">
                    <div>24</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container" href="">
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/tz.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text">tanzania</span>
                  </div>
                  <div class="sport-country-right">
                    <div>24</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container" href="">
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/tr.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text">turkey</span>
                  </div>
                  <div class="sport-country-right">
                    <div>24</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container" href="">
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/us.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text">USA</span>
                  </div>
                  <div class="sport-country-right">
                    <div>24</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container" href="">
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/ae.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text"
                      >united arab emirates</span
                    >
                  </div>
                  <div class="sport-country-right">
                    <div>24</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container" href="">
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/uy.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text">uruguay</span>
                  </div>
                  <div class="sport-country-right">
                    <div>24</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container" href="">
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/uz.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text">uzbekistan</span>
                  </div>
                  <div class="sport-country-right">
                    <div>24</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container" href="">
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/afr.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text">africa</span>
                  </div>
                  <div class="sport-country-right">
                    <div>24</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="sport-country">
            <ul class="sport-country-list">
              <li class="sport-country-item">
                <a class="sport-country-container" href="">
                  <div class="sport-country-left">
                    <span class="sport-country-flag">
                      <img
                        class="sport-country-flag-img"
                        src="img/flags/wr.png"
                        alt=""
                      /> </span
                    ><span class="sport-country-text">world</span>
                  </div>
                  <div class="sport-country-right">
                    <div>24</div>
                    <!-- <div class="decor-triangle"></div> -->
                    <i class="bi bi-arrow-down"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
        </div>
        </div>
    </div>
    <!--  -->
    
    <!-- main footer -->
    <footer>
      <div class="footer bottom clearfix">
        <div class="footer-l">
          <h2 class="footer-name">Unity Betting PLC</h2>
          <div class="footer-contact">
            <div class="footer-contact-item">
              <i class="bi bi-envelope"></i>
              <a href="#">info@mybet.com</a>
            </div>
            <div class="footer-contact-item">
              <i class="bi bi-telephone"></i>
              <a href="tel:+251909090909">+251909090909</a>
            </div>
          </div>
        </div>

        <div class="footer-social-link footer-c">
          <h2 class="footer-name">Get In Touch</h2>
          <div class="social-link">
            <a href="/">
              <div class="bi me-2">
                <i class="bi bi-facebook"></i>
              </div>
            </a>
            <a href="/">
              <div class="bi me-2">
                <i class="bi bi-tiktok"></i>
              </div>
            </a>
            <a href="/">
              <div class="bi me-2">
                <i class="bi bi-youtube"></i>
              </div>
            </a>
            <a href="/" class="me-auto">
              <div class="bi me-2">
                <i class="bi bi-telegram"></i>
              </div>
            </a>
          </div>
        </div>
        <div class="text-muted footer-r">
          <p>
            Betting is addictive and can be physiologically harmfull Unity
            Betting PLC is licensed and regulated by the National Lottery
            Administration of Ethiopia, license No.: 12345
          </p>
          <p class="mb-0 mt-3">&copy; 2021 Unity Betting PLC</p>
        </div>
      </div>
      <span class="toggle"
        ><svg
          xmlns="http://www.w3.org/2000/svg"
          viewBox="5145.661 570 11.339 9.288"
          class="toggle__icon"
        >
          <path
            d="M3131.1,576.834l-5.418,9.288h11.339Z"
            transform="translate(2019.975 -6.834)"
            class="a"
          ></path></svg
      ></span>
    </footer>
    
    <!-- jQuery -->
    <!-- <script 
      language="JavaScript" type="text/javascript"
      src="https://code.jquery.com/jquery-2.2.4.min.js"
      integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
      crossorigin="anonymous"
    ></script> -->
    <script 
      language="JavaScript" type="text/javascript"
      src="App/js/jquery.js" ></script>
     <!-- js script -->
     <script language="JavaScript" type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
     <script language="JavaScript" type="text/javascript" src="App/js/script.js"></script>
     <script language="JavaScript" type="text/javascript" src="App/js/bet.js"></script>
   
  </body>
</html>
