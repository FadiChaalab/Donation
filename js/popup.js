(function($) {
var modalSignup = document.getElementById('signup');
modalSignup.addEventListener('click', openSignup);
function openSignup(){
document.getElementsByClassName('signup-modal')[0].style.display= 'flex';
}
document.getElementsByClassName('close')[0].addEventListener('click', function() {
  document.getElementsByClassName('signup-modal')[0].style.display= 'none';
});
//login
var modalLogin = document.getElementById('login');
modalLogin.addEventListener('click', openLogin);
function openLogin() {
  document.getElementsByClassName('login-modal')[0].style.display= 'flex';
}
document.getElementsByClassName('close')[1].addEventListener('click', function() {
  document.getElementsByClassName('login-modal')[0].style.display= 'none';
});
//Donation
var modalDonation = document.getElementById('donate');
modalDonation.addEventListener('click', openDonation);
function openDonation(){
  document.getElementsByClassName('donation-modal')[0].style.display= 'flex';
}
document.getElementsByClassName('close')[2].addEventListener('click', function() {
  document.getElementsByClassName('donation-modal')[0].style.display= 'none';
});
//MEMBER
var modalMember = document.getElementById('member');
modalMember.addEventListener('click', openMember);
function openMember(){
document.getElementsByClassName('member-modal')[0].style.display= 'flex';
}
document.getElementsByClassName('close')[3].addEventListener('click', function() {
  document.getElementsByClassName('member-modal')[0].style.display= 'none';
});
//steps
$(document).ready(function(){
  $("#next1").click(function(){
    $("#step2").show();
    $("#step1").hide();
  });
  $("#next2").click(function(){
    $("#step3").show();
    $("#step2").hide();
  });
  $("#previous1").click(function(){
    $("#step1").show();
    $("#step2").hide();
  });
  $("#previous2").click(function(){
    $("#step2").show();
    $("#step3").hide();
  });

  $("#next-1").click(function(){
    $("#step-2").show();
    $("#step-1").hide();
  });
  $("#next-2").click(function(){
    $("#step-3").show();
    $("#step-2").hide();
  });
  $("#previous-1").click(function(){
    $("#step-1").show();
    $("#step-2").hide();
  });
  $("#previous-2").click(function(){
    $("#step-2").show();
    $("#step-3").hide();
  });
});
//video
document.getElementById('video').addEventListener('click',
function(){
document.getElementsByClassName('video-modal')[0].style.display= 'flex';
});
document.getElementsByClassName('close')[4].addEventListener('click',
function() {
  document.getElementsByClassName('video-modal')[0].style.display= 'none';
});
})(jQuery);
