
<x-base>
    <x-slot name="title">
        単語
    </x-slot>
    <x-slot name="language">
        chinese
    </x-slot>

    @if ($question_type == 'j_to_c' || $question_type == 'normal')
        @include('chinese.chinese-components.chinese-normal')
    @elseif ($question_type == 'select')
        @include('chinese.chinese-components.chinese-select')
    @elseif ($question_type == 'noWord')
        @include('chinese.chinese-components.chinese-noword')
    @endif
</x-base>
