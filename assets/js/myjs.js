

function changeDiv() {
    document.getElementById("home1").style.display = "none";
    document.getElementById("home").style.display = "block";
    document.getElementById("ativo2").classList.add('ative');
    document.getElementById("ativo").classList.remove('ative');
    /*document.getElementById("a_pneus2").style.backgroundColor = "yellow";
    document.getElementById("a_pneus").style.backgroundColor = "white";*/
    return false;
}   
function changeDivBack() {
    document.getElementById("home1").style.display = "block";
    document.getElementById("home").style.display = "none";
    document.getElementById("ativo").classList.add('ative');
    document.getElementById("ativo2").classList.remove('ative');
   /* document.getElementById("a_pneus2").style.backgroundColor = "white";
    document.getElementById("a_pneus").style.backgroundColor = "yellow";*/
    return false;
}   

function changePesquisaMotos() {
    document.getElementById("content_search1").style.display = "none";
    document.getElementById("content_search2").style.display = "block";
    document.getElementById("content_search3").style.display = "none";
    
    document.getElementById("a_motos").classList.add('activo');
    document.getElementById("a_carros").classList.remove('activo');
    document.getElementById("a_jantes").classList.remove('activo');
   
    /*document.getElementById("a_pneus2").style.backgroundColor = "yellow";
    document.getElementById("a_pneus").style.backgroundColor = "white";*/
    return false;
} 
function changePesquisajantes() {
    document.getElementById("content_search1").style.display = "none";
    document.getElementById("content_search2").style.display = "none";
    document.getElementById("content_search3").style.display = "block";
    
    document.getElementById("a_jantes").classList.add('activo');
    document.getElementById("a_carros").classList.remove('activo');
    document.getElementById("a_motos").classList.remove('activo');
    /*document.getElementById("a_pneus2").style.backgroundColor = "yellow";
    document.getElementById("a_pneus").style.backgroundColor = "white";*/
    return false;
} 
function changePesquisacarros() {
    document.getElementById("content_search1").style.display = "block";
    document.getElementById("content_search2").style.display = "none";
    document.getElementById("content_search3").style.display = "none";

    document.getElementById("a_carros").classList.add('activo');
    document.getElementById("a_jantes").classList.remove('activo');
    document.getElementById("a_motos").classList.remove('activo');

    document.getElementById("a_carros").fadeIn();
    
    /*document.getElementById("a_pneus2").style.backgroundColor = "yellow";
    document.getElementById("a_pneus").style.backgroundColor = "white";*/
    return false;
} 
function changeServicos() {

    document.getElementById("changeServicos").classList.add('current');
    document.getElementById("changePneus").classList.remove('current');
    document.getElementById("changeEmpresa").classList.remove('current');
    document.getElementById("changeContactos").classList.remove('current');
    document.getElementById("changePaginaInicial").classList.remove('current');


    
    /*document.getElementById("a_pneus2").style.backgroundColor = "yellow";
    document.getElementById("a_pneus").style.backgroundColor = "white";*/
    return false;
} 
function changePneus() {
    document.getElementById("changeServicos").classList.remove('current');
    document.getElementById("changePneus").classList.add('current');
    document.getElementById("changeEmpresa").classList.remove('current');
    document.getElementById("changeContactos").classList.remove('current');
    document.getElementById("changePaginaInicial").classList.remove('current');
    /*document.getElementById("a_pneus2").style.backgroundColor = "yellow";
    document.getElementById("a_pneus").style.backgroundColor = "white";*/
    return false;
} 
function changeEmpresa() {
    document.getElementById("changeServicos").classList.remove('current');
    document.getElementById("changePneus").classList.remove('current');
    document.getElementById("changeEmpresa").classList.remove('current');
    document.getElementById("changeContactos").classList.add('current');
    document.getElementById("changePaginaInicial").classList.remove('current');
    /*document.getElementById("a_pneus2").style.backgroundColor = "yellow";
    document.getElementById("a_pneus").style.backgroundColor = "white";*/
    return false;
} 
function changeContactos() {
    document.getElementById("changeServicos").classList.remove('current');
    document.getElementById("changePneus").classList.remove('current');
    document.getElementById("changeEmpresa").classList.remove('current');
    document.getElementById("changeContactos").classList.add('current');
    document.getElementById("changePaginaInicial").classList.remove('current');
    
    /*document.getElementById("a_pneus2").style.backgroundColor = "yellow";
    document.getElementById("a_pneus").style.backgroundColor = "white";*/
    return false;
} 
function changePaginaInicial() {
    document.getElementById("changeServicos").classList.remove('current');
    document.getElementById("changePneus").classList.remove('current');
    document.getElementById("changeEmpresa").classList.remove('current');
    document.getElementById("changeContactos").classList.remove('current');
    document.getElementById("changePaginaInicial").classList.add('current');
    
    /*document.getElementById("a_pneus2").style.backgroundColor = "yellow";
    document.getElementById("a_pneus").style.backgroundColor = "white";*/
    return false;
} 


$(window).scroll(function() {
    var scrollDistance = $(window).scrollTop();

    // Show/hide menu on scroll
    //if (scrollDistance >= 850) {
    //		$('nav').fadeIn("fast");
    //} else {
    //		$('nav').fadeOut("fast");
    //}

    // Assign active class to nav links while scolling
    $('section').each(function(i) {
            if ($(this).position().top <= scrollDistance) {
                    $('.navigation li.current').removeClass('current');
                    $('.navigation li').eq(i).addClass('current');
            }
    });
}).scroll();

$(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })