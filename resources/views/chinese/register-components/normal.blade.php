<div id="normal" class="space-y-5">

    <div class="flex justify-center text-lg">
        日本語から中国語
    </div>
    <div id="normal_question" class="space-y-5">

        <div class="roungded-lg flex justify-center">
            <input type="text" id="question_normal" class="rounded-lg w-full w-" placeholder="日本語を入力">
        </div>
        <div id="error-question"></div>

        <div id="normal_containers" class="normal_containers">
        </div>
        <div id="comment_container" class="block sm:flex justify-center items-center text-lg">
            <p class="sm:w-1/3">解説を入れる(任意):</p>
    
            <input type="text" class="flex-1 rounded" id="comment" placeholder="解説を入れる">
        </div>
    </div>

    <div id="add_button" class="flex items-center justify-center">
        <button class="bg-blue-100 text-blue-500 px-7 py-3 mx-5 rounded" id="addNormal">別解を追加</button>
        <button class="bg-green-100 text-green-500 px-7 py-3 mx-5 rounded" id="sendNormal"
            name="sendNormal">登録する</button>
        <div class="error-radio"></div>
    </div>


</div>


<script>
    function addNormal() {
        const container = document.getElementById('normal_containers');
        const newDiv = document.createElement('div');
        newDiv.className = 'normal_container';

        newDiv.innerHTML = `
                <div class="flex gap-x-2 sm:block sm:space-y-1 sm:gap-y-1">
                    <div class="flex-1 sm:flex">
                        <input id="sisheng" type="number" class="sisheng" style="border-radius: 0.25rem;width: 100%;" placeholder="四声を入力" required>
                        <input id="pinyin" type="text" class="pinyin" style="border-radius: 0.25rem;width: 100%;" placeholder="ピンインを入力">
                        <input type="text" class="kantaiji" style="border-radius: 0.25rem;width: 100%;" placeholder="簡体字を入力">
                    </div>
                    <div class="flex gap-x-2 space-x-2  hidden sm:block">
                        <div class="error-sisheng"></div>
                        <div class="error-pinyin"></div>
                        <div class="error-kantaiji"></div>
                    </div>
                    <div class="flex-1 flex flex-col sm:flex-row sm:justify-around">
                        <div class="h-10 sm:w-52   text-xl border-b-4 text-center overflow-x-auto whitespace-nowrap" >
                            <text class="sisheng_pinyin"></text>
                        </div>
                        <button class="bg-red-100 text-red-500 px-5 mx-12 my-1 py-2 rounded" onclick="removeNormal(this)">削除</button>
                    </div>
                </div>
            `;
        container.appendChild(newDiv);
    }

    function removeNormal(element) {
        const container = document.getElementById('normal_containers');
        const targetElement = element.closest('.normal_container'); // 削除対象を特定

        // targetElementがcontainerの直接の子か確認
        if (container && targetElement && Array.from(container.children).includes(targetElement)) {
            container.removeChild(targetElement);
        } else if (container.children.length <= 1) {
            alert('これ以上減らすことはできません');
        } else {
            console.warn("The node to be removed is not a direct child of the container.");
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
                container.querySelectorAll('[class*="error-sisheng"]').textContent = "四声を入力してください  ";
                allow = false;
            } else if (!checkNumber(sisheng)) {
                container.querySelector('[class*="error-sisheng"]').textContent = "0から4の数字を入れてください  ";
                allow = false;
            } else {
                container.querySelector('[class*="error-sisheng"]').textContent = "";
            }

            if (pinyin == "") {
                container.querySelector('[class*="error-pinyin"]').textContent = "ピンインを入力してください  ";
                allow = false;
            } else {
                container.querySelector('[class*="error-pinyin"]').textContent = "";
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
            const comment = document.getElementById('comment').value ?? null;

            const formData = new FormData();
            formData.append('answer', JSON.stringify(data));
            formData.append('question', question);
            formData.append('question_type', 'normal');
            formData.append('comment', comment);
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
                    const texts = document.querySelectorAll('text');

                    // それぞれの input フィールドの value を空にする
                    inputs.forEach(input => {
                        if (input.type !== 'radio' && input.type !== 'checkbox') {
                            input.value = ''; // inputのvalueを空にする
                        }
                    });

                    // クラス名が "sisheng_pinyin" の span 要素のテキスト内容を空にする
                    texts.forEach(text => {
                        if (text.classList.contains('sisheng_pinyin')) {
                            text.textContent = ''; // spanのテキストを空にする
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
        $('.normal_container').each(function() {
            const container = $(this);

            container.find('input.sisheng').on('input', function() {
                container.find('text.sisheng_pinyin').text(
                    mergeSishengPinyin(
                        container.find('input.sisheng').val(),
                        container.find('input.pinyin').val()
                    )
                );
            });

            container.find('input.pinyin').on('input', function() {
                container.find('text.sisheng_pinyin').text(
                    mergeSishengPinyin(
                        container.find('input.sisheng').val(),
                        container.find('input.pinyin').val()
                    )
                );
            });
        });
    }

    document.addEventListener('DOMContentLoaded', function() {
        $("#addNormal").click(function() {
            addNormal(); // まず、addNormal関数を実行
            updateContent(); // 次に、updateContent関数を実行
        });

        $("#sendNormal").click(function() {
            saveNormal();
            updateContent(); // 次に、updateContent関数を実行
        })

        addNormal();
        updateContent();
    });
</script>
