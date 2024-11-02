<div class="flex justify-center">
    <div id="select"
        class="gap-y-10 mt-10 ring-4 ring-gray-200 rounded-lg p-3 pb-8 w-full sm:w-8/12 flex flex-col items-center justify-center">
        <div class="flex flex-col gap-y-10 w-11/12">
            <div class="block sm:flex items-center text-lg">
                <label for="question_select" class="w-1/3">選択問題:</label> <!-- ラベルを使用 -->
                <input type="text" class="sm:w-2/3 rounded" id="question_select" placeholder="問題を入力"
                    value="{{ $word->question }}">
            </div>


            <div class="block sm:flex items-center text-lg">
                <div class="sm:w-1/3">答えの選択肢を入力:</div>

                <input type="text" id="answer" class="flex-1 rounded" placeholder="答えの選択肢を入力"
                    value="{{ $word->question_answer }}">
                <div class="error-select"></div>
            </div>

            <div class="block sm:flex justify-center text-lg ">
                <div class="sm:w-1/3 flex sm:flex-col gap-y-5 mt-5">
                    間違いの選択肢を入力:
                    <div class="flex justify-center">
                        <button class="relative bg-blue-100 text-blue-500 rounded px-5 py-2 hover:bg-blue-200"
                            onclick="addSelect()">追加</button>
                    </div>

                </div>
                <div id="select_containers" class = "w-2/3"></div>

            </div>


            <div id="comment_container" class="block sm:flex justify-center items-center text-lg">
                <p class="sm:w-1/3">解説を入れる(任意):</p>

                <input type="text" class="flex-1 rounded" id="comment" placeholder="解説を入れる"
                    value="{{ $word->comment }}">
            </div>

            <div id="add_button" class="flex items-center justify-center">
                <button class="bg-yellow-100 text-yellow-500 px-7 py-3 mx-5 rounded hover:bg-yellow-200" id="sendSelect"
                    name="sendSelect" onclick="history.back()">編集せずに戻る</button>

                <button class="bg-green-100 text-green-500 px-7 py-3 mx-5 rounded hover:bg-green-200" id="sendSelect"
                    name="sendSelect" onclick="saveSelect()">編集する</button>
                <div class="error-radio"></div>
            </div>
        </div>
    </div>
</div>
<script>
    function addSelect() {
        const container = document.getElementById('select_containers');
        const newDiv = document.createElement('div');
        newDiv.className = 'select_container flex justify-between items-center ';
        newDiv.innerHTML = `
    <input type="text" id="option" class="select" style="flex-grow: 1; border-radius: 0.25rem; margin-right: 1rem;" placeholder="選択肢を入力">
    <button class="bg-red-100 text-red-500 px-7 py-2 rounded hover:bg-red-200" onclick="removeSelect(this)">削除</button>
`;
        container.appendChild(newDiv);
    }

    const choices = {!! $word->choices !!};
    choices.option.forEach((selectItem) => {
        const container = document.getElementById('select_containers');
        const newDiv = document.createElement('div');
        newDiv.className = 'select_container flex justify-between items-center ';
        newDiv.innerHTML = `
    <input type="text" id="option" class="select" style="flex-grow: 1; border-radius: 0.25rem; margin-right: 1rem;" placeholder="選択肢を入力" value="${selectItem}">
    <button class="bg-red-100 text-red-500 px-7 py-2 rounded hover:bg-red-200" onclick="removeSelect(this)">削除</button>
`;
        container.appendChild(newDiv);
    });



    function removeSelect(element) {
        const container = document.getElementById('select_containers');
        if (container.children.length > 1) {
            container.removeChild(element.parentElement);
        } else {
            alert('これ以上減らすことはできません');
        }
    }

    function saveSelect() {
        // 選択されたラジオボタンの値を取得
        const question_type = 'select';
        let allow = true;

        const containers = document.querySelectorAll('[class*="select_container"]');
        const question = document.getElementById('question_select').value;
        const comment = document.getElementById('comment').value ?? null;

        const answer = document.getElementById('answer').value;
        if (!answer) {
            console.error('クラス "select_container" の要素が見つかりません');
            allow = false;
        }
        const data = {
            option: []
        };


        containers.forEach(container => {
            // sishengクラスとpinyinクラスを持つinputを取得
            const select = container.querySelector('input.select').value;

            if (select == "") {
                container.querySelector('div.error-select').textContent = "選択肢を入力してください  ";
                allow = false;
            } else {}
            // それぞれの値をdataオブジェクトに追加
            data.option.push(select);
        });

        const jsonOutput = JSON.stringify(data);
        console.log(jsonOutput);
        if (allow) {
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');


            const formData = new FormData();
            formData.append('id', {{ $word->id }});
            formData.append('question', question);
            formData.append('choices', JSON.stringify(data));
            formData.append('question_answer', answer);
            formData.append('comment', comment);

            formData.forEach((value, key) => {
                console.log(`${key}: ${value}`);
            });

            fetch('{{ route('english.modifyWord') }}', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken // CSRFトークンをヘッダーに追加
                    },
                    body: formData
                })
                .then(response => {
                    if (!response.ok) {
                        // HTTPエラーステータスが含まれている場合、エラーをスロー
                        return response.text().then(text => {
                            throw new Error(text);
                        });
                    }
                    const redirectUrl = response.headers.get('X-Redirect-URL');
                    if (redirectUrl) {
                        window.location.href = redirectUrl; // URLにリダイレクト
                    }
                    return response.json(); // JSONでレスポンスをパース
                })
                .then(data => {
                    // パースされたJSONデータをコンソールに出力
                    console.log('Response Data:', data); // ここでレスポンスを表示
                    console.log('Request Data:', data.request); // リクエストデータのみを表示
                    console.log('Status:', data.status); // ステータスのみを表示

                })
                .catch(error => {
                    console.error('エラー:', error); // エラーをコンソールに表示
                });
        }
    }
</script>
