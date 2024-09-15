$(document).ready(function () {
    animacao('pagamento')
    ajustarUnidadeHeader()
});

function selecionarMetodoPag(elemento) {
    limparSelecaoFormaPag()
    $(elemento).addClass('bg-[#630000]')
    $('#confirmar-pagamento').fadeIn()
}

function limparSelecaoFormaPag() {
    $('.forma-pagamento').each(function()  {
        $(this).removeClass('bg-[#630000]')
    });
}

function confirmarPagamento() {
    let timeout = 2000
    $('#section-pagamento').hide()
    $('#confirmacao-pagamento').fadeIn(function() {
        $('#processando-pedido').fadeIn()
        setTimeout(() => {
            $('#processando-pedido').hide()
            $('#pedido-confirmado').fadeIn()
        }, timeout);
    })
}