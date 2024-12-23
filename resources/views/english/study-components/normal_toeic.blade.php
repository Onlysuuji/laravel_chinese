<div class="flex flex-col justify-center">
    <form id="submitAnswer" action="{{ route('english.answer') }}"
        class="w-full flex flex-col justify-center items-center mt-4 gap-y-20" method="post">
        @csrf
        @method('PATCH')

        <input type="hidden" name="id" value="{{ $word->id }}">

        <div class="text-center px-20 py-2 mb-5 text-2xl space-y-6">
            <p class="text-3xl ">読み方を答えよ</p>
            <p>{{ $word->question }}</p>
        </div>

        <div class="flex flex-col justify-center items-center gap-y-3">
            <input type="text" id="yourenglish" class="border-none outline outline-3 outline-gray-200 rounded"
                name="yourenglish" placeholder="英語を入力"value="{{ old('yourenglish', '') }}" />


            <button type="submit" id="goToAnswer" name="goToAnswer"
                class=" w-24 py-2 font-medium text-lg bg-green-200 text-green-500 rounded">答え</button>

        </div>

    </form>
    <form id="myForm" method="post" action="{{ route('english.answer') }}" class="space-y-5">
        @method('PATCH')
        @csrf
        <input type="hidden" id="id" name="id" value="{{ $word->id }}">
        <div id="select" class="flex flex-col justify-center items-center"></div>
        <div class="flex justify-center pt-5">
            <button type="submit"
                class="w-36 text-xl mb-5 py-1 px-4 bg-yellow-100 hover:bg-yellow-200 text-yellow-400 hover:text-yellow-600 rounded">
                分からない
            </button>
        </div>

    </form>
    <form action="{{ route('english.destroy', $word->id) }}" method="POST" onsubmit="return confirm('本当に削除しますか？');">
        @csrf
        @method('DELETE')
        <div class="flex justify-center">
            <button type="submit"
                class="w-36 text-xl py-1 px-4 bg-red-100 hover:bg-red-200 text-red-400 hover:text-red-600 rounded">削除</button>

        </div>
    </form>
</div>