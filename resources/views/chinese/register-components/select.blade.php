<div id="select">
    <div class="flex justify-center text-lg">
        選択問題
    </div>
    <div class="flex justify-center rounded-lg">
        <input type="text" class="my-3" id="question_select" placeholder="問題を入力">
    </div>
    <div id="error-question"></div>
    <div id="select_containers" class = "my-5"></div>

    <div id="add_button" class="flex items-center justify-center">
        <button class="bg-blue-100 text-blue-500 px-7 py-3 mx-5 rounded" onclick="addSelect()">追加</button>
        <button class="bg-green-100 text-green-500 px-7 py-3 mx-5 rounded" id="sendSelect" name="sendSelect"
            onclick="saveSelect()">登録する</button>
        <div class="error-radio"></div>

    </div>

    <script>
        // ページが完全に読み込まれたときに実行
        document.addEventListener('DOMContentLoaded', () => {
            addSelect();
            addSelect();
        });

        function addSelect() {
            const container = document.getElementById('select_containers');
            const newDiv = document.createElement('div');
            newDiv.className = 'select_container';
            newDiv.innerHTML = `
            <label class="ms-2 text-sm font-xl text-gray-900 dark:text-gray-300">答えの選択肢を選んでください</label>
            <input id="default-radio" type="radio" value="" name="default-radio" class="radio">

            <input type="text" id="option" class="select" placeholder="選択肢を入力">
            <input type="text" class="select_comment" placeholder="選択肢の解説を入力">
            <button class="bg-red-100 text-red-500 px-7 py-3 mx-5 rounded" onclick="removeSelect(this)">削除</button>
            <div class="error-select"></div>
        `;
            container.appendChild(newDiv);
        }

        function removeSelect(element) {
            const container = document.getElementById('select_containers');
            if (container.children.length > 2) {
                container.removeChild(element.parentElement);
            } else {
                alert('これ以上減らすことはできません');
            }
        }

        function saveSelect() {
            // 選択されたラジオボタンの値を取得
            const question_type = 'select';
            let allow = true;

            const containers = document.querySelectorAll('.select_container');
            const question = document.getElementById('question_select').value;
            const selectedRadio = document.querySelector('.radio:checked');
            let answer = '';
            if (selectedRadio) {
                const container = selectedRadio.closest('.select_container');
                if (container) {
                    const selectInput = container.querySelector('.select');
                    if (selectInput) {
                        answer = selectInput.value;
                        document.getElementById('error-question').textContent = "";
                        console.log('選択肢の値:', answer);
                    } else {
                        console.error('クラス "select" の要素が見つかりません');
                    }
                } else {
                    console.error('クラス "select_container" の要素が見つかりません');
                }
            } else {
                console.log("b");

                document.getElementById('error-question').textContent = "答えを選択してください";
                allow = false;
            }

            const data = {
                option: [],
                comment: []
            };
            if (question == "") {
                document.getElementById('error-question').textContent = "問題を入力してください";
                console.error("問題を入力してください");
                allow = false;
            } else {
                document.getElementById('error-question').textContent = "";
            }


            containers.forEach(container => {
                // sishengクラスとpinyinクラスを持つinputを取得
                const select = container.querySelector('input.select').value;
                const comment = container.querySelector('input.select_comment').value;

                if (select == "") {
                    container.querySelector('div.error-select').textContent = "選択肢を入力してください  ";
                    allow = false;
                } else {
                    container.querySelector('div.error-select').textContent = "";
                }


                // それぞれの値をdataオブジェクトに追加
                data.option.push(select);
                data.comment.push(comment);

            });

            const jsonOutput = JSON.stringify(data);
            console.log(jsonOutput);
            if (allow) {
                const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');


                const formData = new FormData();
                formData.append('question', question);
                formData.append('choices', JSON.stringify(data));
                formData.append('question_type', question_type);
                formData.append('question_answer', answer);

                formData.forEach((value, key) => {
                    console.log(`${key}: ${value}`);
                });

                fetch('{{ route('chinese.registerToDB') }}', {
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
                        return response.json(); // JSONでレスポンスをパース
                    })
                    .then(data => {
                        // パースされたJSONデータをコンソールに出力
                        console.log('Response Data:', data); // ここでレスポンスを表示
                        console.log('Request Data:', data.request); // リクエストデータのみを表示
                        console.log('Status:', data.status); // ステータスのみを表示

                        const inputs = document.querySelectorAll('input');

                        // それぞれの input フィールドの value を空にする
                        inputs.forEach(input => {
                            if (input.type !== 'radio' && input.type !== 'checkbox') {
                                input.value = ''; // valueを空にする
                            }
                        });
                    })
                    .catch(error => {
                        console.error('エラー:', error); // エラーをコンソールに表示
                    });
            }
        }
    </script>


</div>
