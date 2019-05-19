
function hiddenNavShow() {
console.log("ok");
    var hidden_header_right = $(".hidden-header-rigth");
    hidden_header_right.toggleClass("active");
}

function resize() {

    var ww = document.body.clientWidth;
    if (ww >750) {
      $('hidden-header-rigth').removeClass('active');
    }
}

function init() {

   var menu = $(".hamburger-menù");
   menu.click(hiddenNavShow);

   $(window).resize(resize);
}

$(document).ready(init);
