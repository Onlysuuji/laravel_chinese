<body>

    <!-- 問題文 -->
    

    @if (session('mode') === 'divide')
        <form id="submitAnswer" action="{{ route('chinese.answer') }}" method="post">
            @csrf
            @method('PATCH')

            <input type="hidden" name="id" value="{{ $id }}">

            <div class="px-20 py-2 bg-lemon-500 font-thin mb-5 text-2xl  bg-gray-200">
                {{ $question }}
            </div>

            <div class="flex flex-col">
                <input type="number" id="yoursisheng" class="my-1 border-none bg-blue-100 outline outline-3 outline-blue-200"name="yoursisheng" placeholder="声調を入力"
                    value="{{ old('yoursisheng', '') }}" />
                <input type="text" id="yourpinyin" class="my-1 border-none bg-blue-100 outline outline-3 outline-blue-200" name="yourpinyin"
                    placeholder="ピンインを入力"value="{{ old('yourpinin', '') }}" />

            </div>

            <p id='sisheng_pinyin' class="text-xl border-b-4"></p>


            <button type="submit" id="goToAnswer" name="goToAnswer"
                class="my-5 px-12 py-3 font-medium text-lg bg-green-200 text-green-600 rounded">答え</button>
        </form>

        <script type="module">
            import {
                mergeSishengPinyin
            } from "/onlysuuji.js";

            function updateContent() {
                document.getElementById('sisheng_pinyin').textContent = mergeSishengPinyin(document.getElementById(
                    'yoursisheng').value, document.getElementById('yourpinyin').value);
            }
            updateContent(); // 初期ロード時に実行
            // ボタンにイベントリスナーを追加
            document.getElementById('yoursisheng').addEventListener('input', updateContent);
            document.getElementById('yourpinyin').addEventListener('input', updateContent);

            // 声調入力フィールドにエンターキー押下時にピンイン入力フィールドへ移動
            document.getElementById('yoursisheng').addEventListener('keydown', function(event) {
                if (event.key === "Enter") {
                    event.preventDefault(); // デフォルトのフォーム送信を防止
                    document.getElementById('yourpinyin').focus(); // ピンイン入力フィールドにフォーカスを移動
                }
            });

            // ピンイン入力フィールドにエンターキー押下時に答えを確認する   
            document.getElementById('yourpinyin').addEventListener('keydown', function(event) {
                if (event.key === "Enter") {
                    event.preventDefault(); // デフォルトのフォーム送信を防止
                    document.getElementById('goToAnswer').click(); // ボタンのクリックイベントをトリガー
                }
            });
        </script>
    @elseif(session('mode') === 'merge')
        <form id="submitAnswer" action="{{ route('chinese.answer') }}" method="post">
            @csrf
            @method('PATCH')


            <input type="hidden" name="id" value="{{ $id }}">

            <input type="text" id="sisheng-pinyin" name="sisheng-pinyin" placeholder="声調とピンインを入力"
                value="{{ old('sisheng-pinyin', '') }}">

            <button type="submit" id="goToAnswer" name="goToAnswer">答え</button>
        </form>
        <script type="module">
            import {
                extractAndMergeSishengPinyin
            } from '/onlysuuji.js';

            // コンテナ内の要素を更新する関数
            function updateContent() {
                document.getElementById('sisheng_pinyin').textContent = extractAndMergeSishengPinyin(document.getElementById(
                    'sisheng-pinyin').value);
            }
            document.addEventListener('DOMContentLoaded', function() {
                updateContent(); // 初期ロード時に実行
                // ボタンにイベントリスナーを追加
                document.getElementById('sisheng-pinyin').addEventListener('input', updateContent);
                // ピンイン入力フィールドにエンターキー押下時に答えを確認する   
                document.getElementById('sisheng-pinyin').addEventListener('keydown', function(event) {
                    if (event.key === "Enter") {
                        event.preventDefault(); // デフォルトのフォーム送信を防止
                        document.getElementById('goToAnswer').click(); // ボタンのクリックイベントをトリガー
                    }
                });
            });
        </script>
    @endif

</body>
