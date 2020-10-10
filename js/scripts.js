$(function(){

    $('nav.mobile').click(function(){
        var listaMenu = $('nav.mobile ul');

        //abrir menu através de toggle slide
        if(listaMenu.is(':hidden') == true) {
            //var icone = $('.botao-menu-mobile i');
            var icone = $('.botao-menu-mobile').find('i');
            icone.removeClass('fa-bars');
            icone.addClass('fa-times');
            listaMenu.slideToggle();
        }else{
            var icone = $('.botao-menu-mobile').find('i');
            icone.removeClass('fa-times');
            icone.addClass('fa-bars');
            listaMenu.slideToggle();
        }
        
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