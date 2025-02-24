@php
    // answerをデコードして配列に変換
    $decodedAnswer = json_decode($word->answer, true);
    $decodedTag = $word->tag ? json_decode($word->tag, true) : null;
@endphp

<div class="flex text-center w-full py-2">
    <div class="w-1/12">
        日本語から英語
    </div>
    <div class="w-1/12">
        {{ $word->question }}
    </div>
    <div class="w-3/12">
        @foreach ($decodedAnswer['english'] as $index => $english)
            <div>
                <!-- sisheng, pinyin, kantaijiの各値を順に出力 -->
                意味: {{ $english }}

            </div>
        @endforeach
    </div>
    <div class="w-2/12">
        {{ $word->comment ?? 'コメントなし' }}
    </div>

    <div class="w-3/12">
        <p>作成日: {{ $word->created_at }}&nbsp;&nbsp; &nbsp;</p>
        <p>学習予定: {{ $word->nextreview_at }}&nbsp;&nbsp;&nbsp;</p>
        <p>ランク: {{ $word->rank }}</p>
    </div>
    {{-- <div class="w-1/12">
        @if ($decodedTag) 
    @foreach ($decodedTag as $index => $tag)
        <div>
            <x-tag_decoration>
                {{ $tag }}
            </x-tag_decoration>
        </div>
    @endforeach
@else
    
    <div>タグなし</div>
    @endif
</div> --}}

    <div class="w-2/12">
        <div class="flex flex-col space-y-2 items-center w-full">
            <a href="{{ route('english.modify', ['id' => $word->id]) }}"
                class="w-20 p-2 flex items-center justify-center bg-orange-50 hover:bg-orange-100 rounded"
                type="submit">編集</a>
            <form action="{{ route('english.destroy', $word->id) }}" method="POST"
                onsubmit="return confirm('本当に削除しますか？');">
                @csrf
                @method('DELETE')
                <button type="submit"
                    class="w-20 p-2 flex items-center text-center justify-center bg-red-100 hover:bg-red-200 rounded">削除</button>
            </form>
        </div>
    </div>
</div>
