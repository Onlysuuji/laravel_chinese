<x-test2-layout>
    <x-slot name="title">
        答え
    </x-slot>
    <!-- 問題文 -->
    <div class=" flex flex-col  items-center text-center py-3">
        <div class="w-80">
            @if ($isCorrect == true)
                <div
                    class="py-5 bg-green-200 w-[100%] mb-14 text-green-600 font-semibold text-3xl rounded outline outline-3 outline-gray-200 text-center">
                    正解</div>
            @elseif ($isCorrect == false)
                <div
                    class="py-5 bg-red-100 w-[100%] mb-14 text-red-500 font-semibold text-3xl rounded outline outline-3 outline-gray-200 text-center">
                    不正解</div>
            @endif
            <span class="absolute left-0 transform -translate-x-full">追加する文字</span>

            <span class="text-2xl">{{ $question }}</span>
            @if ($question_type == 'j_to_c' || $question_type == 'normal')
                @include('chinese.answer-components.normal')
            @elseif ($question_type == 'select' && count($errors) === 0)
                @include('chinese.answer-components.select')
            @endif
            <a href="{{ route('chinese') }}" class="my-8 p-3 bg-blue-200 border-3 border-blue-500 rounded"
                type="submit">次の単語</a>
        </div>

    </div>
</x-test2-layout>
