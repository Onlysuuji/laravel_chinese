<x-test2-layout>
    <x-slot name="title">
        答え
    </x-slot>
    <!-- 問題文 -->
    <div class="flex justify-center py-3">
        <div class="w-80 text-center flex flex-col">
            @if ($isCorrect == true)
                <div
                    class="py-5 w-[100%] text-green-600 font-semibold text-3xl rounded outline outline-3 outline-gray-200 text-center">
                    正解</div>
            @elseif ($isCorrect == false)
                <div
                    class="py-5 w-[100%] text-red-400 font-semibold text-3xl rounded text-center">
                    不正解</div>
            @endif

            
            @if ($word->question_type == 'j_to_c' || $word->question_type == 'normal')
                @include('chinese.answer-components.normal')
            @elseif ($word->question_type == 'select')
                @include('chinese.answer-components.select')
            @endif
            <div class="flex items-center justify-around px-5 pt-5">
                <a href="{{ route('chinese') }}" class=" p-3 flex items-center bg-orange-50 hover:bg-orange-100 rounded"
                type="submit">次の単語</a>
                <a href="{{ route('chinese.modify', ['id' => $id]) }}" class="p-3 flex items-center bg-orange-50 hover:bg-orange-100 rounded"
                type="submit">編集する</a>
            </div>
            
        </div>

    </div>
</x-test2-layout>
