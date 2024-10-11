<div class>

</div>







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
