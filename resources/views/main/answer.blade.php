<x-base>
    <x-slot name="title">
        答え
    </x-slot>
    <!-- 問題文 -->
    <div class="flex justify-center py-3">
        <div class="w-80 text-center flex flex-col">
            @if ($isCorrect == true)
                <div
                    class="py-5 w-[100%] text-green-600 font-semibold text-3xl rounded text-center">
                    正解</div>
            @elseif ($isCorrect == false)
                <div
                    class="py-5 w-[100%] text-red-400 font-semibold text-3xl rounded text-center">
                    不正解</div>
            @endif

            
            @if ($word->question_type == 'j_to_c' || $word->question_type == 'normal')
                @include($language . '.answer-components.normal')
            @elseif ($word->question_type == 'select')
                @include($language . '.answer-components.select')
            @endif
            <div class="flex items-center justify-around px-5 pt-5">
                <a href="{{ route($language)) }}" class=" p-3 flex items-center bg-orange-50 hover:bg-orange-100 rounded"
                type="submit">次の単語</a>
                <a href="{{ route($language . '.modify', ['id' => $id]) }}" class="p-3 flex items-center bg-orange-50 hover:bg-orange-100 rounded"
                type="submit">編集する</a>
            </div>
            <form action="{{ route($language . '.destroy', $word->id) }}" method="POST" onsubmit="return confirm('本当に削除しますか？');">

                @csrf
                @method('DELETE')
                <div class="flex justify-center mt-7">
                    <button type="submit"
                        class="w-36 text-xl py-1 px-4 bg-red-100 hover:bg-red-200 text-red-400 hover:text-red-600 rounded">削除</button>
        
                </div>
            </form>
            
        </div>

    </div>
</x-base>
