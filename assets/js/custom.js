
$(document).ready(function(){
    $(".onlineMenu").mouseover(function(){
      $(".onlineFullmenu").css("display", "block");
      $(".offlineFullmenu").css("display", "none");
      $(".onlineMenu").css("color", "#11a63d");
      $(".overlay").css("display", "block");
      $("body").css("overflow", "hidden");
    });
    $(".offlineMenu").mouseover(function(){
        $(".offlineFullmenu").css("display", "block");
        $(".onlineFullmenu").css("display", "none");
        $(".onlineMenu").css("color", "#11a63d");
        $(".overlay").css("display", "block");
        $("body").css("overflow", "hidden");
      });
    $(".overlay").mouseover(function(){
      $(".overlay").css("display", "none");
      $("body").css("overflow", "auto");
      $(".onlineFullmenu").css("display", "none");
      $(".offlineFullmenu").css("display", "none");
    });
    $("#information_link").click(function ()
    {
        $('html, body').animate({
            scrollTop: $("#information").offset().top - 150
        }, 500);
    });
    $("#aboutThisPlan_link").click(function ()
    {
        $('html, body').animate({
            scrollTop: $("#aboutThisPlan").offset().top - 150
        }, 500);
    });
    $("#howItsDone_link").click(function ()
    {
        $('html, body').animate({
            scrollTop: $("#howItsDone").offset().top - 150
        }, 500);
    });
    
  });

  function clickToScroll(scrollId)
  {
  $('html, body').animate({
              scrollTop: $("#"+scrollId).offset().top - 150
          }, 500);
  }