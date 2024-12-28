<div class="flex flex-col space-y-5">
    <div class="text-center py-2 text-2xl space-y-7">
        <p class="w-full text-2xl bg-gray-100 rounded">読み方を答えよ</p>
        <p>{{ $word->question }}</p>
    </div>
    <div class="flex flex-col items-center space-y-5">
        <p class="w-full text-2xl bg-gray-100 rounded my-2">あなたの答え </p>
        <div id="userAnswer" class="w-5/6 rounded text-xl my-3">{{ $yourenglish ?? '答えなし' }}</div>
    </div>

    <div class="flex flex-col items-center space-y-5">
        <p class="w-full text-2xl bg-gray-100 rounded">問題の答え</p>
        <div id="solution_containers" class="w-5/6 rounded"></div>
        <div x-data="{ open: false }" class="w-5/6">
            <button @click="open = !open"
                class="bg-blue-50 w-full py-1 rounded shadow px-28 hover:bg-blue-100 transition duration-100 flex justify-between items-center">
                <i class="fa fa-plus" aria-hidden="true"></i>
                <div>Geminiによる解説を表示</div>
            </button>
            <div x-show="open" x-transition:enter="transition ease-out duration-400"
                x-transition:enter-start="opacity-0 transform scale-90"
                x-transition:enter-end="opacity-100 transform scale-100"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 transform scale-100"
                x-transition:leave-end="opacity-0 transform scale-90" class="p-4 bg-white border rounded shadow">
                <p class="text-gray-700" id="gemini_content">
                    Geminiが考え中・・・
                </p>
            </div>
        </div>
        <div x-data="{ open: false }" class="w-5/6">
            <button @click="open = !open"
                class="bg-blue-50 w-full py-1 rounded shadow px-28 hover:bg-blue-100 transition duration-100 flex justify-between items-center">
                <i class="fa fa-plus" aria-hidden="true"></i>
                <div>Openaiによる解説を表示</div>
            </button>
            <div x-show="open" x-transition:enter="transition ease-out duration-400"
                x-transition:enter-start="opacity-0 transform scale-90"
                x-transition:enter-end="opacity-100 transform scale-100"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 transform scale-100"
                x-transition:leave-end="opacity-0 transform scale-90" class="p-4 bg-white border rounded shadow">
                <p class="text-gray-700" id="openai_content">
                    Openaiが考え中・・・
                </p>
            </div>
        </div>
    </div>
    <div class="flex flex-col items-center space-y-5">
        <p class="w-full text-2xl bg-gray-100 rounded">AIによる例題の答え</p>
        <div id="gemini_e_question" class="w-5/6 rounded">{{ $gemini_j }}</div>
        <div x-data="{ open: false }" class="w-5/6 rounded flex flex-col justify-center gap-x-2 items-center">
            <div class="flex gap-x-4">
                <div name="gemini_e_answer_close" style="cursor: pointer;" @click="open = !open" x-show="open"><i
                        class="fa-solid fa-minus"></i></div>
                <div name="gemini_e_answer_open" style="cursor: pointer;" @click="open = !open" x-show="!open"><i
                        class="fa-solid fa-plus"></i></div>
                <div id="gemini_e_answer_sound" style="cursor: pointer;"><i class="fas fa-volume-up"></i></div>

            </div>

            <div class="flex flex-col">
                <div id="gemini_e_answer" x-show="open" x-transition:enter="transition ease-out duration-400"
                    x-transition:enter-start="opacity-0 transform scale-90"
                    x-transition:enter-end="opacity-100 transform scale-100"
                    x-transition:leave="transition ease-in duration-200"
                    x-transition:leave-start="opacity-100 transform scale-100"
                    x-transition:leave-end="opacity-0 transform scale-90">{{ $gemini_e }}</div>

            </div>

        </div>
        <div x-data="{ open: false }" class="w-5/6">
            <button @click="open = !open"
                class="bg-blue-50 w-full py-1 rounded shadow px-28 hover:bg-blue-100 transition duration-100 flex justify-between items-center">
                <i class="fa fa-plus" aria-hidden="true"></i>
                <div>Geminiの例題の解説を表示</div>
            </button>
            <div x-show="open" x-transition:enter="transition ease-out duration-400"
                x-transition:enter-start="opacity-0 transform scale-90"
                x-transition:enter-end="opacity-100 transform scale-100"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 transform scale-100"
                x-transition:leave-end="opacity-0 transform scale-90" class="p-4 bg-white border rounded shadow">
                <p class="text-gray-700" id="gemini_comment">
                    Geminiが考え中・・・
                </p>
            </div>
        </div>


        <div id="openai_e_question" class="w-5/6 rounded">{{ $openai_j }}</div>
        <div x-data="{ open: false }" class="w-5/6 rounded flex flex-col justify-center gap-x-2 items-center">
            <div class="flex gap-x-4">
                <div name="openai_e_answer_close" style="cursor: pointer;" @click="open = !open" x-show="open"><i
                        class="fa-solid fa-minus"></i></div>
                <div name="openai_e_answer_open" style="cursor: pointer;" @click="open = !open" x-show="!open"><i
                        class="fa-solid fa-plus"></i></div>
                <div id="openai_e_answer_sound" style="cursor: pointer;"><i class="fas fa-volume-up"></i></div>

            </div>

            <div class="flex flex-col">
                <div id="openai_e_answer" x-show="open" x-transition:enter="transition ease-out duration-400"
                    x-transition:enter-start="opacity-0 transform scale-90"
                    x-transition:enter-end="opacity-100 transform scale-100"
                    x-transition:leave="transition ease-in duration-200"
                    x-transition:leave-start="opacity-100 transform scale-100"
                    x-transition:leave-end="opacity-0 transform scale-90">{{ $openai_e }}</div>

            </div>

        </div>
        <div x-data="{ open: false }" class="w-5/6">
            <button @click="open = !open"
                class="bg-blue-50 w-full py-1 rounded shadow px-28 hover:bg-blue-100 transition duration-100 flex justify-between items-center">
                <i class="fa fa-plus" aria-hidden="true"></i>
                <div>Openaiの例題の 解説を表示</div>
            </button>
            <div x-show="open" x-transition:enter="transition ease-out duration-400"
                x-transition:enter-start="opacity-0 transform scale-90"
                x-transition:enter-end="opacity-100 transform scale-100"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 transform scale-100"
                x-transition:leave-end="opacity-0 transform scale-90" class="p-4 bg-white border rounded shadow">
                <p class="text-gray-700" id="openai_comment">
                    Openaiが考え中・・・
                </p>
            </div>
        </div>
    </div>


