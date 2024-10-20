<x-test2-layout>
    <x-slot name="title">
        単語の編集
    </x-slot>
    @if ($word->question_type === 'normal' || $word->question_type === 'j_to_c')
        @include('chinese.modify-components.normal')
    @elseif($word->question_type === 'select')
        @include('chinese.modify-components.select')
    @endif
</x-test2-layout>
