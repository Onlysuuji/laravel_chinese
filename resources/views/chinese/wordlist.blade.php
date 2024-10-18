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
                <div>
                    @php
                        // answerをデコードして配列に変換
                        $decodedAnswer = json_decode($item->answer, true);
                    @endphp

                    @foreach ($decodedAnswer['sisheng'] as $index => $sisheng)
                        <div>
                            <!-- sisheng, pinyin, kantaijiの各値を順に出力 -->
                            Sisheng: {{ $sisheng }}&nbsp;&nbsp; &nbsp;
                            Pinyin: {{ $decodedAnswer['pinyin'][$index] }}&nbsp;&nbsp;&nbsp;
                            簡体字: {{ $decodedAnswer['kantaiji'][$index] }}
                        </div>
                    @endforeach
                </div>
                ------------------------------------------------
            @endif
        @endforeach
    </div>

    <!-- ページネーションリンクの表示 -->
    <div>
        @if ($items->hasPages())
            <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-between">
                {{-- Previous Page Link --}}
                @if ($items->onFirstPage())
                    <span
                        class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md">
                        {!! __('pagination.previous') !!}
                    </span>
                @else
                    <a href="{{ $items->previousPageUrl() }}"
                        class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                        {!! __('pagination.previous') !!}
                    </a>
                @endif

                {{-- Next Page Link --}}
                @if ($items->hasMorePages())
                    <a href="{{ $items->nextPageUrl() }}"
                        class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                        {!! __('pagination.next') !!}
                    </a>
                @else
                    <span
                        class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md">
                        {!! __('pagination.next') !!}
                    </span>
                @endif
            </nav>
        @endif

    </div>
</x-test2-layout>
