@props(['id', 'mode'])

<script>
    async function callOpenai(prompt) {
        try {
            const response = await fetch('/call-openai', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                        'content') // Laravel用
                },
                body: JSON.stringify({
                    prompt
                }) // JSON形式で送信
            });

            if (!response.ok) {
                throw new Error('ネットワークエラーが発生しました');
            }

            const data = await response.json();
            return data.content; // サーバーからの応答（AIのcontent部分）を返す
        } catch (error) {
            console.error('エラー:', error.message);
            return ''; // エラー時は空文字を返す
        }
    }

    (async () => {
        const openaiExample = @json({{ $word->answer['english'][0], 'を使用した英文の例題を考えてください' }}); // JSONデータ
        // OpenAI APIの呼び出し
        const aiResponse = await callOpenai(openaiExample);
        {{ $slot }}

    })();
</script>
