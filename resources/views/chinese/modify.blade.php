<x-test2-layout>
    <x-slot name="title">
        単語の編集
    </x-slot>
    <div class="flex justify-center">
        <div class="mt-10 ring-4 ring-gray-200 rounded-lg p-3 pb-8 w-full sm:w-8/12">
            @if ($word->question_type === 'normal' || $word->question_type === 'j_to_c')
            @include('chinese.modify-components.normal')
        @elseif($word->question_type === 'select')
            @include('chinese.modify-components.select')
        @endif
        </div>
    </div>
    
</x-test2-layout>
