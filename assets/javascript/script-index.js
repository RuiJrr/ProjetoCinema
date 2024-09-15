
$(document).ready(function () {
    console.log('UNIDADE_SELECIONADA',UNIDADE_SELECIONADA)
    checkUnidade()
    ajustarUnidadeHeader()
});

function checkUnidade() {
    let unidade = getUrlParameter('uni');
    if (!unidade || unidade == '') {
        let duration = 500;
        $('#section-main').hide()

        setTimeout(function() {
            $('#element-1').fadeIn(1000)
            setTimeout(function() {
                $('#element-1').removeClass('scale-150')
                $('#element-1').removeClass('translate-y-1/2')
                setTimeout(function() { 
                    $('#element-2').fadeIn()
                }, duration *2);
        
                setTimeout(function() { 
                    $('#unidade').fadeIn()
                    $('#element-3').removeClass('opacity-0')
                }, duration *3);
        
            }, 3000);
        }, duration);
       

    }else{
        setTimeout(() => {
            $('#section-main').fadeIn(500)
        }, 700);
        $('#header').removeClass('opacity-0')
    }
}

function selecionarUnidade(){
    UNIDADE_SELECIONADA = $('#unidade').val()
    $('#section-select-unidade').fadeOut(function() {
        $('#section-main').fadeIn()
        $('#header').removeClass('opacity-0')
    })
    ajustarUnidadeHeader()
}

