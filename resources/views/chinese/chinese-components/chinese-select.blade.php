<script src="https://cdnjs.cloudflare.com/ajax/libs/seedrandom/3.0.5/seedrandom.min.js"></script>




<div class="flex flex-col justify-center mt-5">
    <!-- 問題文 -->
    <div
        class="flex justify-center items-center text-xl">
        {{ $word->question }}
    </div>

    <form id="myForm" method="post" action="{{ route('chinese.answer') }}" class="space-y-5">
        @method('PATCH')
        @csrf
        <input type="hidden" id="id" name="id" value="{{ $word->id }}">
        <p class="flex justify-center">答えはどれ</p>
        <div id="select" class="flex flex-col justify-center items-center"></div>
        <div class="flex justify-center pt-56">
            <button type="submit" class=" w-36 text-xl py-1 px-4 bg-red-100 hover:bg-red-200 text-red-400 hover:text-red-600  rounded">
                分からない
            </button>
        </div>
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
            `<button class="py-1 w-36 text-gray-700 text-xl rounded outline outline-2 outline-gray-300 hover:bg-gray-200" type="submit" id="your_answer" name="your_answer" value="${selectItem}">${selectItem}</button>`;
        container.appendChild(newDiv);
    });
</script>
