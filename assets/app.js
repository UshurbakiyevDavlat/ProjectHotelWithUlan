///variables
//window.addEventListener('scroll', function() { document.getElementById('showScroll').innerHTML = pageYOffset + 'px';});
//alert(1)
// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

function myFunction() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("myBar").style.width = scrolled + "%";
}	

(function(){
  var maxHeight = 0;
  $('.card').each(function(){
    if ($(this).height() > maxHeight) {
      maxHeight = $(this).height();
    }
  });
  $('.card').each(function(){
    $(this).css('min-height', maxHeight);
  });
})();




var timer;

var compareDate = new Date();
compareDate.setDate(compareDate.getDate() + 4); //just for this demo today + 7 days

timer = setInterval(function () {
  timeBetweenDates(compareDate);
}, 1000);

function timeBetweenDates(toDate) {
  var dateEntered = toDate;
  var now = new Date();
  var difference = dateEntered.getTime() - now.getTime();

  if (difference <= 0) {
    // Timer done
    clearInterval(timer);
  } else {
    var seconds = Math.floor(difference / 1000);
    var minutes = Math.floor(seconds / 60);
    var hours = Math.floor(minutes / 60);
    var days = Math.floor(hours / 24);

    hours %= 24;
    minutes %= 60;
    seconds %= 60;

    $("#days").text(days);
    $("#hours").text(hours);
    $("#minutes").text(minutes);
    $("#seconds").text(seconds);
  }
}




// BLOG
/* Demo purposes only */
$(".hover").mouseleave(
  function () {
    $(this).removeClass("hover");
  }
);


