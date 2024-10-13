<x-test2-layout>
    <x-slot name="title">
        単語の編集
    </x-slot>
    <h1>単語を編集・修正する</h1>
    @if ($question_type === 'normal' || $question_type === 'j_to_c')
        <input type="text" class="question" id="question" placeholder="日本語を入力" value="{{ $question }}">
        <div id="error-question"></div>

        <div id="solution_containers"></div>

        <button id="normal-add-button" class="add-button" onclick="addNormal()">別解を追加</button>
        <button id="sendjson" name="sendjson" onclick="saveJSON()">登録する</button>

        <script>
            function addNormal() {
                const container = document.getElementById('solution_containers');
                const newDiv = document.createElement('div');
                newDiv.className = 'solution_container';
                newDiv.innerHTML = `
                    <input type="number" class="sisheng" placeholder="四声を入力">
                    <input type="text" class="pinyin" placeholder="ピンインを入力">
                    <span class="sisheng_pinyin"></span>
                    &nbsp;&nbsp;
                    <input type="text" class="kantaiji" placeholder="簡体字を入力">
                    <span class="remove-button" onclick="removeNormal(this)">削除</span>
                    <div class="error-sisheng"></div>
                    <div class="error-pinyin"></div>
                    <div class="error-kantaiji"></div>
                `;
                container.appendChild(newDiv);
            }

            function removeNormal(element) {
                const container = document.getElementById('solution_containers');
                if (container.children.length > 1) {
                    container.removeChild(element.parentElement);
                } else {
                    alert('これ以上減らすことはできません');
                }
            }
        </script>

        <script type="module">
            import {
                mergeSishengPinyin
            } from '/onlysuuji.js';
            // ページが完全に読み込まれたときに実行
            function updateContent() {
                const containers = document.querySelectorAll('.solution_container');
                containers.forEach(container => {
                    container.querySelector('input.sisheng').addEventListener('input', () => {
                        container.querySelector('span.sisheng_pinyin').textContent = mergeSishengPinyin(
                            container.querySelector('input.sisheng').value, container.querySelector(
                                'input.pinyin').value);
                    });
                    container.querySelector('input.pinyin').addEventListener('input', () => {
                        container.querySelector('span.sisheng_pinyin').textContent = mergeSishengPinyin(
                            container.querySelector('input.sisheng').value, container.querySelector(
                                'input.pinyin').value);
                    });
                })
            }

            // ページが完全に読み込まれたときに実行
            document.addEventListener('DOMContentLoaded', () => {
                updateContent(); // 初期ロード時に実行
                // ボタンにイベントリスナーを追加
                document.getElementById('normal-add-button').addEventListener('click', updateContent);
                document.getElementById('sendjson').addEventListener('click', updateContent);
            });
            const old_answer = {!! $answer !!};
            console.log(old_answer);
            // sishengs の要素数を数える
            const count = old_answer.sisheng.length;

            for (let i = 0; i < count; i++) {
                const container = document.getElementById('solution_containers');
                const newDiv = document.createElement('div');
                newDiv.className = 'solution_container';
                newDiv.innerHTML = `
                            <input type="number" class="sisheng" placeholder="四声を入力" value="${old_answer.sisheng[i]}" >
                            <input type="text" class="pinyin" placeholder="ピンインを入力" value="${old_answer.pinyin[i]}" >
                            <span class="sisheng_pinyin"></span>
                            &nbsp;&nbsp;
                            <input type="text" class="kantaiji" placeholder="簡体字を入力" value="${old_answer.kantaiji[i]}" >
                            <span class="remove-button" onclick="removeNormal(this)">削除</span>
                            <div class="error-sisheng"></div>
                            <div class="error-pinyin"></div>
                            <div class="error-kantaiji"></div>
                        `;
                container.appendChild(newDiv);
            }
        </script>
    @endif
    <script>
        function checkNumber(number) {
            const str = number.toString();

            // すべての桁が0〜4の数字であるか確認
            return [...str].every(char => char >= '0' && char <= '4');
        }

        function saveJSON() {
            // 選択されたラジオボタンの値を取得
            const question_type = "{!! $question_type !!}";

            // 選択に応じて対応するコンテンツを表示
            if (question_type === 'normal') {
                const containers = document.querySelectorAll('.solution_container');
                const question = document.getElementById('question').value;

                const answer = {
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


                    // それぞれの値をanswerオブジェクトに追加
                    answer.sisheng.push(sisheng);
                    answer.pinyin.push(pinyin);
                    answer.kantaiji.push(kantaiji);

                });
                const jsonOutput = JSON.stringify(answer);
                console.log(jsonOutput);
                if (allow) {
                    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');


                    const data = {
                        id: {{ $id }},
                        answer: answer,
                        question: question
                    };

                    fetch('{{ route('chinese.modifyWord') }}', {
                            method: 'PATCH',
                            headers: {
                                'X-CSRF-TOKEN': csrfToken // CSRFトークンをヘッダーに追加
                            },
                            body: JSON.stringify(data),
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
                            console.log('リクエストの内容:', data); // リクエスト内容をコンソールに表示
                        })
                        .catch(error => {
                            console.error('エラー:', error); // エラーをコンソールに表示
                        });
                }
            } else if (question_type === 'select') {
                let allow = true;

                const containers = document.querySelectorAll('.select_container');
                const question = document.getElementById('question').value;
                const question_answer = document.getElementById('question_answer').value;

                const choices = {
                    selects: [],
                    comments: []
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


                    // それぞれの値をanswerオブジェクトに追加
                    answer.selects.push(select);
                    answer.comments.push(comment);

                });

                if (answer == "") {
                    document.getElementById('error-answer').textContent = "答えを入力してください";
                    console.error("答えを入力してください");
                    allow = false;
                } else {
                    document.getElementById('error-answer').textContent = "";
                }

                const jsonOutput = JSON.stringify(answer);
                console.log(jsonOutput);
                if (allow) {
                    const formData = new formData();
                    formData.append('jsonanswer', JSON.stringify(answer));
                    formData.append('textanswer', question);
                    formData.append('option', question_type);
                    formData.append('answer', answer);

                    fetch('test_register_.php', {
                            method: 'POST',
                            body: formData
                        })
                        .then(response => response.text())
                        .then(formData => {
                            console.log('answer saved: ' + formData);
                            // すべての input フィールドを取得
                            const inputs = document.querySelectorAll('input');

                            // それぞれの input フィールドの value を空にする
                            inputs.forEach(input => {
                                if (input.type !== 'radio' && input.type !== 'checkbox') {
                                    input.value = ''; // valueを空にする
                                }
                            });

                        })
                        .catch((error) => {
                            console.error('Error:', error);
                        });
                }
            }

        }
    </script>
</x-test2-layout>
