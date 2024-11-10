
<x-base>
    <x-slot name="title">
        単語
    </x-slot>
    <x-slot name="language">
        english
    </x-slot>

    @if ($question_type == 'j_to_c' || $question_type == 'normal')
        @include('english.study-components.normal')
    @elseif ($question_type == 'select')
        @include('english.study-components.select')
    @elseif ($question_type == 'noWord')
        @include('english.study-components.noword')
    @endif
</x-base>
