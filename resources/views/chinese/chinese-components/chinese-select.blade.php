<script src="https://cdnjs.cloudflare.com/ajax/libs/seedrandom/3.0.5/seedrandom.min.js"></script>

<div class="flex justify-center w-full">
    <div class="flex flex-col  justify-center mt-5 w-80 gap-y-6">
        <!-- 問題文 -->
        <p class="flex justify-center text-2xl rounded ">正しい選択肢を選べ</p>
        <div class="flex text-2xl">
            <p class="w-1/2 flex justify-center items-center">問題:</p>
            <p class="w-1/2 break-words text-center">{{ $word->question }}</p>
        </div>

        <form id="myForm" method="post" action="{{ route('chinese.answer') }}" class="space-y-5">
            @method('PATCH')
            @csrf
            <input type="hidden" id="id" name="id" value="{{ $word->id }}">
            <div id="select" class="flex flex-col justify-center items-center"></div>
            <div class="flex justify-center pt-56">
                <button type="submit"
                    class="w-36 text-xl py-1 px-4 bg-yellow-100 hover:bg-yellow-200 text-yellow-400 hover:text-yellow-600 rounded">
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
</div>
<script>
    // 配列をランダムに並び替える関数
    function shuffleArray(array) {
        Math.seedrandom({{ session('seed') }});
        return array.sort(() => Math.random() - 0.5);
    }

    // ページが完全に読み込まれたときに実行
    const aa = {!! json_encode($choices) !!};
    shuffleArray(aa.option);

    // 'aa.selects' 配列の各要素に対して処理を行う
    aa.option.forEach((selectItem) => {
        const container = document.getElementById('select');
        const newDiv = document.createElement('div');
        newDiv.className = 'select_container';
        newDiv.innerHTML =
            `<button class="py-1 w-36 text-gray-700 text-xl rounded outline outline-2 outline-gray-300 hover:bg-gray-200" type="submit" name="your_answer" value="${selectItem}">${selectItem}</button>`;
        container.appendChild(newDiv);
    });
</script>
