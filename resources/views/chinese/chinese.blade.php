
<x-test2-layout>
    <x-slot name="title">
        単語
    </x-slot>

    @if ($question_type == 'j_to_c' || $question_type == 'normal')
        @include('chinese.chinese-components.chinese-normal')
    @elseif ($question_type == 'select' && count($errors) === 0)
        @include('chinese.chinese-components.chinese-select')
    @elseif ($question_type == 'noWord')
        @include('chinese.chinese-components.chinese-noword')
    @endif
</x-test2-layout>
