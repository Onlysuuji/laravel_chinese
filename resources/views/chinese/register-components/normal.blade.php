<script>
    function test() {


        return {
            addNormal() {
                const container = document.getElementById('normal_containers');
                const newDiv = document.createElement('div');
                newDiv.className = 'normal_container';

                newDiv.innerHTML = `
                    <span class="sisheng_pinyin"></span>
                    <input id="sisheng" type="number" class="sisheng" placeholder="四声を入力">
                    <input id="pinyin" type="text" class="pinyin" placeholder="ピンインを入力">
                    <input type="text" class="kantaiji" placeholder="簡体字を入力">
                    <button class="bg-red-100 text-red-500 px-7 py-3 mx-5 rounded" @click="removeNormal($event)">削除</button>
                    <div class="error-sisheng"></div>
                    <div class="error-pinyin"></div>
                    <div class="error-kantaiji"></div>
                `;
                container.appendChild(newDiv);
            },
            removeNormal(event) {
                const element = event.target; // クリックされたボタンのターゲット
                element.parentNode.remove(); // 親要素（div.normal_container）を削除
            }
        }
    }
</script>
<script type="module">
    import {
        mergeSishengPinyin
    } from './onlysuuji.js';

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
</script>

<div id="normal" x-data="test()" x-init="addNormal()">

    <div class="flex justify-center text-lg">
        日本語から中国語
    </div>
    <div id="normal_question">

        <div class="my-4 roungded-lg flex justify-center">
            <input type="text" id="question_normal" class="rounded-lg" placeholder="日本語を入力">
        </div>
        <div id="error-question"></div>

        <div id="normal_containers" class="normal_containers">
        </div>
    </div>

    <div id="add_button" class="flex items-center justify-center">
        <button class="bg-blue-100 text-blue-500 px-7 py-3 mx-5 rounded" id="addNormal"
            @click="addNormal(); updateContent()">別解を追加</button>
        <button class="bg-green-100 text-green-500 px-7 py-3 mx-5 rounded" id="sendNormal" name="sendNormal"
            @click="saveNormal">登録する</button>
        <div class="error-radio"></div>
    </div>

</div>


<!-- <script>
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
            console.log("a")
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            const formData = new FormData();
            formData.append('answer', JSON.stringify(data));
            formData.append('question', question);
            formData.append('question_type', 'normal');
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
    </script> -->
