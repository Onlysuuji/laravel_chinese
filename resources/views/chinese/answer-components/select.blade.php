<div class="text-center py-2 text-2xl space-y-6">
    <p class="w-full text-2xl bg-gray-100 rounded">正しい選択肢を選べ</p>
    <div class="flex">
        <p class="w-1/2 flex justify-center items-center">問題:</p>
        <p class="w-1/2 break-words">{{ $word->question }}</p>
    </div>
    <div id="select_containers"></div>

    @if ($word->comment)
        <div class="flex">
            <p class="w-1/2 flex justify-center items-center">解説:</p>
            <p class="w-1/2 break-words">{{ $word->comment }}</p>
        </div>
    @endif
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/seedrandom/3.0.5/seedrandom.min.js"></script>
<script>
    // 配列をランダムに並び替える関数
    function shuffleArray(array) {
        Math.seedrandom({{ session('seed') }});
        return array.sort(() => Math.random() - 0.5);
    }

    // ページが完全に読み込まれたときに実行
    const aa = {!! json_encode($choices) !!};
    shuffleArray(aa.option);
    console.log(aa);

    // 'aa.selects' 配列の各要素に対して処理を行う
    aa.option.forEach((selectItem) => {
        const container = document.getElementById('select_containers');
        const newDiv = document.createElement('div');
        newDiv.className = 'select_container flex flex-col justify-center items-center';
        if ({{ $isCorrect }}) {
            if (selectItem == '{{ $word->question_answer }}') {
                newDiv.innerHTML =
                    `<div class="py-1 w-36 text-green-700 bg-green-50 text-xl rounded outline outline-2 outline-green-300 type="submit" id="selectValue" name="selectValue">${selectItem}</div>`;
            } else {
                newDiv.innerHTML =
                    `<div class="py-1 w-36 text-gray-700 text-xl rounded outline outline-2 outline-gray-300 type="submit" id="selectValue" name="selectValue">${selectItem}</div>`;
            }
        } else if (!{{ $isCorrect }}) {
            if (selectItem == '{{ $word->question_answer }}') {
                newDiv.innerHTML =
                    `<div class="py-1 w-36 text-yellow-700 bg-yellow-50 text-xl rounded outline outline-2 outline-yellow-300 type="submit" id="selectValue" name="selectValue">${selectItem}</div>`;
            } else if (selectItem == '{{ $your_answer }}') {
                newDiv.innerHTML =
                    `<div class="py-1 w-36 text-red-700 bg-red-50 text-xl rounded outline outline-2 outline-red-300 type="submit" id="selectValue" name="selectValue">${selectItem}</div>`;
            } else {
                newDiv.innerHTML =
                    `<div class="py-1 w-36 text-gray-700 bg-gray-100 text-xl rounded outline outline-2 outline-gray-300 type="submit" id="selectValue" name="selectValue">${selectItem}</div>`;
            }
        }

        container.appendChild(newDiv);
    });

    window.addEventListener('load', function() {
        if (sessionStorage.getItem('reload') === 'true') {
            sessionStorage.removeItem('reload'); // フラグをリセット
            window.location.reload(); // ページをリロード
        }
    });
</script>
