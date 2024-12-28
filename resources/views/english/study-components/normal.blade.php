<div class="flex flex-col justify-center">
    <form id="submitAnswer" action="{{ route('english.answer') }}"
        class="w-full flex flex-col justify-center items-center mt-4 gap-y-4" method="post">
        @csrf
        @method('PATCH')

        <input type="hidden" name="id" value="{{ $word->id }}">

        <div class="text-center px-20 py-2 text-2xl space-y-6">
            <p class="text-3xl ">
                @if (isset($count) && $count > 0)
                    {{ $count }}個学習した
                @else
                    読み方を答えよ
                @endif
            </p>
            <p>{{ $word->question }}</p>
            <p id='gemini_description' class="text-sm">{{ $gemini_d }}</p>
            <p id='openai_description' class="text-sm">{{ $openai_d }}</p>
            <p class="mt-10">例題</p>
            <p id='gemini_example'>{{ $gemini_j }}</p>
            <p id='openai_example'>{{ $openai_j }}</p>
        </div>

        <div class="flex flex-col justify-center items-center gap-y-3">
            <input type="text" id="yourenglish" class="border-none outline outline-3 outline-gray-200 rounded"
                name="yourenglish" autocorrect="off" placeholder="英語を入力" inputmode="latin" autocapitalize="off"
                spellcheck="false" autocomplete="off" />

            <input type="text" id="answer_to_gemini" class="border-none outline outline-3 outline-gray-200 rounded"
                name="answer_to_gemini" autocorrect="off" placeholder="AIの問題への回答（gemini）" inputmode="latin"
                autocapitalize="off" spellcheck="false" autocomplete="off" />

            <input type="text" id="answer_to_openai" class="border-none outline outline-3 outline-gray-200 rounded"
                name="answer_to_openai" autocorrect="off" placeholder="AIの問題への回答（openai）" inputmode="latin"
                autocapitalize="off" spellcheck="false" autocomplete="off" />
            <button type="submit" id="goToAnswer" name="goToAnswer"
                class=" w-24 py-2 font-medium text-lg bg-green-200 text-green-500 rounded">答え</button>

        </div>

    </form>
    <form action="{{ route('english.destroy', $word->id) }}" method="POST" onsubmit="return confirm('本当に削除しますか？');"
        class="mt-6">
        @csrf
        @method('DELETE')
        <div class="flex justify-center">
            <button type="submit"
                class="w-36 text-xl py-1 px-4 bg-red-100 hover:bg-red-200 text-red-400 hover:text-red-600 rounded">削除</button>

        </div>
    </form>
    <script>
        $(document).ready(function() {
            // ページがロードされた際に #yourenglish にフォーカスを設定
            $('#yourenglish').focus();
        });
    </script>
</div>
