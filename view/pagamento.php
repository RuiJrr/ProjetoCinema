<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="/node_modules/flowbite/dist/flowbite.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/assets/css/style.css">
    <script src="https://kit.fontawesome.com/de6cf25d6d.js" crossorigin="anonymous"></script>
    <title>Cine - Pagamento</title>
</head>
<body class="bg-[#141414]">

<?php include('header.php') ?>
    <section class="select-none hidden" id="section-pagamento">
        <div class="bg-[#2B2B2B] w-[60%] m-auto mt-10 p-12 rounded-md ">
            <div class="text-4xl text-[#B3B3B3] w-full text-center pb-8">Forma de Pagamento</div>
            <div class="text-2xl text-[#B3B3B3] w-full text-center pb-8">Escolha a melhor forma de pagamento que se adeque ao seu bolso</div>
            <div class="formasDePagamento w-[90%] m-auto text-[#B3B3B3] grid grid-cols-1 gap-5">
                <div onclick="selecionarMetodoPag(this)" class="forma-pagamento flex justify-between h-[80px] border-[#B3B3B3] border m-auto rounded-md w-[70%] cursor-pointer hover:bg-[#630000] focus:bg-[#630000]">
                    <div class=" h-full w-[150px] text-4xl flex items-center px-5"><i class="fa-regular fa-credit-card"></i></div>
                    <div class="h-full p-5 text-2xl ">Cartão de crédito</div>
                </div>
                <div onclick="selecionarMetodoPag(this)"  class="forma-pagamento flex justify-between h-[80px] border-[#B3B3B3] border m-auto rounded-md w-[70%] cursor-pointer hover:bg-[#630000]">
                    <div class=" h-full w-[150px] text-4xl flex items-center px-5"><i class="fa-brands fa-pix"></i></div>
                    <div class="h-full p-5 text-2xl ">Pix</div>
                </div>
                <div onclick="selecionarMetodoPag(this)"  class="forma-pagamento flex justify-between h-[80px] border-[#B3B3B3] border m-auto rounded-md w-[70%] cursor-pointer hover:bg-[#630000]">
                    <div class=" h-full w-[150px] text-4xl flex items-center px-5"><i class="fa-brands fa-cc-paypal"></i></div>
                    <div class="h-full p-5 text-2xl ">PayPal</div>
                </div>
            </div>
            <div class="flex justify-between my-14 text-white text-[12px] font">
                <button onclick="redirect('sala')" class="bg-[#8B0000] hover:bg-[#630000] py-2 px-8 h-11 rounded">
                    VOLTAR
                </button>
                <button onclick="confirmarPagamento()" id="confirmar-pagamento" class="bg-[#8B0000] hover:bg-[#630000] py-2 px-8 h-11 rounded hidden">
                    CONFIRMAR PAGAMENTO
                </button>
            </div>
        </div>
    </section>
    <section id="confirmacao-pagamento" class="hidden">
        <div class="bg-[#2B2B2B] w-[40%] m-auto mt-10 p-12 rounded-md min-h-[500px] flex items-center">
            <div class="m-auto" id="processando-pedido">
                <div class=" w-14 m-auto flex justify-center">
                    <svg aria-hidden="true" class="animate-spin text-gray-600 fill-[#8B0000]" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                    </svg>
                </div>
                <div class="flex justify-center pt-5 text-gray-400 text-2xl">
                    Processando pagamento...
                </div>
            </div>
            <div class="w-full hidden" id="pedido-confirmado">
                <div class="m-auto w-full grid grid-cols-1 items-center justify-center">
                    <div class=" w-24 m-auto flex justify-center">
                        <svg class="text-green-500 dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                        </svg>
                    </div>
                    <div class="flex justify-center pt-5 text-gray-400 text-2xl">
                        Pagamento realizado com sucesso.
                    </div>

                    <button onclick="redirect('index')" class="bg-[#8B0000] hover:bg-[#630000] py-2 px-8 h-11 rounded m-auto my-5">
                        VOLTAR PARA O INICIO
                    </button>

                </div>
            </div>
            
        </div>

    </section>
<script src="../assets/javascript/script-pagamento.js"></script>
<script src="../assets/javascript/script-utils.js"></script>
</body>
</html>