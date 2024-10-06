<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>答え</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/seedrandom/2.3.11/seedrandom.min.js"></script>
    @vite(['resources/css/app.css'])
    <!--'resources/css/app.css', -->
</head>
@include('uptab')
@include('chinese/answer/support')

<style>
    body {
        margin-top: 60px;
        text-align: center;
    }

    .correct_answer {
        background-color: green;
        /* 背景色を緑色に設定 */
        color: white;
        /* テキストを白色に設定 */
        padding: 20px 40px;
        border: 1px solid #000;
    }

    .incorrect_answer {
        background-color: red;
        /* 背景色を緑色に設定 */
        color: white;
        /* テキストを白色に設定 */
        padding: 20px 40px;
        border: 1px solid #000;
    }

    .other_answer {
        background-color: gray;
        /* 背景色を緑色に設定 */
        color: white;
        /* テキストを白色に設定 */
        padding: 20px 40px;
        border: 1px solid #000;
    }

    .actual_correct_answer {
        background-color: yellow;
        /* 背景色を緑色に設定 */
        color: white;
        /* テキストを白色に設定 */
        padding: 20px 40px;
        border: 1px solid #000;
    }

    .correct {
        color: green;
    }

    .incorrect {
        background-color: yellow;
        color: red;
    }
</style>

<body>
    <!-- 問題文 -->
    <div class="w-64 h-auto">



        @if ($isCorrect == true)
            <div
                class="py-5 bg-green-200 w-[100%] mb-14 text-green-600 font-semibold text-3xl rounded outline outline-3 outline-gray-200">
                正解</div>
        @elseif ($isCorrect == false)
            <div
                class="py-5 bg-red-200 w-[100%] mb-14 text-red-600 font-semibold text-3xl rounded outline outline-3 outline-gray-200">
                不正解</div>
        @endif
        <span class="absolute left-0 transform -translate-x-full">追加する文字</span>

        <span class="text-2xl">{{ $question }}</span>
        @if ($question_type == 'j_to_c' || $question_type == 'normal')
            <h3>あなたの答え</h3>

            <!-- あなたの回答 -->
            <div id="userAnswer" class="userAnswer"></div>

            <h3>問題の答え</h3>

            <div id="solution_containers"></div>
            <script type="module">
                import {
                    mergeSishengPinyin
                } from "/onlysuuji.js";
                const aa = {!! $answer !!};

                // sisheng の要素数を数える
                const count = aa.sisheng.length;

                for (let i = 0; i < count; i++) {
                    const container = document.getElementById('solution_containers');
                    const newDiv = document.createElement('div');
                    newDiv.className = 'flex bg-green-200 my-3 justify-around rounded p-1';
                    newDiv.innerHTML = `
                        <lavel>${i+1} : </lavel>
                        <div class="solution_sishengpinyin">${mergeSishengPinyin(aa.sisheng[i],aa.pinyin[i])}</div>
                        <div class="solution_kantaiji">${aa.kantaiji[i]}</div>
                        <br>
                    `;
                    container.appendChild(newDiv);
                }
                document.getElementById('userAnswer').textContent = mergeSishengPinyin("{!! $yoursisheng !!}",
                    "{{ $yourpinyin }}");
            </script>
            <script type="module"></script>
        @elseif ($question_type == 'select' && count($errors) === 0)
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
        @endif
        <a href="{{ route('chinese') }}" class="my-8 p-3 bg-blue-200 border-3 border-blue-500 rounded"
            type="submit">次の単語</a>
    </div>
</body>

</html>
