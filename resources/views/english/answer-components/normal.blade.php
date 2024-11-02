<div class="flex flex-col space-y-5">
    <div class="text-center py-2 text-2xl space-y-7">
        <p class="w-full text-2xl bg-gray-100 rounded">読み方を答えよ</p>
        <p>{{ $word->question }}</p>
    </div>
    <div class="flex flex-col items-center space-y-5">
        <p class="w-full text-2xl bg-gray-100 rounded my-2">あなたの答え </p>
        <div id="userAnswer" class="w-5/6 rounded text-xl my-3">{{$yourenglish}}</div>
    </div>
    <div class="flex flex-col items-center space-y-5">
        <p class="w-full text-2xl bg-gray-100 rounded">問題の答え</p>
        <div id="solution_containers" class="w-5/6 rounded"></div>
    </div>
    
</div>


<script>
    const aa = {!! $word->answer !!};

    // english の要素数を数える
    const count = aa.english.length;

    for (let i = 0; i < count; i++) {
        const container = document.getElementById('solution_containers');
        const newDiv = document.createElement('div');
        newDiv.className = 'flex my-3 justify-around rounded text-xl';
        newDiv.innerHTML = `
                        <lavel>${i+1} : </lavel>
                        <div class="solution_kantaiji">${aa.english[i]}</div>
                    `;
        container.appendChild(newDiv);
    }
</script>
