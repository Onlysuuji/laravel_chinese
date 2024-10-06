<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icons/3.5.0/css/flag-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/4.1.3/css/flag-icons.min.css">


    <nav class='flex h-20 justify-between top-0 left-0 shadow-[0_0_64px_0_rgba(0,0,0,0.07)] border-b-4 border-gray-100'>

        <!-- ハンバーガーアイコンとメニュー -->
        <div class="relative">
            <!-- ハンバーガーメニューアイコン -->
            <div class="flex h-full flex-row">
                <div class="flex w-20 justify-center items-center">
                    <button id="menu-btn" class="text-gray-700 focus:outline-none">
                        <!-- ハンバーガーアイコン -->
                        <div class="space-y-2">
                            <span class="block w-8 h-0.5 bg-gray-700"></span>
                            <span class="block w-8 h-0.5 bg-gray-700"></span>
                            <span class="block w-8 h-0.5 bg-gray-700"></span>
                        </div>
                    </button>
                </div>
                <div class='flex justify-center items-center px-3'>
                    <button class="w-8 h-8 flex ">
                        clock
                    </button>
                </div>
            </div>


            <!-- ドロップダウンメニュー -->

            <div class="flex">
                <div id="menu"
                    class="flex flex-col justify-between h-[calc(100vh-80px)] left-0 top-0 w-44 bg-white shadow-[0_0_64px_0_rgba(0,0,0,0.07)] border-t-4 border-gray-100 dark:border-gray-800 rounded-br-xl p-3 pb-5 hidden">
                    <ul class="space-y-1">
                        <li class='flex'>

                            <a href="#"
                                class="w-full rounded-md flex items-center text-gray-700 hover:bg-gray-100 p-1 font-bold">
                                <div class='mr-5 w-9 h-9 flex items-center justify-center'>
                                    <i class="fas fa-home"></i>
                                </div>
                                <div class=' overflow-hidden text-ellipsis whitespace-nowrap '>
                                    home
                                </div>
                            </a>
                        </li>
                        <li class='flex'>

                            <a href="#"
                                class="w-full rounded-md flex items-center text-gray-700 hover:bg-gray-100 p-1 font-bold">
                                <div class='mr-5 w-9 h-9 flex items-center justify-center'>
                                    <i class="flag-icon flag-icon-cn"></i>
                                </div>
                                <div class=' overflow-hidden text-ellipsis whitespace-nowrap '>
                                    chinese
                                </div>
                            </a>
                        </li>
                        <li class='flex'>

                            <a href="#"
                                class="w-full rounded-md flex items-center text-gray-700 hover:bg-gray-100 p-1 font-bold">
                                <div class='mr-5 w-9 h-9 flex items-center justify-center'>
                                    <i class="flag-icon flag-icon-gb"></i>
                                </div>
                                <div class=' overflow-hidden text-ellipsis whitespace-nowrap '>
                                    english
                                </div>
                            </a>
                        </li>
                    </ul>
                    <ul class='space-y-1'>
                        <li class='flex'>

                            <a href="#"
                                class="w-full rounded-md flex items-center text-gray-700 hover:bg-gray-100 p-1 font-bold">
                                <div class='visible mr-5 w-9 h-9 flex items-center justify-center'>
                                    <i class="fas fa-book"></i>
                                </div>
                                <div class=' overflow-hidden text-ellipsis whitespace-nowrap '>
                                    リスト
                                </div>
                            </a>
                        </li>
                        <li class='flex'>

                            <a href="#"
                                class="w-full rounded-md flex items-center text-gray-700 hover:bg-gray-100 p-1 font-bold">
                                <div class='mr-5 w-9 h-9 flex items-center justify-center'>
                                    <i class="fas fa-plus"></i>
                                </div>
                                <div class=' overflow-hidden text-ellipsis whitespace-nowrap '>
                                    追加
                                </div>
                            </a>
                        </li>
                        <li class='flex'>

                            <a href="#"
                                class=" sm:w-full rounded-md flex items-center text-gray-700 hover:bg-gray-100 p-1 font-bold">
                                <div class='mr-5 w-9 h-9 flex items-center justify-center'>
                                    <i class="fas fa-edit"></i>
                                </div>
                                <div class=' overflow-hidden text-ellipsis whitespace-nowrap '>
                                    編集
                                </div>
                            </a>
                        </li>
                        <li class='flex'>

                            <a href="#"
                                class="w-full rounded-md flex items-center hover:bg-red-200 p-1 font-bold bg-red-50">
                                <div class='mr-5 w-9 h-9 flex items-center justify-center'>
                                    <i class="fas fa-trash" style="color: rgba(255, 0, 0, 0.303);"></i>
                                </div>
                                <div class=' overflow-hidden text-ellipsis whitespace-nowrap   text-red-300'>
                                    削除
                                </div>
                            </a>
                        </li>

                    </ul>
                </div>
                <div>
                    {{$slot}}
                </div>
            </div>
            <div id="littlemenu" class="flex flex-col justify-end h-[calc(100vh-80px)] left-0 top-0 w-44 p-3 pb-5">
                <ul class='space-y-1'>

                    <li class='flex'>

                        <div class="w-full rounded-md flex items-center text-gray-700  p-1 font-bold">

                            <div
                                class='mr-5 w-9 h-9 flex items-center justify-center bg-while hover:bg-gray-200 rounded-full shadow-[0_0_64px_0_rgba(0,0,0,0.18)]'>
                                <a href="#">
                                    <i class="fas fa-book"></i>
                                </a>

                            </div>
                        </div>
                    </li>
                    <li class='flex'>

                        <div class="w-full rounded-md flex items-center text-gray-700  p-1 font-bold">

                            <div
                                class='mr-5 w-9 h-9 flex items-center justify-center bg-while hover:bg-gray-200 rounded-full shadow-[0_0_64px_0_rgba(0,0,0,0.18)]'>
                                <a href="#">
                                    <i class="fas fa-plus"></i>
                                </a>

                            </div>
                        </div>
                    </li>
                    <li class='flex'>

                        <div class="w-full rounded-md flex items-center text-gray-700  p-1 font-bold">

                            <div
                                class='mr-5 w-9 h-9 flex items-center justify-center bg-while hover:bg-gray-200 rounded-full shadow-[0_0_64px_0_rgba(0,0,0,0.18)]'>
                                <a href="#">
                                    <i class="fas fa-edit"></i>
                                </a>

                            </div>
                        </div>
                    </li>
                    <li class='flex'>

                        <div class="w-full rounded-md flex items-center text-gray-700  p-1 font-bold">

                            <div
                                class='mr-5 w-9 h-9 flex items-center justify-center bg-while bg-red-50 hover:bg-gray-200 rounded-full shadow-[0_0_64px_0_rgba(0,0,0,0.18)]'>
                                <a href="#">
                                    <i class="fas fa-trash" style="color: rgba(255, 0, 0, 0.303);"></i>
                                </a>

                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </div>


        <!-- JavaScriptでメニューの開閉を制御 -->
        <script>
            const menuBtn = document.getElementById('menu-btn');
            const menu = document.getElementById('menu');
            const littlemenu = document.getElementById('littlemenu');

            menuBtn.addEventListener('click', () => {
                menu.classList.toggle('hidden');
                littlemenu.classList.toggle('hidden');
            });
        </script>
        <div class="flex gap-6 items-center py-4">
            <a href="#" class="flex flex-col items-center text-black">
                <i class="fas fa-user text-2xl"></i>
                <span class="mt-1">ユーザー</span>
            </a>
            <a href="#" class="flex flex-col items-center text-black">
                <i class="fas fa-cog text-2xl"></i>
                <span class="mt-1">設定</span>
            </a>
        </div>




    </nav>

</body>

</html>
