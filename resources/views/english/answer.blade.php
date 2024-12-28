<x-base>
    <x-slot name="title">
        答え
    </x-slot>
    <!-- 問題文 -->
    <div class="block md:flex justify-center py-3">

        <div class="md:w-3/12 hidden pl-7 pr-4 flex-col items-center">
            <div class="my-5">
                <h2>AIの例題の解説</h2>
            </div>
            <div class="pt-5 flex items-center justify-center">
                <div id="ai_example"></div>
            </div>

        </div>
        <div class="md:w-6/12 text-center flex flex-col">
            @if ($isCorrect == true)
                <div class="py-5 w-[100%] text-green-600 font-semibold text-3xl rounded text-center">
                    正解</div>
            @elseif ($isCorrect == false)
                <div class="py-5 w-[100%] text-red-400 font-semibold text-3xl rounded text-center">
                    不正解</div>
            @endif
            <script type="module">
                import OpenAI from 'openai';
                const client = new OpenAI();

                const response = await client.chat.completions.create({
                    messages: [{
                        role: 'user',
                        content: 'Say this is a test'
                    }],
                    model: 'gpt-4o-mini'
                });

                console.log(response._request_id);
            </script>


            @if ($word->question_type == 'j_to_c' || $word->question_type == 'normal')
                @include('english.answer-components.normal')
            @elseif ($word->question_type == 'select')
                @include('english.answer-components.select')
            @endif
            
        </div>

    </div>
    
</x-base>
