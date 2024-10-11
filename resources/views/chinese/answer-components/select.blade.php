<div id="select_containers"></div>

<script>
    // 配列をランダムに並び替える関数
    function shuffleArray(array) {
        Math.seedrandom({{ $seed }});
        return array.sort(() => Math.random() - 0.5);
    }

    // ページが完全に読み込まれたときに実行
    const aa = {!! $choices !!};
    shuffleArray(aa.option);

    // 'aa.selects' 配列の各要素に対して処理を行う
    aa.option.forEach((selectItem) => {
        const container = document.getElementById('select_containers');
        const newDiv = document.createElement('div');
        newDiv.className = 'select_container';
        if ({{ $isCorrect }}) {
            if (selectItem == '{{ $question_answer }}') {
                newDiv.innerHTML =
                    `<button class="my-1 py-4 bg-green-200 w-[80%] text-green-500 font-semibold text-3xl rounded outline outline-3 outline-gray-300" type="submit" id="selectValue" name="selectValue" value="${selectItem}">${selectItem}</button>`;
            } else {
                newDiv.innerHTML =
                    `<button class="my-1 py-4 bg-gray-200 w-[80%] text-gray-500 font-semibold text-3xl rounded outline outline-3 outline-gray-300" type="submit" id="selectValue" name="selectValue" value="${selectItem}">${selectItem}</button>`;
            }
        } else if (!{{ $isCorrect }}) {
            if (selectItem == '{{ $question_answer }}') {
                newDiv.innerHTML =
                    `<button class="my-1 py-4 bg-yellow-200 w-[80%] text-yellow-500 font-semibold text-3xl rounded outline outline-3 outline-gray-300" type="submit" id="selectValue" name="selectValue" value="${selectItem}">${selectItem}</button>`;
            } else if (selectItem == '{{ $your_answer }}') {
                newDiv.innerHTML =
                    `<button class="my-1 py-4 bg-red-200 w-[80%] text-red-500 font-semibold text-3xl rounded outline outline-3 outline-gray-300" type="submit" id="selectValue" name="selectValue" value="${selectItem}">${selectItem}</button>`;
            } else {
                newDiv.innerHTML =
                    `<button class="my-1 py-4 bg-gray-200 w-[80%] text-gray-500 font-semibold text-3xl rounded outline outline-3 outline-gray-300" type="submit" id="selectValue" name="selectValue" value="${selectItem}">${selectItem}</button>`;
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
