$(function(){
    var myNavbar_items = document.querySelectorAll("nav div a");
    var inicioTop = document.getElementById("body");
    var nosotrosTop = document.getElementById("nosotros");
    var desarrolloTop = document.getElementById("desarrollo");
    var equipoTop = document.getElementById("equipo");
    var contactoTop = document.getElementById("contacto");

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

    $(window).scroll(function() {
    var height = $(window).scrollTop();

    if(height  > 0 && height  < 379  ) {
        $(".aux").removeClass("selecteds")
        $("#inicio-nav").siblings(".aux").addClass("selecteds");
    }else if(height  > 380 && height  < 961  ) {
        $(".aux").removeClass("selecteds")
        $("#nosotros-nav").siblings(".aux").addClass("selecteds");
    }
    else if(height  > 962 && height  < 1561  ) {
        $(".aux").removeClass("selecteds")
        $("#desarrollo-nav").siblings(".aux").addClass("selecteds");
    }
    else if(height  > 1562 && height  < 2228  ) {
        $(".aux").removeClass("selecteds")
        $("#equipo-nav").siblings(".aux").addClass("selecteds");
    }
    else if(height  > 2229) {
        $(".aux").removeClass("selecteds")
        $("#contacto-nav").siblings(".aux").addClass("selecteds");
    }
    });


    $("#playvideo").click(function(){
        $(".modalDialog").addClass("play");
    
    });

      $(".close").click(function(){
        $(".modalDialog").removeClass("play");
        var media = $("#video").get(0);
        media.pause();
        media.currentTime = 0;
    
    });

    $( ".myCard-container" ).hover(
      function() {
        var aux = $(this).children(".activo");
        var backCard = $(this).children(".myCard-back");
        aux.addClass( "hover" );
        backCard.addClass( "show" );
      }, function() {
          var aux = $(this).children(".activo");
          var backCard = $(this).children(".myCard-back");
          aux.removeClass( "hover" );
          backCard.removeClass( "show" );
      }
    );

    $(".carousel-item:first-child").addClass("active");


    $("#enviar").click(function(){
       
        var nombre = $("#nombre").val();
        var email = $("#email").val();
        var comentario = $("#comentario").val();
       $.ajax({
                url: "insertar.php",
                type: "POST",
                async : false, 
                data: {
                    nombre: nombre,
                    email: email,
                    comentario: comentario,            
                },
                success: function(data){
                    $("#nombre").val("");
                    $("#email").val("");  
                    $("#comentario").val("");
                    swal("Mensaje enviado", "Te daremos una respuesta lo más pronto posible", "success");  
                    $("html, body").animate({ scrollTop: 0 }, "slow"); 
                }
            });
  });

});  
