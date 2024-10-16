<div class="flex flex-col space-y-5">
    <div class="text-center py-2 text-2xl space-y-5">
        <p class="w-full text-2xl bg-gray-100 rounded">読み方を答えよ</p>
        <p>{{ $question }}</p>
    </div>
    <div class="flex flex-col items-center space-y-5">
        <p class="w-full text-2xl bg-gray-100 rounded my-2">あなたの答え </p>
        <div id="userAnswer" class="w-5/6 rounded text-xl my-3"></div>
    </div>
    <div class="flex flex-col items-center space-y-5">
        <p class="w-full text-2xl bg-gray-100 rounded">問題の答え</p>
        <div id="solution_containers" class="w-5/6 rounded"></div>
    </div>

</div>


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
        newDiv.className = 'flex my-3 justify-around rounded text-xl';
        newDiv.innerHTML = `
                        <lavel>${i+1} : </lavel>
                        <div class="solution_sishengpinyin">${mergeSishengPinyin(aa.sisheng[i],aa.pinyin[i])}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                        <br>
                        <lavel>簡体字 : </lavel>
                        <div class="solution_kantaiji">${aa.kantaiji[i]}</div>
                    `;
        container.appendChild(newDiv);
    }
    document.getElementById('userAnswer').textContent = mergeSishengPinyin("{!! $yoursisheng !!}",
        "{{ $yourpinyin }}");
</script>
