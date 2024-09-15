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
    <title>Cinema</title>
</head>
<body class="bg-[#141414]">

<section class="select-none ">
    <?php include('header.php') ?>
    <div class="bg-[#2B2B2B] w-[60%] m-auto mt-10 p-12 rounded-md hidden" id="section-sala">
        <div class="mb-2 mx-auto text-[#B3B3B3] text-center text-4xl font-semibold p-6 "><h1>Selecionar Poltrona</h1></div>
        <div class="mb-3 mx-auto">
            <div class="trapezio rounded-md mx-auto text-center p-2 font-medium relative">
                <div class="absolute -top-8 left-1/2 -translate-x-1/2">TELA</div>
            </div>
        </div>
        <div class="w-[70%] mb-7 mx-auto grid-cols-2 flex gap-10">
            <div class="w-[100%] grid grid-cols-9 gap-3">
                <div class="w-6 h-6 rounded-md bg-red-500"></div>
                <div class="w-6 h-6 rounded-md bg-red-500"></div>
                <div class="w-6 h-6 rounded-md bg-red-500"></div>
                <div class="w-6 h-6 rounded-md bg-red-500"></div>
                <div class="w-6 h-6 rounded-md bg-red-500"></div>
                <div class="w-6 h-6 rounded-md bg-red-500"></div>
                <div class="w-6 h-6 rounded-md bg-red-500"></div>
                <div class="w-6 h-6 rounded-md bg-red-500"></div>
                <div class="w-6 h-6 rounded-md bg-red-500"></div>
                <div class="w-6 h-6 rounded-md bg-red-500"></div>
                <div class="w-6 h-6 rounded-md bg-red-500"></div>
                <div class="w-6 h-6 rounded-md bg-red-500"></div>
                <div class="w-6 h-6 rounded-md bg-red-500"></div>
                <div class="w-6 h-6 rounded-md bg-red-500"></div>
                <div class="w-6 h-6 rounded-md bg-red-500"></div>
                <div class="w-6 h-6 rounded-md bg-red-500"></div>
                <div class="w-6 h-6 rounded-md bg-red-500"></div>
                <div class="w-6 h-6 rounded-md bg-red-500"></div>
                <div class="w-6 h-6 rounded-md bg-red-500"></div>
                <div class="w-6 h-6 rounded-md bg-red-500"></div>
                <div class="w-6 h-6 rounded-md bg-red-500"></div>
                <div class="w-6 h-6 rounded-md bg-red-500"></div>
                <div class="w-6 h-6 rounded-md bg-red-500"></div>
                <div class="w-6 h-6 rounded-md bg-red-500"></div>
                <div class="w-6 h-6 rounded-md bg-red-500"></div>
                <div class="w-6 h-6 rounded-md bg-red-500"></div>
                <div class="w-6 h-6 rounded-md bg-red-500"></div>
                <div class="w-6 h-6 rounded-md bg-red-500"></div>
                <div class="w-6 h-6 rounded-md bg-red-500"></div>
                <div class="w-6 h-6 rounded-md bg-red-500"></div>
                <div class="w-6 h-6 rounded-md bg-red-500"></div>
                <div class="w-6 h-6 rounded-md bg-red-500"></div>
                <div class="w-6 h-6 rounded-md bg-red-500"></div>
            </div>
            <div class=" w-[100%] grid grid-cols-9 gap-3">
                <div class="w-6 h-6 rounded-md bg-red-500"></div>
                <div class="w-6 h-6 rounded-md bg-red-500"></div>
                <div class="w-6 h-6 rounded-md bg-red-500"></div>
                <div class="w-6 h-6 rounded-md bg-red-500"></div>
                <div class="w-6 h-6 rounded-md bg-red-500"></div>
                <div class="w-6 h-6 rounded-md bg-red-500"></div>
                <div class="w-6 h-6 rounded-md bg-red-500"></div>
                <div class="w-6 h-6 rounded-md bg-red-500"></div>
                <div class="w-6 h-6 rounded-md bg-red-500"></div>
                <div class="w-6 h-6 rounded-md bg-red-500"></div>
                <div class="w-6 h-6 rounded-md bg-red-500"></div>
                <div class="w-6 h-6 rounded-md bg-red-500"></div>
                <div class="w-6 h-6 rounded-md bg-red-500"></div>
                <div class="w-6 h-6 rounded-md bg-red-500"></div>
                <div class="w-6 h-6 rounded-md bg-red-500"></div>
                <div class="w-6 h-6 rounded-md bg-red-500"></div>
                <div class="w-6 h-6 rounded-md bg-red-500"></div>
                <div class="w-6 h-6 rounded-md bg-red-500"></div>
                <div class="w-6 h-6 rounded-md bg-red-500"></div>
                <div class="w-6 h-6 rounded-md bg-red-500"></div>
                <div class="w-6 h-6 rounded-md bg-red-500"></div>
                <div class="w-6 h-6 rounded-md bg-red-500"></div>
            </div>
        </div>
        <div class="mb-5 mx-auto text-[#B3B3B3] font-medium text-2xl"><h1>Ingresso: 5x</h1></div>
        <div class="mx-auto grid-cols-2 flex gap-8">
            <div class="w-[90%] rounded-md border-2 border-[#B8B8B8] grid-cols-2 flex">
                <div class="w-[100%] h-[100%] text-[#B3B3B3] text-xl p-5 pl-10 flex items-center">Inteira</div>
                <div class="  grid-cols-3 text-white flex justify-end gap-2 font-medium pr-8 items-center">
                    <button type="button" class="font-medium p-[8px] rounded-md text-md bg-[#8B0000] flex items-center justify-center"><i class="fa-solid fa-plus"></i></button>
                    <input disabled type="number" value="03" class="bg-white py-[4px] w-10 text-black rounded-md text-center"></input>
                    <button type="button" class="font-medium p-[8px] rounded-md text-md bg-[#8B0000] flex items-center justify-center"><i class="fa-solid fa-minus"></i></button>
                </div>
            </div>
            <div class="w-[90%] rounded-md border-2 border-[#B8B8B8] grid-cols-2 flex">
                <div class="w-[100%] h-[100%] text-[#B3B3B3] text-xl p-5 pl-10 flex items-center"><h1>Meia</h1></div>
                <div class="grid-cols-3 text-white flex justify-end gap-2 font-medium pr-8 items-center">
                    <button type="button" class="font-medium p-[8px] rounded-md text-md bg-[#8B0000] flex items-center justify-center"><i class="fa-solid fa-plus"></i></button>
                    <input disabled type="number" value="03" class="bg-white py-[4px] w-10 text-black rounded-md text-center"></input>
                    <button type="button" class="font-medium p-[8px] rounded-md text-md bg-[#8B0000] flex items-center justify-center"><i class="fa-solid fa-minus"></i></button>
                </div>
            </div>
        </div>
        <div class="flex justify-between my-14 text-white text-[12px] font">
            <button onclick="redirect('index')" class="bg-[#8B0000] hover:bg-[#630000] py-2 px-8 h-11 rounded">
                VOLTAR
            </button>
            <button onclick="redirect('pagamento')" class="bg-[#8B0000] hover:bg-[#630000] py-2 px-8 h-11 rounded">
                AVANÇAR
            </button>
        </div>
    </div>
</section>
<script src="../assets/javascript/script-sala.js"></script>
<script src="../assets/javascript/script-utils.js"></script>
</body>
</html>