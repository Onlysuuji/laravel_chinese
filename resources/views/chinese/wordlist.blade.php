<x-test2-layout>
    <x-slot name="title">
        単語リスト
    </x-slot>
    <div class="flex flex-col items-center">
        @foreach ($items as $item)
            @if ($item->question_type === 'normal')
                <div>
                    日本語から中国語
                </div>
                @php
                    // answerをデコードして配列に変換
                    $decodedAnswer = json_decode($item->answer, true);
                @endphp
                <div>
                    問題: {{$item->question}}
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
                        <a href="{{ route('chinese.modify', ['id' => $item->id]) }}"
                            class="p-3 flex items-center bg-orange-50 hover:bg-orange-100 rounded" type="submit">編集する</a>
                        <form action="{{ route('chinese.destroy', $item->id) }}" method="POST"
                            onsubmit="return confirm('本当に削除しますか？');">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="p-3 flex items-center bg-red-100 hover:bg-red-300 rounded">削除</button>
                        </form>
                    </div>
                </div>
                ------------------------------------------------
            @endif
        @endforeach
    </div>

    <!-- ページネーションリンクの表示 -->
    {{ $items->links() }}
</x-test2-layout>
