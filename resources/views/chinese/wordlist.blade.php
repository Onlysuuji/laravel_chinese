<x-test2-layout>
    <x-slot name="title">
        単語リスト
    </x-slot>
    <script>
        function getQueryParams() {
            const params = new URLSearchParams(window.location.search);
            return {
                sort: params.get('sort') || 'created_at',
                order: params.get('order') || 'asc'
            };
        }
    </script>
    <div class="flex flex-col justify-center items-center gap-y-6 my-4" x-data="getQueryParams">
        <div class="space-x-4">
            <!-- ソートボタン 作成日 昇順 -->
            <a @click="sort = 'created_at'"
                :href="'{{ route('chinese.wordlist') }}?sort=' + sort + '&order=' + order"
                class="px-4 py-2 text-white rounded"
                :disabled="true"
                :class="(sort === 'created_at') ? 'bg-red-600' : 'bg-red-200 hover:bg-red-400'">
                作成日順
            </a>
    
            <!-- ソートボタン 作成日 降順 -->
            <a @click="sort = 'updated_at'"
               :href="'{{ route('chinese.wordlist') }}?sort=' + sort + '&order=' + order"
               class="px-4 py-2 text-white rounded"
               :class="(sort === 'updated_at') ? 'bg-sky-600' : 'bg-sky-200 hover:bg-sky-400'">
               更新日順</a>

        </div>

        <div class="space-x-3F">
    
            <!-- ソートボタン ID 昇順 -->
            <a @click="order = 'asc'"
               :href="'{{ route('chinese.wordlist') }}?sort=' + sort + '&order=' + order"
               class="px-4 py-2 text-white rounded"
               :class="(order === 'asc') ? 'bg-gray-700' : 'bg-gray-300 hover:bg-gray-500'">昇順</a>
        
            <!-- ソートボタン ID 降順 -->
            <a @click="order = 'desc'"
               :href="'{{ route('chinese.wordlist') }}?sort=' + sort + '&order=' + order"
               class="px-4 py-2 text-white rounded"
               :class="(order === 'desc') ? 'bg-gray-700' : 'bg-gray-300 hover:bg-gray-500'">降順</a>

        </div>
    </div>
    


    <div class="flex flex-col items-center">
        @foreach ($items as $item)
@if ($item->question_type === 'normal')
<div>
                    問題形式: 日本語から中国語<br><br>
                </div>
                @php
                    // answerをデコードして配列に変換
                    $decodedAnswer = json_decode($item->answer, true);
                @endphp
                <div>
                    問題: {{ $item->question }}<br><br>
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
            class="p-2 flex items-center bg-orange-50 hover:bg-orange-100 rounded" type="submit">編集する</a>
        <form action="{{ route('chinese.destroy', $item->id) }}" method="POST"
            onsubmit="return confirm('本当に削除しますか？');">
            @csrf
            @method('DELETE')
            <button type="submit" class="p-2 flex items-center bg-red-100 hover:bg-red-300 rounded">削除</button>
        </form>
    </div>
    </div>
    ------------------------------------------------
    @endif
    @endforeach
    </div>

    <!-- ページネーションリンクの表示 -->
    {{ $items->appends(['sort' => $sort, 'order' => $order])->links() }}
</x-test2-layout>
