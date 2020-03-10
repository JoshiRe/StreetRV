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

});

// Este bloque de código es el que hace que la barra de navegación se pegué al tope de la página
window.addEventListener("load", function(){
    var myNavbar = document.getElementById("navbar");
    var sticky = myNavbar.offsetTop;
    window.addEventListener("scroll", function(){
        if(window.pageYOffset >= sticky){
            myNavbar.classList.add("sticky");
        }else{
            myNavbar.classList.remove("sticky");
        }
    });
});