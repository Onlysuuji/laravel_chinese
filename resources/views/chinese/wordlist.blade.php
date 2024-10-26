<x-test2-layout>
    <x-slot name="title">
        単語リスト
    </x-slot>
    <script>
        function getData() {
            return {
                // localStorage からデータを取得
                storedData: localStorage.getItem('data'),
                data: {}, // オブジェクトスコープで変数 data を定義

                init() {
                    // データがあるかをチェック
                    if (this.storedData) {
                        // ある場合：JSON.parseでオブジェクトに変換
                        this.data = JSON.parse(this.storedData);
                        console.log('localStorageに保存されているデータ:', this.data);
                    } else {
                        // ない場合：デフォルトのデータを設定
                        const defaultData = {
                            sort: "created_at",
                            order: "desc",
                            category: ['normal', 'select'],
                            searchKeyword: ''
                        };

                        // デフォルトデータをlocalStorageに保存
                        localStorage.setItem('data', JSON.stringify(defaultData));
                        console.log('localStorageが空だったため、デフォルトデータを保存しました:', defaultData);
                        this.data = defaultData;
                    }
                },

                categoryData(test) {
                    console.log(this.data.order);

                    // categoryが正しく配列かを確認
                    if (Array.isArray(this.data.category)) {
                        if (this.data.category.includes(test)) {
                            // カテゴリが含まれている場合削除
                            this.data.category = this.data.category.filter(cat => cat !== test);
                        } else {
                            // カテゴリが含まれていない場合追加
                            this.data.category.push(test);
                        }
                    } else {
                        console.error('category is not an array or is undefined');
                    }

                    // 更新後のデータを保存
                    this.saveData();
                },

                saveData() {
                    console.log(this.data);
                    localStorage.setItem('data', JSON.stringify(this.data));
                    console.log('データが保存されました:', this.data);
                },
                generateUrl() {
                    // URLを動的に生成する関数
                    const baseUrl = `{{ route('chinese.wordlist') }}`;
                    const queryString =
                        `order=${this.data.order}&search=${this.data.searchKeyword}&sort=${this.data.sort}&${this.data.category.map(cat => `category[]=${encodeURIComponent(cat)}`).join('&')}`;
                    return `${baseUrl}?${queryString}`;
                }
            };
        }
    </script>

    <div class="flex flex-col justify-center items-center gap-y-6 my-4 w-[755px] md:w-full" x-data="getData()">
        <div class="space-y-2">
            <div class="space-x-4 flex justify-center">
                <div>
                    {{ $searchKeyword }}
                </div>

                <!-- ソートボタン 作成日 昇順 -->
                <a @click=" categoryData('normal'); saveData()" :href="generateUrl()"
                    class="px-4 py-1 rounded text-shadow-md shadow text-xs text-white"
                    :class="data.category.includes('normal') ? 'bg-yellow-400 ' : 'bg-yellow-200 hover:bg-yellow-400'">
                    日→中
                </a>

                <!-- ソートボタン 作成日 降順 -->
                <a @click=" categoryData('select'); saveData()" :href="generateUrl()"
                    class="px-4 py-1 text-white rounded text-shadow-md shadow text-xs"
                    :class="data.category.includes('select') ? 'bg-sky-400' : 'bg-sky-200 hover:bg-sky-400'">
                    選択形式
                </a>

            </div>
            <div class="">
                <!-- 検索ボックス -->
                <input type="text" placeholder="検索" class="rounded h-5 text-center" id="search"
                    x-model="data.searchKeyword" value="{{ $searchKeyword }}"
                    @keydown.enter.prevent="saveData(); window.location.href = generateUrl()" />

                <!-- 検索ボタン -->
                <a @click="saveData()" :href="generateUrl()"
                    class="px-2 py-1 rounded text-sm text-gray-800 shadow">
                    検索
                </a>
            </div>
        </div>
        <div class="flex gap-x-24">
            <div class="space-x-4">
                <!-- ソートボタン 作成日 昇順 -->
                <a @click="data.sort = 'created_at';saveData()" :href="generateUrl()"
                    class="px-4 py-2 text-white rounded text-shadow-md shadow"
                    :class="data.sort === 'created_at' ? 'bg-red-600' : 'bg-red-200 hover:bg-red-400'">
                    作成日順
                </a>

                <!-- ソートボタン 作成日 降順 -->
                <a @click="data.sort = 'updated_at';saveData()" :href="generateUrl()"
                    class="px-4 py-2 text-white rounded text-shadow-md shadow"
                    :class="data.sort === 'updated_at' ? 'bg-sky-600' : 'bg-sky-200 hover:bg-sky-400'">
                    更新日順</a>
                <a @click="data.sort = 'nextreview_at';saveData()" :href="generateUrl()"
                    class="px-4 py-2 text-white rounded text-shadow-md shadow"
                    :class="data.sort === 'nextreview_at' ? 'bg-lime-600 hover:bg-lime-500' : 'bg-lime-200 hover:bg-lime-400'">
                    学習予定</a>

            </div>

            <div class="space-x-4">

                <!-- ソートボタン ID 昇順 -->
                <a @click="data.order = 'asc';saveData()" :href="generateUrl()"
                    class="px-4 py-2 text-white rounded text-shadow-md shadow"
                    :class="(data.order === 'asc') ? 'bg-gray-700' : 'bg-gray-300 hover:bg-gray-500'">昇順</a>

                <!-- ソートボタン ID 降順 -->
                <a @click="data.order = 'desc';saveData()" :href="generateUrl()"
                    class="px-4 py-2 text-white rounded text-shadow-md shadow"
                    :class="(data.order === 'desc') ? 'bg-gray-700' : 'bg-gray-300 hover:bg-gray-500'">降順</a>

            </div>
        </div>

    </div>


    <div class=" md:flex md:justify-center">
        <div class="px-10 w-[755px] md:w-[1200px]">
            <div
                class="block md:w-full border-4 border-black ring-2 ring-black ring-offset-2 ring-offset-rose-800 text-sm">
                @forelse ($words as $word)
                        @if ($word->question_type === 'normal')
                        <div class="m-1 flex flex-col items-center bg-yellow-200 rounded">
                            @include('chinese.wordlist-components.normal')
                        @elseif($word->question_type === 'select')
                        <div class="m-1 flex flex-col items-center bg-sky-200 rounded">
                            @include('chinese.wordlist-components.select')
                        @endif
                    </div>
                @empty
                    <p class="text-center">条件に合う単語がないです</p>
                @endforelse
                {{ $words->appends(['sort' => $sort, 'order' => $order])->links() }}
            </div>
        </div>
    </div>
    <!-- ページネーションリンクの表示 -->



</x-test2-layout>
