<div class="flex flex-col justify-center">
    <form id="submitAnswer" action="{{ route('chinese.answer') }}"
        class="w-full flex flex-col justify-center items-center mt-4 gap-y-20" method="post">
        @csrf
        @method('PATCH')

        <input type="hidden" name="id" value="{{ $word->id }}">

        <div class="text-center px-20 py-2 mb-5 text-2xl space-y-6">
            <p class="text-3xl ">読み方を答えよ</p>
            <p>{{ $word->question }}</p>
        </div>

        <div class="flex flex-col justify-center items-center gap-y-3">
            <input type="number" id="yoursisheng"
                class="border-none outline outline-3 outline-gray-200 rounded"name="yoursisheng"
                placeholder="声調を入力" value="{{ old('yoursisheng', '') }}" />
            <input type="text" id="yourpinyin"
                class="border-none outline outline-3 outline-gray-200 rounded" name="yourpinyin"
                placeholder="ピンインを入力"value="{{ old('yourpinin', '') }}" />
            <text id='sisheng_pinyin' class="h-7 w-full text-xl border-b-4" aria-placeholder=""></text>


            <button type="submit" id="goToAnswer" name="goToAnswer"
                class=" w-24 py-2 font-medium text-lg bg-green-200 text-green-500 rounded">答え</button>

        </div>

    </form>
    <form id="myForm" method="post" action="{{ route('chinese.answer') }}" class="space-y-5">
        @method('PATCH')
        @csrf
        <input type="hidden" id="id" name="id" value="{{ $word->id }}">
        <div id="select" class="flex flex-col justify-center items-center"></div>
        <div class="flex justify-center pt-5">
            <button type="submit"
                class="w-36 text-xl mb-5 py-1 px-4 bg-yellow-100 hover:bg-yellow-200 text-yellow-400 hover:text-yellow-600 rounded">
                分からない
            </button>
        </div>

    </form>
    <form action="{{ route('chinese.destroy', $word->id) }}" method="POST"
        onsubmit="return confirm('本当に削除しますか？');">
        @csrf
        @method('DELETE')
        <div class="flex justify-center">
            <button type="submit" class="w-36 text-xl py-1 px-4 bg-red-100 hover:bg-red-200 text-red-400 hover:text-red-600 rounded">削除</button>

        </div>
    </form>
</div>


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

</div>
