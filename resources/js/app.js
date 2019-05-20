var $ = require('jquery');

function hiddenNavShow() {

    var hidden_nav = $("div.hidden-header-rigth");
    hidden_nav.toggleClass("active");
}

function hiddenNavHide() {

  var hiddennav = $("div.hidden-header-rigth");
  hiddennav.removeClass("active");
}



function init() {

  var menu = $(".hamburger-menù");
  menu.click(hiddenNavShow);

  var hiddenmenù =$("i.fa-times");
  hiddenmenù.click(hiddenNavHide);
}

$(document).ready(init);
