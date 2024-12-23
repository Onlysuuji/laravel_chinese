<div class="flex flex-col space-y-5">
    <div class="text-center py-2 text-2xl space-y-7">
        <p class="w-full text-2xl bg-gray-100 rounded">読み方を答えよ</p>
        <p>{{ $word->question }}</p>
    </div>
    <div class="flex flex-col items-center space-y-5">
        <p class="w-full text-2xl bg-gray-100 rounded my-2">あなたの答え </p>
        <div id="userAnswer" class="w-5/6 rounded text-xl my-3">{{ $yourenglish ?? '答えなし' }}</div>
    </div>

    <div class="flex flex-col items-center space-y-5">
        <p class="w-full text-2xl bg-gray-100 rounded">問題の答え</p>
        <div id="solution_containers" class="w-5/6 rounded"></div>
        <div x-data="{ open: false }" class="w-5/6 sm:hidden">
            <button @click="open = !open"
                class="bg-blue-50 w-full py-1 rounded shadow px-28 hover:bg-blue-100 transition duration-100 flex justify-around items-center">
                <i class="fa fa-plus" aria-hidden="true"></i>
                <div>解説を表示</div>
            </button>
            <div x-show="open" x-transition:enter="transition ease-out duration-400"
                x-transition:enter-start="opacity-0 transform scale-90"
                x-transition:enter-end="opacity-100 transform scale-100"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 transform scale-100"
                x-transition:leave-end="opacity-0 transform scale-90" class="p-4 bg-white border rounded shadow">
                <p class="text-gray-700" id="ai_answer_sm">
                    Geminiが考え中・・・
                </p>
            </div>
        </div>
    </div>
    <div class="flex flex-col items-center space-y-5">
        <p class="w-full text-2xl bg-gray-100 rounded">AIによる例題の答え</p>
        <div id="ai_examplequestion" class="w-5/6 rounded">{{ $exampleanswer }}</div>
        <div x-data="{ open: false }" class="w-5/6 rounded flex justify-center gap-x-2 items-center">
            <div name="ai_exampleanswer_close" style="cursor: pointer;" @click="open = !open" x-show="open"><i
                    class="fa-solid fa-minus"></i></div>
            <div name="ai_exampleanswer_open" style="cursor: pointer;" @click="open = !open" x-show="!open"><i
                    class="fa-solid fa-plus"></i></div>
            <div class="flex flex-col">
                <div id="ai_exampleanswer" x-show="open" x-transition:enter="transition ease-out duration-400"
                    x-transition:enter-start="opacity-0 transform scale-90"
                    x-transition:enter-end="opacity-100 transform scale-100"
                    x-transition:leave="transition ease-in duration-200"
                    x-transition:leave-start="opacity-100 transform scale-100"
                    x-transition:leave-end="opacity-0 transform scale-90">{{ $example }}</div>

            </div>

            <div id="ai_exampleanswer_sound" style="cursor: pointer;"><i class="fas fa-volume-up"></i></div>
        </div>
        <div x-data="{ open: false }" class="w-5/6 sm:hidden">
            <button @click="open = !open"
                class="bg-blue-50 w-full py-1 rounded shadow px-28 hover:bg-blue-100 transition duration-100 flex justify-around items-center">
                <i class="fa fa-plus" aria-hidden="true"></i>
                <div>解説を表示</div>
            </button>
            <div x-show="open" x-transition:enter="transition ease-out duration-400"
                x-transition:enter-start="opacity-0 transform scale-90"
                x-transition:enter-end="opacity-100 transform scale-100"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 transform scale-100"
                x-transition:leave-end="opacity-0 transform scale-90" class="p-4 bg-white border rounded shadow">
                <p class="text-gray-700" id="ai_example_sm">
                    Geminiが考え中・・・
                </p>
            </div>
        </div>
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
                        <div class="solution_english">${aa.english[i]}</div>
                        <div class="solution_sound" style="cursor: pointer;"><i class="fas fa-volume-up"></i></div>
                    `;
        const solutionEnglish = newDiv.querySelector('.solution_sound');
        solutionEnglish.addEventListener('click', function() {
            const wordElement = newDiv.querySelector('.solution_english');
            speakText(wordElement);
        });
        container.appendChild(newDiv);
        let ai_exampleanswer_text = document.getElementById('ai_exampleanswer');
        let ai_exampleanswer_sound = document.getElementById('ai_exampleanswer_sound');
        ai_exampleanswer_sound.addEventListener('click', function() {
            console.log("a");
            speakText(ai_exampleanswer_text);
        });

    }



    function speakText(element) {
        const text = element.innerText;
        const utterance = new SpeechSynthesisUtterance(text);
        utterance.lang = 'en-US';
        window.speechSynthesis.speak(utterance);
    }
</script>
