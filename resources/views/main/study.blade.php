
<x-base>
    <x-slot name="title">
        単語
    </x-slot>

    @if ($question_type == 'j_to_c' || $question_type == 'normal')
        @include($language . '.study-components.normal')

        {{-- main.english.study-components.normal --}}
        {{-- main.study-components.english.normal --}}
    @elseif ($question_type == 'select')
        @include($language . '.study-components.select')
    @elseif ($question_type == 'noWord')
        @include($language . '.study-components.noword')
    @endif

    
</x-base>
