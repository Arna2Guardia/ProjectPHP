
$(document).ready(function(){
  $('.sidenav').sidenav();
  $('.parallax').parallax();
  $('.carousel').carousel();
  $('.collapsible').collapsible();
  $('.dropdown-trigger').dropdown();
  $('.modal').modal();
  $('.materialboxed').materialbox();
});

var elem = document.querySelector('.collapsible.expandable');
var instance = M.Collapsible.init(elem, {
  accordion: false
});

function light_mode(){
  var className = $('#nav').attr("class");
  console.log(className);
  if (className == 'grey darken-4'){
    $('nav').removeClass('grey darken-4 black-text').addClass('amber lighten-4');
    $('.class-nav').removeClass('white-text').addClass('black-text');
    $('#logo-g').attr('src','../img/guardia_logo_light.png');
    $('#page').removeClass('grey darken-4').addClass('amber lighten-4');
    $('#mobile-demo').removeClass('grey darken-4').addClass('amber lighten-4');
    $('.card-content').removeClass('grey darken-4').addClass('amber lighten-3')
    $('.card-title').removeClass('white-text').addClass('black-text').removeClass('grey darken-4').addClass('amber lighten-3');
    $('.card-reveal').removeClass('grey darken-4').addClass('amber lighten-3').removeClass('white-text').addClass('black-text');
    $('.bg-carousel').removeClass('blue-grey darken-4').addClass('amber lighten-3');
    $('.project').removeClass('white-text').addClass('black-text');
    $('.body-proj1').removeClass('grey lighten-1').addClass('white');
    $('.bdy-background').removeClass('grey darken-4').addClass('amber lighten-3');
    $('.test-col').removeClass('white-text').addClass('black-text');
    console.log(className);
  }
  else{
    $('nav').removeClass('amber lighten-4').addClass('grey darken-4');
    $('.class-nav').removeClass('black-text').addClass('white-text');
    $('#logo-g').attr('src','../img/guardia_logo.png');
    $('#page').removeClass('amber lighten-4').addClass('grey darken-4');
    $('#mobile-demo').removeClass('amber lighten-4').addClass('grey darken-4');
    $('.card-content').removeClass('amber lighten-3').addClass('grey darken-4')
    $('.card-title').removeClass('black-text',).addClass('white-text').removeClass('amber lighten-3').addClass('grey darken-4');
    $('.card-reveal').removeClass('amber lighten-3').addClass('grey darken-4').removeClass('black-text').addClass('white-text');
    $('.bg-carousel').removeClass('amber lighten-3').addClass('blue-grey darken-4');
    $('.project').removeClass('black-text').addClass('white-text');
    $('.body-proj1').removeClass('white').addClass('grey lighten-1');
    $('.bdy-background').removeClass('amber lighten-3').addClass('grey darken-4');
    $('.test-col').removeClass('black-text').addClass('white-text');
    console.log(className);
  }

  console.log('ok');
}

function ape_mode(){
  var logo = $('#ape-tete').attr('src');
  console.log(logo);
  if (logo == '../img/ape_logo.png'){
    $('#ape-tete').attr('src','../img/humain_logo.png');
    $('#ape-lucas').attr('src','../img/ape1.jpg');
    $('#ape-matthieu').attr('src','../img/ape2.jpg');
    $('#bg-parallax').attr('src','../img/monkey_type.gif');
    $('#mario').attr('src','../img/monkey_typing.gif');
    $('#luigi').attr('src','../img/monkey_rage.gif');
    $('#toad').attr('src','../img/monkey_driving.gif');
    $('#interrogation').attr('src','../img/fat_ape.gif');


    console.log('changé en ape')
  }
  else{
    $('#ape-tete').attr('src','../img/ape_logo.png');
    $('#ape-lucas').attr('src','../img/moi.jpg');
    $('#ape-matthieu').attr('src','../img/matthieu.jpg');
    $('#bg-parallax').attr('src','../img/background.jpg');
    $('#mario').attr('src','../img/morpion.jpg');
    $('#luigi').attr('src','../img/server.jpg');
    $('#toad').attr('src','../img//website.jpg');
    $('#interrogation').attr('src','../img/interrogation_mark.jpg');


    console.log('changé en humain')
  }
}


//              G  O  D
var keyboard = [71,79,68],
n = 0;

$(document).keydown(function (e) {
    if (e.keyCode === k[n++]) {
        if (n === k.length) {
            alert('Konami !!!'); // à remplacer par votre code
            n = 0;
            return false;
        }
    }
    else {
        n = 0;
    }
});
