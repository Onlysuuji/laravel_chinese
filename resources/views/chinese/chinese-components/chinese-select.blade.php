<script src="https://cdnjs.cloudflare.com/ajax/libs/seedrandom/3.0.5/seedrandom.min.js"></script>




<div class="w-64 h-auto">
    <!-- 問題文 -->
    <div
        class="">
        {{ $word->question }}
    </div>

    <form id="myForm" method="post" action="{{ route('chinese.answer') }}">
        @method('PATCH')
        @csrf
        <input type="hidden" id="id" name="id" value="{{ $word->id }}">
        <div id="select"></div>
    </form>
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
            `<button class="py-4 bg-gray-200 w-[80%] text-gray-500 font-semibold text-3xl rounded outline outline-3 outline-gray-300" type="submit" id="your_answer" name="your_answer" value="${selectItem}">${selectItem}</button>`;
        container.appendChild(newDiv);
    });
</script>
