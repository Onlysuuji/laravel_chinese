<div class="flex flex-col justify-center">
    <form id="submitAnswer" action="{{ route('english.answer') }}"
        class="w-full flex flex-col justify-center items-center mt-4 gap-y-4" method="post">
        @csrf
        @method('PATCH')

        <input type="hidden" name="id" value="{{ $word->id }}">

        <div class="text-center px-20 py-2 text-2xl space-y-6">
            <p class="text-3xl ">読み方を答えよ</p>
            <p>{{ $word->question }}</p>
            <p id='ai_answer' class="text-sm">{{ $content }}</p>
            <p class="mt-10">例題</p>
            <p id='ai_example'>{{ $exampleanswer }}</p>
            <p id='output'></p>
        </div>

        <div class="flex flex-col justify-center items-center gap-y-3">
            <input type="text" id="yourenglish" class="border-none outline outline-3 outline-gray-200 rounded"
                name="yourenglish" autocorrect="off" placeholder="英語を入力" inputmode="latin" autocapitalize="off"
                spellcheck="false" autocomplete="off" />

            <input type="text" id="answer_to_ai" class="border-none outline outline-3 outline-gray-200 rounded"
                name="answer_to_ai" autocorrect="off" placeholder="AIの問題への回答（任意）" inputmode="latin" autocapitalize="off"
                spellcheck="false" autocomplete="off" />

            <button type="submit" id="goToAnswer" name="goToAnswer"
                class=" w-24 py-2 font-medium text-lg bg-green-200 text-green-500 rounded">答え</button>

        </div>

    </form>
    <form action="{{ route('english.destroy', $word->id) }}" method="POST" onsubmit="return confirm('本当に削除しますか？');" class="mt-6">
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
    <script>
        let text = $('#ai_answer').text();

        // **で囲まれた部分を <strong>タグに置き換え
        text = text.replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>');

        // 置き換えたテキストをHTMLとして挿入
        $('#ai_answer').html(text);

        text = $('#ai_example').text();

        // **で囲まれた部分を <strong>タグに置き換え
        text = text.replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>');

        // 置き換えたテキストをHTMLとして挿入
        $('#ai_example').html(text);
    </script>
</div>
