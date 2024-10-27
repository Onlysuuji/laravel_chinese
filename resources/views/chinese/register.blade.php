<x-test2-layout>
    <x-slot name="title">
        単語登録
    </x-slot>
    <div x-data="{ selectedOption: 'normal' }" class="mx-4 flex flex-col justify-center items-center" id="question_type">
        <div class="flex justify-center  mt-5 gap-10">
            <button @click="selectedOption = 'normal'"
                class="p-2 px-5 rounded-md shadow-sm ring ring-gray-300 hover:ring-gray-400"
                :class="selectedOption === 'normal' ? 'ring-gray-600 hover:ring-gray-600' : 'bg-white ring-gray-300'">
                <span class="text-sm">通常問題</span>
            </button>
            <button @click="selectedOption = 'select'"
                class="p-2 px-5 rounded-md shadow-sm ring ring-gray-300 hover:ring-gray-400"
                :class="selectedOption === 'select' ? 'ring-gray-600 hover:ring-gray-600' : 'bg-white ring-gray-300'">
                <span class="text-sm">選択問題</span>
            </button>
        </div>
        <div class=" mt-10 ring-4 ring-gray-200 rounded-lg p-3 pb-8 w-full sm:w-8/12">
            <div x-show="selectedOption === 'normal'" class="flex justify-center">
                @include('chinese.register-components.normal')
            </div>
            <div x-show="selectedOption === 'select'" class="flex justify-center">
                @include('chinese.register-components.select')
            </div>
        </div>
    </div>


</x-test2-layout>
