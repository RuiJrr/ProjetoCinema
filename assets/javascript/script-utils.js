var UNIDADE_SELECIONADA = '';

function redirect(target){
    let unidadeParam = getUrlParameter('uni');
    $('#unidade-header').val(unidadeParam)
    let targetFinal;
    if(unidadeParam){
        targetFinal = unidadeParam != '' ? '/view/'+target+'.php?uni='+unidadeParam : '/view/'+target+'.php'
    }else{
        targetFinal = UNIDADE_SELECIONADA != '' ? '/view/'+target+'.php?uni='+UNIDADE_SELECIONADA : '/view/'+target+'.php'
    }
    window.location.replace(targetFinal);
}


function getUrlParameter(sParam) {
    var sPageURL = window.location.search.substring(1),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
        }
    }
    return false;
};

function ajustarUnidadeHeader() {
    let unidadeParam = getUrlParameter('uni') ? getUrlParameter('uni'):  UNIDADE_SELECIONADA;
    $('#unidade-header').val(unidadeParam)
}

function animacao(classe) {
    $('#header').removeClass('opacity-0')
    setTimeout(() => {
        $('#section-'+classe).fadeIn(500)
    }, 700);
}