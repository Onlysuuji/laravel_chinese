<div class="flex flex-col items-center space-y-5 mt-4">
    <p>通常問題</p>
    <input type="text" class="question" id="question" placeholder="日本語を入力" value="{{ $question }}">
    <div id="error-question"></div>

    <div id="solution_containers"></div>
    <div id="add_button" class="flex items-center justify-center">
        <button class="bg-blue-100 text-blue-500 px-7 py-3 mx-5 rounded" id="addNormal"
            @click="addNormal">別解を追加</button>
        <button class="bg-green-100 text-green-500 px-7 py-3 mx-5 rounded" id="sendNormal" name="sendNormal"
            @click="saveNormal">登録する</button>
        <div class="error-radio"></div>

    </div>
</div>
<script>
    function addNormal() {
        const container = document.getElementById('solution_containers');
        const newDiv = document.createElement('div');
        newDiv.className = 'solution_container';
        newDiv.innerHTML = `
dd            <input type="number" class="sisheng" placeholder="四声を入力">
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
