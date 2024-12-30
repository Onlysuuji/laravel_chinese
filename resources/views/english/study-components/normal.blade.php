<div class="flex flex-col justify-center">
    <form id="submitAnswer" action="{{ route('english.answer') }}"
        class="w-full flex flex-col justify-center items-center mt-4 gap-y-4" method="post">
        @csrf
        @method('PATCH')

        <input type="hidden" name="id" value="{{ $word->id }}">

        <div class="text-center px-16- py-2 text-2xl space-y-3">
            <p class="text-3xl ">
                @if (isset($count) && $count > 0)
                    {{ $count }}個学習した
                @else
                    読み方を答えよ
                @endif
            </p>
            <p>{{ $word->question }}</p>
            <p id='gemini_description' class="text-sm"></p>
            <p id='openai_description' class="text-sm"></p>
            <p class="mt-10">例題</p>
            <p id='gemini_japanese'></p>
            <p id='openai_japanese'></p>
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
                class=" w-24 py-2 font-medium text-lg bg-green-200 text-green-500 rounded" disabled>準備中</button>

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
    <script>
        async function callGemini(prompt) {
            try {
                const response = await fetch('/call-gemini', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                            'content') // Laravel用
                    },
                    body: JSON.stringify({
                        prompt
                    }) // JSON形式で送信
                });

                if (!response.ok) {
                    throw new Error('ネットワークエラーが発生しました');
                }

                const data = await response.json();
                return data.response; // サーバーからの応答を返す
            } catch (error) {
                console.error('エラー:', error.message);
                return ''; // エラー時は空文字を返す
            }
        }

        async function callOpenai(prompt) {
            try {
                const response = await fetch('/call-openai', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                            'content') // Laravel用
                    },
                    body: JSON.stringify({
                        prompt
                    }) // JSON形式で送信
                });

                if (!response.ok) {
                    throw new Error('ネットワークエラーが発生しました');
                }

                const data = await response.json();
                return data.content; // サーバーからの応答を返す
            } catch (error) {
                console.error('エラー:', error.message);
                return ''; // エラー時は空文字を返す
            }
        }

        // 並列処理の実装
        (async () => {
            try {
                const englishWord = @json($answer);

                const description = `指定された英単語に適した説明を、その英単語の文字を含めないように日本語で作成してください：${englishWord}`;
                const example = `指定された英単語を使用する英文を作ってその文だけを出力してください：${englishWord}`;
                // GeminiとOpenAIの並列実行
                const [gemini_description, gemini_example, openai_description, openai_example] = await Promise.all([
                    callGemini(description), // Geminiコメント
                    callGemini(example), // Geminiコンテンツ
                    callOpenai(description), // OpenAIコメント
                    callOpenai(example) // OpenAIコンテンツ
                ]);
                let gemini_japanese = "次の文を日本語に翻訳してその翻訳した文章だけを出力してください: " + gemini_example;
                let openai_japanese = "次の文を日本語に翻訳してその翻訳した文章だけを出力してください。" + openai_example;

                [gemini_japanese, openai_japanese] = await Promise.all([
                    callGemini(gemini_japanese), // Geminiコンテンツ
                    callOpenai(openai_japanese) // OpenAIコンテンツ
                ]);
                sessionStorage.setItem('gemini_example', gemini_example);
                sessionStorage.setItem('gemini_japanese', gemini_japanese);
                sessionStorage.setItem('openai_example', openai_example);
                sessionStorage.setItem('openai_japanese', openai_japanese);



                // **で囲まれた部分を <strong>タグに置き換え
                const processedGeminiDescription = gemini_description.replace(/\*\*(.*?)\*\*/g,
                    '<strong>$1</strong>');
                const processedGeminiJapanese = gemini_japanese.replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>');
                const processedOpenaiDescription = openai_description.replace(/\*\*(.*?)\*\*/g,
                    '<strong>$1</strong>');
                const processedOpenaiJapanese = openai_japanese.replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>');


                // 置き換えたテキストをHTMLとして挿入
                $('#gemini_description').html(processedGeminiDescription);
                $('#gemini_japanese').html(processedGeminiJapanese);
                $('#openai_description').html(processedOpenaiDescription);
                $('#openai_japanese').html(processedOpenaiJapanese);

                $('#goToAnswer').text('答え');
                $('#goToAnswer').prop('disabled', false); // 答えるボタンを有効化

            } catch (error) {
                console.error('エラー:', error.message);
            }
        })();
    </script>
</div>
