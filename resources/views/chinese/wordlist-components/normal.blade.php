<div class="flex w-full">
    <div class="flex-1 text-center">
        問題形式:
    </div>
    <div class="w-1/2">
        日本語から中国語
    </div>
</div>
@php
// answerをデコードして配列に変換
$decodedAnswer = json_decode($word->answer, true);
@endphp
<div class="flex w-full">
    <div class="flex-1 w- text-center">
        問題:
    </div>
    <div class="w-1/2">
        {{ $word->question }}
    </div>
</div>
<div class="flex gap-x-3 items-center">

    <div>
        @foreach ($decodedAnswer['sisheng'] as $index => $sisheng)
        <div>
            <!-- sisheng, pinyin, kantaijiの各値を順に出力 -->
            Sisheng: {{ $sisheng }}&nbsp;&nbsp; &nbsp;
            Pinyin: {{ $decodedAnswer['pinyin'][$index] }}&nbsp;&nbsp;&nbsp;
            簡体字: {{ $decodedAnswer['kantaiji'][$index] }}

        </div>
        @endforeach
    </div>
    <div class="flex space-x-4">
        <a href="{{ route('chinese.modify', ['id' => $word->id]) }}"
            class="p-2 flex items-center bg-orange-50 hover:bg-orange-100 rounded"
            type="submit">編集する</a>
        <form action="{{ route('chinese.destroy', $word->id) }}" method="POST"
            onsubmit="return confirm('本当に削除しますか？');">
            @csrf
            @method('DELETE')
            <button type="submit"
                class="p-2 flex items-center bg-red-100 hover:bg-red-300 rounded">削除</button>
        </form>
    </div>
</div>