
<x-english-layout>
    <x-slot name="title">
        単語
    </x-slot>
    <x-slot name="language">
        english
    </x-slot>

    @if ($question_type == 'j_to_c' || $question_type == 'normal')
        @include('english.english-components.normal')
    @elseif ($question_type == 'select')
        @include('english.english-components.select')
    @elseif ($question_type == 'noWord')
        @include('english.english-components.noword')
    @endif
</x-english-layout>
