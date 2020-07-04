// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
	document.getElementById("navbar-bem").style.transition = "all 0.5s";
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("navbar-bem").style.boxShadow = "0 2px 6px rgba(0,0,0,0.2)";
  } else {
    document.getElementById("navbar-bem").style.boxShadow = "0 0 0 rgba(0,0,0,0)";
  }
}

// Preloader
$(document).ready(function() {
		setTimeout(function(){
				$('.preloader').addClass('complete');
		}, 1000);
});

var progress = setInterval(function () {
    var $bar = $("#bar");
    if ($bar.width() >= 200) {
        clearInterval(progress);
    } else {
        $bar.width($bar.width() + 80);
    }
    // $bar.text($bar.width() / 2 + "%");
    if ($bar.width() / 100 == 100){
      $bar.text("Tunggu, ya ... " + $bar.width() / 20 + "%");
    }
}, 300);