</div>
@if (isset($word->comment))
    <div class="flex flex-col items-center space-y-5">
        <p class="w-full text-2xl bg-gray-100 rounded my-2">解説</p>
        <div id="userAnswer" class="w-5/6 rounded text-xl my-3">{{ $word->comment }}</div>
    </div>
@endif
<div class="flex items-center justify-around px-5 pt-5">
    <a href="{{ route('english') }}" class=" p-3 flex items-center bg-orange-50 hover:bg-orange-100 rounded"
        type="submit" id="next" disabled>次の単語</a>
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



<script>
    const aa = {!! $word->answer !!};

    // english の要素数を数える
    const count = aa.english.length;

    for (let i = 0; i < count; i++) {
        const container = document.getElementById('solution_containers');
        const newDiv = document.createElement('div');
        newDiv.className = 'flex my-3 justify-around rounded text-xl';
        newDiv.innerHTML = `
                        <lavel>${i+1} : </lavel>
                        <div class="solution_english">${aa.english[i]}</div>
                        <div class="solution_sound" style="cursor: pointer;"><i class="fas fa-volume-up"></i></div>
                    `;
        const solutionEnglish = newDiv.querySelector('.solution_sound');
        solutionEnglish.addEventListener('click', function() {
            const wordElement = newDiv.querySelector('.solution_english');
            speakText(wordElement);
        });
        container.appendChild(newDiv);
        let gemini_e_answer_text = document.getElementById('gemini_e_answer');
        let gemini_e_answer_sound = document.getElementById('gemini_e_answer_sound');
        gemini_e_answer_sound.addEventListener('click', function() {
            console.log("a");
            speakText(gemini_e_answer_text);
        });

    }



    function speakText(element) {
        const text = element.innerText;
        const utterance = new SpeechSynthesisUtterance(text);
        utterance.lang = 'en-US';
        window.speechSynthesis.speak(utterance);
    }
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
            // GeminiとOpenAIの並列実行
            const [gemini_comment, gemini_content, openai_comment, openai_content] = await Promise.all([
                callGemini(@json($gemini_comment)), // Geminiコメント
                callGemini(@json($content)), // Geminiコンテンツ
                callOpenai(@json($openai_comment)), // OpenAIコメント
                callOpenai(@json($content)) // OpenAIコンテンツ
            ]);

            console.log(@json($gemini_e));
            console.log(@json($openai_e));

            // **で囲まれた部分を <strong>タグに置き換え
            const processedGeminiContent = gemini_content.replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>');
            const processedGeminiComment = gemini_comment.replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>');
            const processedOpenaiContent = openai_content.replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>');
            const processedOpenaiComment = openai_comment.replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>');

            // 置き換えたテキストをHTMLとして挿入
            $('#gemini_content').html(processedGeminiContent);
            $('#gemini_comment').html(processedGeminiComment);
            $('#openai_content').html(processedOpenaiContent);
            $('#openai_comment').html(processedOpenaiComment);
        } catch (error) {
            console.error('エラー:', error.message);
        }
    })();
</script>
<!--
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const nextLink = document.getElementById('next');

        // 初期状態ではクリックを無効化
        nextLink.addEventListener('click', (event) => {
            if (nextLink.dataset.enabled !== "true") {
                event.preventDefault(); // リンク遷移を防ぐ
            }
        });

        // fetch 成功後に有効化
        fetch('/call-api', {
                method: 'GET',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                        'content')
                }
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('ネットワークエラーが発生しました');
                }
                return response.json();
            })
            .then(data => {
                console.log('成功:', data);

                // リンクを有効化
                nextLink.dataset.enabled = "true";
                nextLink.classList.remove('opacity-50'); // 見た目も有効化
            })
            .catch(error => {
                console.error('エラー:', error.message);
            });
    });
    -- >
</script>
