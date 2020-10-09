$(function(){
    //Aqui vai todo JavaScript

    $('nav.mobile').click(function(){
        var listaMenu = $('nav.mobile ul');

        //abrir menu através de toggle - slide bonito
        listaMenu.slideToggle();


    })
})


/* abrir menu através de fadeIn
    if(listaMenu.is(':hidden') == true) {  //se listaMenu :hiden = escondido
        listaMenu.fadeIn();
    }else{
        listaMenu.fadeOut();
    }  */
/*abrir fechar sem efeitos
    if(listaMenu.is(':hidden') == true) {
        //listaMenu.show(); = Jquery
        listaMenu.css('display','block');
    }else{
        //listaMenu.hide(); - Jquery
        listaMenu.css('display','none');
    } */