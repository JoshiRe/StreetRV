$(function(){
    var myNavbar_items = document.querySelectorAll("nav div a");
    var inicioTop = document.getElementById("body");
    var nosotrosTop = document.getElementById("nosotros");
    var desarrolloTop = document.getElementById("desarrollo");
    var equipoTop = document.getElementById("equipo");
    var contactoTop = document.getElementById("contacto");

    console.log(myNavbar_items);

    // myNavbar_items[0].addEventListener("click", function(evt){
    //     evt.preventDefault();
    //     inicioTop.scrollIntoView(true);
    // });

    // myNavbar_items[1].addEventListener("click", function(evt){
    //     evt.preventDefault();
        
    // });

    // myNavbar_items[2].addEventListener("click", function(evt){
    //     evt.preventDefault();
    //     desarrolloTop.scrollIntoView();
    // });

    // myNavbar_items[3].addEventListener("click", function(evt){
    //     evt.preventDefault();
    //     equipoTop.scrollIntoView();
    // });

    // myNavbar_items[4].addEventListener("click", function(evt){
    //     evt.preventDefault();
    //     contactoTop.scrollIntoView();
    // });
    //Navbar con jquery algo similar pero con valores del scroll 
    var navbar = $("#navbar");
    var height = $(window).scrollTop();
    if(height  < 89) {
        // do something
        navbar.removeClass("sticky")
        navbar.addClass("top-navbar");
    }  else if( height  > 250 ){
        navbar.removeClass("top-navbar")
        navbar.addClass("sticky");
    }

    $(window).scroll(function() {
    var height = $(window).scrollTop();

    if(height  > 250) {
        navbar.removeClass("top-navbar")
         navbar.addClass("sticky");

    }
    else if (height <89){
        navbar.removeClass("sticky");
        navbar.addClass("top-navbar");
    }
});

    ///Codigo para ver que submenu esta el usuario
    $("nav div a").click(function(){
        $(".aux").removeClass("selecteds")
        $(this).siblings(".aux").addClass("selecteds");
        
    });

    $( "nav div a" ).hover(
  function() {
    $( this ).siblings(".aux").addClass("selected");
  }, function() {
    $( this ).siblings(".aux").removeClass("selected");
  }
);
});
