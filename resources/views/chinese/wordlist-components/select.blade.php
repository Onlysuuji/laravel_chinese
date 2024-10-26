@php
// answerをデコードして配列に変換
$decodedChoices = json_decode($word->choices, true);
@endphp

<div class="flex text-center w-full py-2">
    <div class="w-1/12">
        選択式
    </div>
    <div class="w-1/12">
        {{ $word->question }}
    </div>
    <div class="w-4/12">
        <div class="">
            選択問題の答え: {{$word->question_answer}}
        </div>
        @foreach ($decodedChoices['option'] as $index => $option)
        <div>
            <!-- sisheng, pinyin, kantaijiの各値を順に出力 -->
            他の選択肢: {{ $option }}&nbsp;&nbsp; &nbsp;
        </div>
        @endforeach
    </div>
    <div class="w-2/12">
        @if($word->comment)
        {{$word->comment}}
        @else
        コメントなし
        @endif
    </div>
    <div class="w-1/12">
        <div class="flex flex-col space-y-2 items-center w-full">
            <a href="{{ route('chinese.modify', ['id' => $word->id]) }}"
                class="w-20 p-2 flex items-center justify-center bg-orange-50 hover:bg-orange-100 rounded" type="submit">編集</a>
            <form action="{{ route('chinese.destroy', $word->id) }}" method="POST" onsubmit="return confirm('本当に削除しますか？');">
                @csrf
                @method('DELETE')
                <button type="submit" class="w-20 p-2 flex items-center text-center justify-center bg-red-100 hover:bg-red-200 rounded">削除</button>
            </form>
        </div>
    </div>
    <div class="w-3/12">
        <p>作成日: {{ $word->created_at }}&nbsp;&nbsp; &nbsp;</p>
        <p>学習予定: {{ $word->nextreview_at }}&nbsp;&nbsp;&nbsp;</p>
        <p>ランク: {{$word->rank}}</p>
    </div>
</div>