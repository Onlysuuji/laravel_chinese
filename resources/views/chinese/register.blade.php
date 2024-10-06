<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite(['resources/css/app.css'])

    @include('uptab')

    <title>単語登録</title>
    <style>
        body {
            margin-top: 60px;
            text-align: center;
        }

        .hidden {
            display: none;
        }

        /* styles.css */
    </style>
</head>

<body>

    <h1>単語登録</h1>
    <div>
        <label for="normal">
            <input type="radio" name="options" value="normal" checked onclick="changeContent()">
            通常問題
        </label>

        <label for="select">
            <input type="radio" name="options" value="select" onclick="changeContent()">
            選択問題
        </label>
    </div>

    <div id="normal">
        <div id="normal_question">

            <input type="text" class="my-3" id="question_normal" placeholder="日本語を入力">
            <div id="error-question"></div>

            <div id="normal_containers" class="normal_containers">
            </div>
        </div>

        <div id="add_button" class="flex items-center justify-center">
            <button class="bg-blue-100 text-blue-500 px-7 py-3 mx-5 rounded" id="addNormal"
                onclick="addNormal()">別解を追加</button>
            <button class="bg-green-100 text-green-500 px-7 py-3 mx-5 rounded" id="sendNormal" name="sendNormal"
                onclick="saveNormal()">登録する</button>
            <div class="error-radio"></div>

        </div>
        <script>
            function addNormal() {
                const container = document.getElementById('normal_containers');
                const newDiv = document.createElement('div');
                newDiv.className = 'normal_container';

                newDiv.innerHTML = `
                    <span class="sisheng_pinyin"></span>
                    <input id="sisheng" type="number" class="sisheng" placeholder="四声を入力">
                    <input id="pinyin" type="text" class="pinyin" placeholder="ピンインを入力">
                    <input type="text" class="kantaiji" placeholder="簡体字を入力">
                    <button class="bg-red-100 text-red-500 px-7 py-3 mx-5 rounded" onclick="removeNormal(this)">削除</button>
                    <div class="error-sisheng"></div>
                    <div class="error-pinyin"></div>
                    <div class="error-kantaiji"></div>
                `;
                container.appendChild(newDiv);
            }

            function removeNormal(element) {
                const container = document.getElementById('normal_containers');
                if (container.children.length > 1) {
                    container.removeChild(element.parentElement);
                } else {
                    alert('これ以上減らすことはできません');
                }
            }

            function checkNumber(number) {
                const str = number.toString();

                // すべての桁が0〜4の数字であるか確認
                return [...str].every(char => char >= '0' && char <= '4');
            }

            function saveNormal() {
                // 選択されたラジオボタンの値を取得
                const question_type = 'normal';
                const containers = document.querySelectorAll('.normal_container');
                const question = document.getElementById('question_normal').value;

                const data = {
                    sisheng: [],
                    pinyin: [],
                    kantaiji: []
                };
                let allow = true;

                if (question == "") {
                    document.getElementById('error-question').textContent = "日本語を入力してください";
                    console.error("日本語を入力してください");
                    allow = false;
                } else {
                    document.getElementById('error-question').textContent = "";
                }


                containers.forEach(container => {
                    // sishengクラスとpinyinクラスを持つinputを取得
                    const sisheng = container.querySelector('input.sisheng').value;
                    const pinyin = container.querySelector('input.pinyin').value;
                    const kantaiji = container.querySelector('input.kantaiji').value;

                    if (sisheng == "") {
                        container.querySelector('div.error-sisheng').textContent = "四声を入力してください  ";
                        allow = false;
                    } else if (!checkNumber(sisheng)) {
                        container.querySelector('div.error-sisheng').textContent = "0から4の数字を入れてください  ";
                        allow = false;
                    } else {
                        container.querySelector('div.error-sisheng').textContent = "";
                    }

                    if (pinyin == "") {
                        container.querySelector('div.error-pinyin').textContent = "ピンインを入力してください  ";
                        allow = false;
                    } else {
                        container.querySelector('div.error-pinyin').textContent = "";
                    }
                    if (kantaiji == "") {
                        container.querySelector('div.error-kantaiji').textContent = "簡体字を入力してください  ";
                        allow = false;
                    } else {
                        container.querySelector('div.error-kantaiji').textContent = "";
                    }


                    // それぞれの値をdataオブジェクトに追加
                    data.sisheng.push(sisheng);
                    data.pinyin.push(pinyin);
                    data.kantaiji.push(kantaiji);

                });
                const jsonOutput = JSON.stringify(data);
                console.log(jsonOutput);
                if (allow) {
                    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

                    const formData = new FormData();
                    formData.append('answer', JSON.stringify(data));
                    formData.append('question', question);
                    formData.append('question_type', question_type);
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
                        .then(formData => {
                            // すべての input フィールドを取得
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
        <script type="module">
            import {
                mergeSishengPinyin
            } from '/onlysuuji.js';
            // コンテナ内の要素を更新する関数
            function updateContent() {
                const containers = document.querySelectorAll('.normal_container');
                containers.forEach(container => {
                    console.log(container);

                    container.querySelector('input.sisheng').addEventListener('input', () => {
                        container.querySelector('span.sisheng_pinyin').textContent = mergeSishengPinyin(
                            container.querySelector('input.sisheng').value, container.querySelector(
                                'input.pinyin')

                            .value);
                    });
                    container.querySelector('input.pinyin').addEventListener('input', () => {
                        container.querySelector('span.sisheng_pinyin').textContent = mergeSishengPinyin(
                            container.querySelector('input.sisheng').value, container.querySelector(
                                'input.pinyin')
                            .value);
                    });
                })
            }

            // ページが完全に読み込まれたときに実行
            document.addEventListener('DOMContentLoaded', () => {
                addNormal();
                updateContent(); // 初期ロード時に実行
                // ボタンにイベントリスナーを追加
                document.getElementById('addNormal').addEventListener('click', updateContent);
                document.getElementById('sendNormal').addEventListener('click', updateContent);
            });
        </script>

    </div>

    <div id="select" class="hidden">
        <input type="text" class="my-3" id="question_select" placeholder="問題を入力">
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
                let answer ='';
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





    <script>
        function changeContent() {
            // すべてのコンテンツを非表示にする
            document.getElementById('normal').classList.add('hidden');
            document.getElementById('select').classList.add('hidden');

            // 選択されたラジオボタンの値を取得
            const question_type = document.querySelector('input[name="options"]:checked').value;

            // 選択に応じて対応するコンテンツを表示
            if (question_type === 'normal') {
                document.getElementById('normal').classList.remove('hidden');
            } else if (question_type === 'select') {
                document.getElementById('select').classList.remove('hidden');
            }
        }







        // ページ読み込み時にnormalの内容を表示
        window.onload = changeContent;
    </script>

</body>

</html>
