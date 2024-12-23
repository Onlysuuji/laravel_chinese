<x-base>
    <x-slot name="title">
        答え
    </x-slot>
    <!-- 問題文 -->
    <div class="block sm:flex justify-center py-3">

        <div class="sm:w-4/12 hidden pl-7 pr-4 md:flex flex-col items-center">
            <div class="my-5">
                <h2>AIの例題の解説</h2>
            </div>
            <div class="pt-5 flex items-center justify-center">
                <div id="ai_example"></div>
            </div>

        </div>
        <div class="sm:w-4/12 text-center flex flex-col">
            @if ($isCorrect == true)
                <div class="py-5 w-[100%] text-green-600 font-semibold text-3xl rounded text-center">
                    正解</div>
            @elseif ($isCorrect == false)
                <div class="py-5 w-[100%] text-red-400 font-semibold text-3xl rounded text-center">
                    不正解</div>
            @endif


            @if ($word->question_type == 'j_to_c' || $word->question_type == 'normal')
                @include('english.answer-components.normal')
            @elseif ($word->question_type == 'select')
                @include('english.answer-components.select')
            @endif
            @if (isset($word->comment))
                <div class="flex flex-col items-center space-y-5">
                    <p class="w-full text-2xl bg-gray-100 rounded my-2">解説</p>
                    <div id="userAnswer" class="w-5/6 rounded text-xl my-3">{{ $word->comment }}</div>
                </div>
            @endif
            <div class="flex items-center justify-around px-5 pt-5">
                <a href="{{ route('english') }}" class=" p-3 flex items-center bg-orange-50 hover:bg-orange-100 rounded"
                    type="submit" id="next-word">次の単語</a>
                <form action="{{ route('english.correct', ['id' => $id]) }}" method="POST">
                    @csrf
                    @method('PATCH')
                        <button type="submit"
                            class="p-3 flex items-center bg-blue-50 hover:bg-blue-100 text-gray-600  duration-100 rounded">正解にする</button>
                </form>
                <a href="{{ route('english.modify', ['id' => $id]) }}"
                    class="p-3 flex items-center bg-orange-50 hover:bg-orange-100 rounded" type="submit">編集する</a>
            </div>
            <div class="flex items-center justify-around px-5 pt-5">
                <form action="{{ route('english.remember', $word->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="flex justify-center mt-7">
                        <button type="submit"
                            class="w-36 text-xl py-1 px-4 bg-blue-100 hover:bg-blue-200 text-blue-400 hover:text-blue-600 rounded">覚えた</button>

                    </div>
                </form>
                <form action="{{ route('english.destroy', $word->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="flex justify-center mt-7">
                        <button type="submit"
                            class="w-36 text-xl py-1 px-4 bg-red-100 hover:bg-red-200 text-red-400 hover:text-red-600 rounded">削除</button>

                    </div>
                </form>
            </div>
            <script>
                $(document).on('keydown', function(event) {
                    // Enterキーが押されたかチェック
                    if (event.key === 'Enter') {
                        // 2. ボタンのクリックイベントを発生させる方法
                        $('#next-word')[0].click();
                    }
                });
            </script>

        </div>
        <div class="hidden sm:w-4/12 pl-7 pr-4 md:flex flex-col items-center">
            <div class="my-5">
                <h2>Geminiの回答:</h2>
            </div>
            <div class="pt-5 flex items-center justify-center">
                <div id="ai_answer"></div>
            </div>
        </div>

    </div>
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
            (async () => {
                let ai_example = await callGemini(@json($ai_example)); // JSONとして埋め込む
                let ai_answer = await callGemini(@json($content)); // JSONとして埋め込む
                console.log(@json($ai_example));
                // **で囲まれた部分を <strong>タグに置き換え
                ai_answer = ai_answer.replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>');
                ai_example = ai_example.replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>');

                // 置き換えたテキストをHTMLとして挿入
                $('#ai_answer').html(ai_answer);
                $('#ai_example').html(ai_example);
                $('#ai_answer_sm').html(ai_answer);
                $('#ai_example_sm').html(ai_example);
            })();
    </script>
</x-base>
