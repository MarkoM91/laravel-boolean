
function hiddenNavShow() {

    var hidden_nav = $("div.hidden-header-rigth");
    hidden_nav.toggleClass("active");
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
