<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/4.1.3/css/flag-icons.min.css">
</head>

<body>


    <nav class='flex h-20 justify-between top-0 left-0 shadow-[0_0_64px_0_rgba(0,0,0,0.07)] border-b-4 border-gray-100'>
        <div class="flex justify-between gap-10 items-center">
            <div class="px-5">
                <a href="chinese" class="flex flex-row items-center text-black">
                    <span class="mt-1 font-medium">OnlyS</span>
                    <i class="fas fa-home"></i>

                </a>
            </div>
            <div class="flex flex-row gap-3 px-3">
                <x-dropdown align="left">
                    <button @click = "open-stopwatch = ! open-stopwatch" class="flex flex-row items-center text-black">
                        <x-slot name="trigger">
                            <button class="flex flex-row items-center">
                                <span class="mt-1 font-medium">多言語</span>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" class="icon-md text-token-text-tertiary">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M5.29289 9.29289C5.68342 8.90237 6.31658 8.90237 6.70711 9.29289L12 14.5858L17.2929 9.29289C17.6834 8.90237 18.3166 8.90237 18.7071 9.29289C19.0976 9.68342 19.0976 10.3166 18.7071 10.7071L12.7071 16.7071C12.5196 16.8946 12.2652 17 12 17C11.7348 17 11.4804 16.8946 11.2929 16.7071L5.29289 10.7071C4.90237 10.3166 4.90237 9.68342 5.29289 9.29289Z"
                                        fill="currentColor"></path>
                                </svg>
                            </button>
                        </x-slot>
                        <x-slot name="content">
                            <x-dropdown-link :href="route('chinese')">
                                <div class="flex flex-row items-center">
                                    <div class='mr-2 w-9 h-9 flex items-center justify-center'>
                                        <i class="flag-icon flag-icon-cn"></i>
                                    </div>
                                    <div class=' overflow-hidden text-ellipsis whitespace-nowrap '>
                                        {{ __('Chinese') }}
                                    </div>
                                </div>
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('english')">
                                <div class="flex flex-row items-center">
                                    <div class='mr-2 w-9 h-9 flex items-center justify-center'>
                                        <i class="flag-icon flag-icon-gb"></i>
                                    </div>
                                    <div class=' overflow-hidden text-ellipsis whitespace-nowrap '>
                                        {{ __('English') }}
                                    </div>
                                </div>
                            </x-dropdown-link>
                        </x-slot>
                    </button>
                </x-dropdown>
                <x-dropdown align="left">
                    <button @click = "open-stopwatch = ! open-stopwatch" class="flex flex-row items-center text-black">
                        <x-slot name="trigger">
                            <button class="flex flex-row items-center">
                                <span class="mt-1 font-medium">ストップウォッチ</span>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" class="icon-md text-token-text-tertiary">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M5.29289 9.29289C5.68342 8.90237 6.31658 8.90237 6.70711 9.29289L12 14.5858L17.2929 9.29289C17.6834 8.90237 18.3166 8.90237 18.7071 9.29289C19.0976 9.68342 19.0976 10.3166 18.7071 10.7071L12.7071 16.7071C12.5196 16.8946 12.2652 17 12 17C11.7348 17 11.4804 16.8946 11.2929 16.7071L5.29289 10.7071C4.90237 10.3166 4.90237 9.68342 5.29289 9.29289Z"
                                        fill="currentColor"></path>
                                </svg>
                            </button>
                        </x-slot>
                        <x-slot name="content">
                            aaa
                        </x-slot>
                    </button>
                </x-dropdown>
                <button @click = "open-stopwatch = ! open-stopwatch" class="flex flex-row items-center text-black">
                    <span class="mt-1 font-medium">アラーム</span>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg" class="icon-md text-token-text-tertiary">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M5.29289 9.29289C5.68342 8.90237 6.31658 8.90237 6.70711 9.29289L12 14.5858L17.2929 9.29289C17.6834 8.90237 18.3166 8.90237 18.7071 9.29289C19.0976 9.68342 19.0976 10.3166 18.7071 10.7071L12.7071 16.7071C12.5196 16.8946 12.2652 17 12 17C11.7348 17 11.4804 16.8946 11.2929 16.7071L5.29289 10.7071C4.90237 10.3166 4.90237 9.68342 5.29289 9.29289Z"
                            fill="currentColor"></path>
                    </svg>
                </button>
            </div>
        </div>




        <div x-data="{ text: '', maxLength: 10 }" class="flex gap-6 items-center py-4 px-3">
            <a x-model="text" :maxlength="maxLength" href="#" class="flex flex-col items-center text-black">
                <i class="fas fa-user text-2xl"></i>
                <span class="overflow-hidden text-ellipsis whitespace-nowrap mt-1">{{ Auth::user()->name }}</span>
            </a>
            <a href="#" class="flex flex-col items-center text-black">
                <i class="fas fa-cog text-2xl"></i>
                <span class="mt-1">設定</span>
            </a>
        </div>




    </nav>


    <!-- ドロップダウンメニュー -->

    <div class="flex">
        <div id="menu"
            class="flex flex-col justify-between h-[calc(100vh-80px)] left-0 top-0 w-44 bg-white shadow-[0_0_64px_0_rgba(0,0,0,0.07)] border-t-4 border-gray-100 dark:border-gray-800 rounded-br-xl p-3 pb-5 hidden">
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
    </div>
    <div id="littlemenu" class="flex flex-col justify-end h-[calc(100vh-80px)] left-0 top-0 w-16 p-3 pb-5">
        <ul class='space-y-4'>

            <li class=''>
                <x-tool-icon icon="fas fa-book" tooltip="単語帳を開く">

                </x-tool-icon>
            </li>
            
            <li class=''>
                <x-tool-icon icon="fas fa-edit" tooltip="単語を編集する">

                </x-tool-icon>
            </li>
            <li class=''>
                <x-tool-icon icon="fas fa-trash" color="red" tooltip="単語を削除する">

                </x-tool-icon>
            </li>

            <li class=''>
                <x-tool-icon icon="fas fa-plus" tooltip="新しい単語を追加する">

                </x-tool-icon>
            </li>

        </ul>
    </div>
</body>

</html>
