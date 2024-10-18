<!DOCTYPE html>
<html lang="en">

<head>
    <!-- 基本のfavicon -->
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('favicon-16x16.png') }}" sizes="16x16" type="image/png">
    <link rel="icon" href="{{ asset('favicon-32x32.png') }}" sizes="32x32" type="image/png">

    <!-- Android用 -->
    <link rel="icon" href="{{ asset('android-chrome-192x192.png') }}" sizes="192x192" type="image/png">
    <link rel="icon" href="{{ asset('android-chrome-512x512.png') }}" sizes="512x512" type="image/png">

    <!-- Apple用 -->
    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">

    <!-- Web Manifest -->
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title }}</title>
    @vite(['resources/css/app.css'])
    <!-- @vite(['resources/js/app.js']) -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/4.1.3/css/flag-icons.min.css">
</head>

<body>
    <div class="flex flex-col h-screen">

        <nav
            class='flex h-20 justify-between top-0 left-0 shadow-[0_0_64px_0_rgba(0,0,0,0.07)] border-b-4 border-gray-100'>
            <div class="flex justify-between gap-10 items-center">
                <div class="px-5">
                    <a href="chinese" class="flex flex-row items-center text-black">
                        <span class="mt-1 font-medium">OnlyS</span>
                        <i class="fas fa-home"></i>

                    </a>
                </div>
                <div class="flex flex-row gap-3 px-3">
                    <x-dropdown align="left">
                        <button @click = "open-stopwatch = ! open-stopwatch"
                            class="flex flex-row items-center text-black">
                            <x-slot name="trigger">
                                <button class="flex flex-row items-center">
                                    <span class="mt-1 font-medium">操作</span>
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
                                            <i class="fas fa-pencil-alt"></i>

                                        </div>
                                        <div class=' overflow-hidden text-ellipsis whitespace-nowrap '>
                                            単語の勉強
                                        </div>
                                    </div>
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('chinese.register')">
                                    <div class="flex flex-row items-center">
                                        <div class='mr-2 w-9 h-9 flex items-center justify-center'>
                                            <i class="fas fa-plus"></i>
                                        </div>
                                        <div class=' overflow-hidden text-ellipsis whitespace-nowrap '>
                                            単語の追加
                                        </div>
                                    </div>
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('chinese.wordlist', ['page' => 1])">
                                    <div class="flex flex-row items-center">
                                        <div class='mr-2 w-9 h-9 flex items-center justify-center'>
                                            <i class="fas fa-book"></i>
                                        </div>
                                        <div class=' overflow-hidden text-ellipsis whitespace-nowrap '>
                                            単語リスト
                                        </div>
                                    </div>
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('chinese.modify')">
                                    <div class="flex flex-row items-center">
                                        <div class='mr-2 w-9 h-9 flex items-center justify-center'>
                                            <i class="fas fa-edit"></i>
                                        </div>
                                        <div class=' overflow-hidden text-ellipsis whitespace-nowrap '>
                                            単語の修正
                                        </div>
                                    </div>
                                </x-dropdown-link>
                            </x-slot>
                        </button>
                    </x-dropdown>
                    <x-dropdown align="left">
                        <button @click = "open-stopwatch = ! open-stopwatch"
                            class="flex flex-row items-center text-black">
                            <x-slot name="trigger">
                                <button class="flex flex-row items-center">
                                    <span class="mt-1 font-medium">他の言語</span>
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
                    <x-dropdown align="left" width="64">
                        <button @click = "open-stopwatch = ! open-stopwatch"
                            class="flex flex-row items-center text-black">
                            <x-slot name="trigger">
                                <button class="flex flex-row items-center">
                                    <span class="mt-1 font-medium">アラーム</span>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" class="icon-md text-token-text-tertiary">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M5.29289 9.29289C5.68342 8.90237 6.31658 8.90237 6.70711 9.29289L12 14.5858L17.2929 9.29289C17.6834 8.90237 18.3166 8.90237 18.7071 9.29289C19.0976 9.68342 19.0976 10.3166 18.7071 10.7071L12.7071 16.7071C12.5196 16.8946 12.2652 17 12 17C11.7348 17 11.4804 16.8946 11.2929 16.7071L5.29289 10.7071C4.90237 10.3166 4.90237 9.68342 5.29289 9.29289Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </button>
                            </x-slot>
                            <x-slot name="content">
                                <x-alarm2>
                                </x-alarm2>
                            </x-slot>
                        </button>
                    </x-dropdown>
                    <x-dropdown align="left" width="80">
                        <button @click = "open-stopwatch = ! open-stopwatch"
                            class="flex flex-row items-center text-black">
                            <x-slot name="trigger">
                                <button class="flex flex-row items-center">
                                    <span class="mt-1 font-medium">タイマー</span>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" class="icon-md text-token-text-tertiary">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M5.29289 9.29289C5.68342 8.90237 6.31658 8.90237 6.70711 9.29289L12 14.5858L17.2929 9.29289C17.6834 8.90237 18.3166 8.90237 18.7071 9.29289C19.0976 9.68342 19.0976 10.3166 18.7071 10.7071L12.7071 16.7071C12.5196 16.8946 12.2652 17 12 17C11.7348 17 11.4804 16.8946 11.2929 16.7071L5.29289 10.7071C4.90237 10.3166 4.90237 9.68342 5.29289 9.29289Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </button>
                            </x-slot>
                            <x-slot name="content">
                                <x-timer-container></x-timer-container>
                            </x-slot>
                        </button>
                    </x-dropdown>
                </div>
            </div>




            <div x-data="{ text: '', maxLength: 10 }" class="flex gap-6 items-center py-4 px-3">
                <a x-model="text" :maxlength="maxLength" href="#"
                    class="flex flex-col items-center text-black">
                    <i class="fas fa-user text-2xl"></i>
                    <span class="overflow-hidden text-ellipsis whitespace-nowrap mt-1">{{ Auth::user()->name }}</span>
                </a>
            </div>




        </nav>
        <div class="">
            {{ $slot }}
        </div>
    </div>
    <!--<div id="littlemenu" class="absolute z-10 flex flex-col justify-end left-0 bottom-0 w-16 p-3 pb-5">
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
    </div>-->


</body>

</html>
