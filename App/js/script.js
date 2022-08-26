(function () {
  "use strict";

  $("[data-trigger]").on("click", function () {
    var trigger_id = $(this).attr("data-trigger");
    $(trigger_id).toggleClass("show");
    $("body").toggleClass("offcanvas-active");
  });

  // close button
  $(".btn-close").click(function (e) {
    $(".navbar-collapse").removeClass("show");
    $("body").removeClass("offcanvas-active");
  });

  // mobile icon search
  $(document).ready(function () {
    $(".search-open").click(function () {
      $(".search-box").show();
      $(".login-container").hide();
      $(".slide").hide();
      // $(".navbar-toggler").css("overflow", "hidden");
    });
    $(".search-close").click(function () {
      $(".search-box").hide();
      $(".login-container").show();
      $(".slide").show();
    });
  });

  // show login password in login page
  $(document).ready(function () {
    $("#show_hide_password a").on("click", function (event) {
      event.preventDefault();
      if ($("#show_hide_password input").attr("type") == "text") {
        $("#show_hide_password input").attr("type", "password");
        $("#show_hide_password i").addClass("bi-eye-slash");
        $("#show_hide_password i").removeClass("bi-eye");
      } else if ($("#show_hide_password input").attr("type") == "password") {
        $("#show_hide_password input").attr("type", "text");
        $("#show_hide_password i").removeClass("bi-eye-slash");
        $("#show_hide_password i").addClass("bi-eye");
      }
    });
  });

  // show register password in register page
  $(document).ready(function () {
    $("#show_first_password a").on("click", function (event) {
      event.preventDefault();
      if ($("#show_first_password input").attr("type") == "text") {
        $("#show_first_password input").attr("type", "password");
        $("#show_first_password i").addClass("bi-eye-slash");
        $("#show_hide_password i").removeClass("bi-eye");
      } else if ($("#show_first_password input").attr("type") == "password") {
        $("#show_first_password input").attr("type", "text");
        $("#show_first_password i").removeClass("bi-eye-slash");
        $("#show_first_password i").addClass("bi-eye");
      }
    });
    $("#show_last_password a").on("click", function (event) {
      event.preventDefault();
      if ($("#show_last_password input").attr("type") == "text") {
        $("#show_last_password input").attr("type", "password");
        $("#show_last_password i").addClass("bi-eye-slash");
        $("#show_last_password i").removeClass("bi-eye");
      } else if ($("#show_last_password input").attr("type") == "password") {
        $("#show_last_password input").attr("type", "text");
        $("#show_last_password i").removeClass("bi-eye-slash");
        $("#show_last_password i").addClass("bi-eye");
      }
    });
  });

  // login remember me function
  //   const rmCheck = document.getElementById("rememberMe"),
  //     emailInput = document.getElementById("email");

  // if (localStorage.checkbox && localStorage.checkbox !== "") {
  //   rmCheck.setAttribute("checked", "checked");
  //   emailInput.value = localStorage.username;
  // } else {
  //   rmCheck.removeAttribute("checked");
  //   emailInput.value = "";
  // }

  // function lsRememberMe() {
  //   if (rmCheck.checked && emailInput.value !== "") {
  //     localStorage.username = emailInput.value;
  //     localStorage.checkbox = rmCheck.value;
  //   } else {
  //     localStorage.username = "";
  //     localStorage.checkbox = "";
  //   }
  // }

  // form validation
  var forms = document.querySelectorAll(".needs-validation");
  Array.prototype.slice.call(forms).forEach(function (form) {
    form.addEventListener(
      "submit",
      function (event) {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }

        form.classList.add("was-validated");
      },
      false
    );
  });

  // main footer slider
  $(document).ready(function () {
    $(".toggle").click(function () {
      // $(".footer").show();
      $(".bottom").slideToggle();

      $(".footer_button i").toggleClass("bi bi-caret-down");
    });
  });


  // main HOME SLIDER
  $(".slider").each(function () {
    var $this = $(this);
    var $group = $this.find(".slide_group");
    var $slides = $this.find(".slide");
    var bulletArray = [];
    var currentIndex = 0;
    var timeout;

    function move(newIndex) {
      var animateLeft, slideLeft;

      advance();

      if ($group.is(":animated") || currentIndex === newIndex) {
        return;
      }

      bulletArray[currentIndex].removeClass("active");
      bulletArray[newIndex].addClass("active");

      if (newIndex > currentIndex) {
        slideLeft = "100%";
        animateLeft = "-100%";
      } else {
        slideLeft = "-100%";
        animateLeft = "100%";
      }

      $slides.eq(newIndex).css({
        display: "block",
        left: slideLeft,
      });
      $group.animate(
        {
          left: animateLeft,
        },
        function () {
          $slides.eq(currentIndex).css({
            display: "none",
          });
          $slides.eq(newIndex).css({
            left: 0,
          });
          $group.css({
            left: 0,
          });
          currentIndex = newIndex;
        }
      );
    }

    function advance() {
      clearTimeout(timeout);
      timeout = setTimeout(function () {
        if (currentIndex < $slides.length - 1) {
          move(currentIndex + 1);
        } else {
          move(0);
        }
      }, 4000);
    }

    $.each($slides, function (index) {
      var $button = $('<a class="slide_btn">&bull;</a>');

      if (index === currentIndex) {
        $button.addClass("active");
      }
      $button
        .on("click", function () {
          move(index);
        })
        .appendTo(".slide_buttons");
      bulletArray.push($button);
    });

    advance();
  });


  // MOBILE HOME SLIDER
  if ($(window).width() < 769) {
    $(".top-nav").addClass("sticky-top");
    $(".slider").each(function () {
      var $this = $(this);
      var $group = $this.find(".slide_group");
      var $slides = $this.find(".slide");
      var bulletArray = [];
      var currentIndex = 0;
      var timeout;
  
      function move(newIndex) {
        var animateLeft, slideLeft;
  
        advance();
  
        if ($group.is(":animated") || currentIndex === newIndex) {
          return;
        }
  
        bulletArray[currentIndex].removeClass("active");
        bulletArray[newIndex].addClass("active");
  
        if (newIndex > currentIndex) {
          slideLeft = "100%";
          animateLeft = "-100%";
        } else {
          slideLeft = "-100%";
          animateLeft = "100%";
        }
  
        $slides.eq(newIndex).css({
          display: "block",
          left: slideLeft,
        });
        $group.animate(
          {
            left: animateLeft,
          },
          function () {
            $slides.eq(currentIndex).css({
              display: "none",
            });
            $slides.eq(newIndex).css({
              left: 0,
            });
            $group.css({
              left: 0,
            });
            currentIndex = newIndex;
          }
        );
      }
  
      function advance() {
        clearTimeout(timeout);
        timeout = setTimeout(function () {
          if (currentIndex < $slides.length - 1) {
            move(currentIndex + 1);
          } else {
            move(0);
          }
        }, 4000);
      }
      $.each($slides, function (index) {
        var $button = $('<a class="slide_btn">&bull;</a>');
  
        if (index === currentIndex) {
          $button.addClass("active");
        }
        $button
          .on("click", function () {
            move(index);
          })
          .appendTo(".slide_buttons");
        bulletArray.push($button);
      });
  
      advance();
    });
    } else {
      $(".slider-mob").hide();
    }
  

  // countrly list toggle
  $(".country-league-list").hide();
  $(".sport-country-item").click(function () {
    $(this).find("ul").slideToggle();
    $(this).find(".bi-arrow-down").toggleClass("bi-arrow-up");
  });

  // bet odd list toggle
  $(".sport-grid__bets-pseudo-list").hide();
  $(".sport-grid__bets-item").click(function () {
    $(this).find("ul").slideToggle();
  });

  //  deposite drop down function
  $(".balance__operator-drop-down").hide();
  $(".balance__operator-item").click(function () {
    $(this).find(".balance__operator-drop-down").slideToggle();
    $(this).find(".bi-caret-down-fill").toggleClass("bi-caret-up-fill");
  });

  // mobile bet button active function]
  $(".sport__bets-button").click(function(){
    if($(this).hasClass('sport__bets-button--active')){
      $(this).removeClass('sport__bets-button--active');
    }else{
      $(this).siblings().removeClass('sport__bets-button--active');
      $(this).addClass('sport__bets-button--active');
     
    }
    
  })

   // MAIN bet button active function]
   $(".bet-grid__bet-button").click(function(){
    if ($(this).hasClass('active')){
      $(this).removeClass('active');
    }else{
     $(this).parent().parent().find(".bet-grid__bet-button").removeClass('active');
      $(this).addClass('active');
    }
    
  })


  // balance check drop-down MAIN
  $(".balance__info").click(function () {
    if ($(".account__dropdown").hasClass("active")){
      $(".account__dropdown").removeClass("active")
    }else{
      $(".account__dropdown").addClass("active");
    }
  });
   $(".balance .account__dropdown-button").click(function (){
    $(".balance .account__dropdown").removeClass("active")
   });

  

    // prifile toggle MAIN
    $(".settings__button").click(function () {
      if ($(".account-menu").hasClass("active")){
        $(".account-menu").removeClass("active");
      }else{
        $(".account-menu").addClass("active");
      }
    });
    $(".account-menu").click(function(){
      if ($(".account-menu").hasClass("active")){
        $(".account-menu").removeClass("active");
      }
    });

    // balance check drop-down MOBILE
  $(".mb-account-info").click(function () {
    if ($(".mb-account-info .mb-account__dropdown").hasClass("active")){
      $(".mb-account-info .mb-account__dropdown").removeClass("active");
    }else{
      $(".mb-account__dropdown").addClass("active");
    }
  });
   $(".mb-account-info .mb-account__dropdown-button").click(function (){
    if ($(".mb-account__dropdown").hasClass("active")){
      $(this).parent().parent().removeClass("active");
    }
   });


    // MOBILE bet slip show 
  $(".mobile-bottom-nav-slip").click(function () {
    if ($(".bet-slip").hasClass("opened")){
      $(".bet-slip").removeClass("opened");
    }else{
      $(".bet-slip").addClass("opened");
    }
  });
   

  

  // coontrol second nav sticky to top
  if ($(window).width() < 769) {
    $(".second-nav").addClass("sticky-top")
  }

 


// 
$(document).ready(function() {
 
  $(".bi-search").click(function() {
     $(".togglesearch").toggle();
     $("input[type='text']").focus();
   });
 
 });


//bet slip
$(document).on('click', '.place-bet-btn', function (){  

  document.getElementById("sgsuccess").innerHTML = " ";

  let values = [];

  let messempty = document.getElementById("messempty");

  let vatElement = document.getElementById("vat");
  let TaxElement = document.getElementById("tax");
  let WinElement = document.getElementById("win");
  let SelectOddElement = document.getElementById("selectodd");
  let moneyElement = parseInt( document.getElementById("money").value);
 

  $('.bet-grid__bet-button.active').each(function(){
      values.push($(this).val()); 
  });

let odd = 0
let total = 1; 

for(let i = 0; i<values.length;i++){
total *= values[i]; 
odd = parseFloat(total.toFixed(2));
}



if(!moneyElement){
  messempty.innerHTML = "please insert money!"; 
}else if(odd == 1 || odd == 0){
  messempty.innerHTML = "please select odd!"; 
}
else{
  
  messempty.innerHTML = "";

  let tax = 0;
  let vat = moneyElement*15/100;
  let win = odd*moneyElement/1.15;

if(win>1000){
  tax = win*15/100;
  win = (odd*moneyElement/1.15)-tax;
  tax = tax.toFixed(2);
  TaxElement.innerHTML = tax+" "+"ETB";
} else if(win<1000){
  TaxElement.innerHTML = tax+" "+"ETB";
}



win = win.toFixed(2);
WinElement.innerHTML = win+" "+"ETB";
SelectOddElement.innerHTML = odd
vat = vat.toFixed(2);
vatElement.innerHTML = vat+" "+"ETB";

  // console.log(odd);
  // console.log(values);

  let DataOdd = document.getElementById("dataodd");
  DataOdd.value = odd;
  let DataVat = document.getElementById("datavat");
  DataVat.value = vat;

  let DataTax = document.getElementById("datatax");
  DataTax.value = tax;

  let Datawin = document.getElementById("datawin");
  Datawin.value = win;
  let DataMoney = document.getElementById("datamoney");
  DataMoney.value = moneyElement;
  // console.log(moneyElement);
}



});



//bet slip mob
$(document).on('click', '.place-bet-btn-mob', function (){  
  
  document.getElementById("sgsuccess").innerHTML = " ";

  let values = [];

  let messempty = document.getElementById("mob-messempty");

  let vatElement = document.getElementById("mob-vat");
  let TaxElement = document.getElementById("mob-tax");
  let WinElement = document.getElementById("mob-win");
  let SelectOddElement = document.getElementById("mob-selectodd");
  let moneyElement = parseInt( document.getElementById("mob-money").value);
 

  $('.sport__bets-button.sport__bets-button--active').each(function(){
      values.push($(this).val()); 
  });

let odd = 0
let total = 1; 

for(let i = 0; i<values.length;i++){
total *= values[i]; 
odd = parseFloat(total.toFixed(2));
}
console.log(odd);
console.log(values);


if(!moneyElement){
  messempty.innerHTML = "please insert money!"; 

}else if(odd == 1 || odd == 0){
  messempty.innerHTML = "please select odd!"; 
}
else{
  
  messempty.innerHTML = "";

  let tax = 0;
  let vat = moneyElement*15/100;
  let win = odd*moneyElement/1.15;

if(win>1000){
  tax = win*15/100;
  win = (odd*moneyElement/1.15)-tax;
  tax = tax.toFixed(2);
  TaxElement.innerHTML = tax+" "+"ETB";
} else if(win<1000){
  TaxElement.innerHTML = tax+" "+"ETB";
}



win = win.toFixed(2);
WinElement.innerHTML = win+" "+"ETB";
SelectOddElement.innerHTML = odd
vat = vat.toFixed(2);
vatElement.innerHTML = vat+" "+"ETB";

 

  let DataOdd = document.getElementById("mob-dataodd");
  DataOdd.value = odd;
  let DataVat = document.getElementById("mob-datavat");
  DataVat.value = vat;

  let DataTax = document.getElementById("mob-datatax");
  DataTax.value = tax;

  let Datawin = document.getElementById("mob-datawin");
  Datawin.value = win;
  let DataMoney = document.getElementById("mob-datamoney");
  DataMoney.value = moneyElement;
  // console.log(moneyElement);
}


});




//end
})();
