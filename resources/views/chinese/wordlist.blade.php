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
                    const queryString = `order=${this.data.order}&search=${this.data.searchKeyword}&sort=${this.data.sort}&${this.data.category.map(cat => `category[]=${encodeURIComponent(cat)}`).join('&')}`;
                    return `${baseUrl}?${queryString}`;
                }
            };
        }
    
    </script>

    <div class="flex flex-col justify-center items-center gap-y-6 my-4" x-data="getData()">
        <div class="space-y-2">
            <div class="space-x-4 flex justify-center">
                <div>
                    {{$searchKeyword}}
                </div>

                <!-- ソートボタン 作成日 昇順 -->
                <a @click=" categoryData('normal'); saveData()" :href="generateUrl()"
                    class="px-4 py-1 text-white rounded text-shadow-md shadow text-xs"
                    :class="data.category.includes('normal') ? 'bg-red-600' : 'bg-red-200 hover:bg-red-400'">
                    日→中
                </a>

                <!-- ソートボタン 作成日 降順 -->
                <a @click=" categoryData('select'); saveData()" :href="generateUrl()"
                    class="px-4 py-1 text-white rounded text-shadow-md shadow text-xs"
                    :class="data.category.includes('select') ? 'bg-sky-600' : 'bg-sky-200 hover:bg-sky-400'">
                    選択形式
                </a>

            </div>
            <div class="">
                <input type="text" placeholder="検索する" class="rounded h-5 text-center" id="search"
                    @input="data.searchKeyword = $event.target.value; saveData()"  value="{{ old('search', '') }}"/>

                <a :href="generateUrl()" class="px-4 py-2 text-white rounded text-shadow-md shadow">
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


    <div class="grip place-content-center md:flex md:justify-center">
        <div class="px-10 w-[755px] md:w-[1200px]">
            <div class="block md:w-full border-4 border-black ring-2 ring-black ring-offset-2 ring-offset-rose-800">
                @if(isset($words))
                @foreach ($words as $word)
                <div class="m-1 flex flex-col items-center gap-y-3 bg-yellow-200 rounded-2xl">
                    @if ($word->question_type === 'normal')
                    @include('chinese.wordlist-components.normal')
                    @endif
                </div>
                <div class="text-center">------------------------------------------------</div>


                @endforeach
                {{ $words->appends(['sort' => $sort, 'order' => $order])->links() }}


                @else
                条件に合う単語がないです
            </div>
        </div>
    </div>
    <!-- ページネーションリンクの表示 -->



    @endif
</x-test2-layout>