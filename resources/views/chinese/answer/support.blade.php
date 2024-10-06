<!-- 下部に固定されたタブバー -->
<div class="fixed bottom-0 left-0 w-full bg-gray-800 text-white flex justify-around py-4 z-10">
    <a href="{{ route('chinese.modify', ['id' => $id]) }}" class="text-center" type="submit">
        <svg type="submit" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-auto" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12h18M3 6h18M3 18h18" />
        </svg>
        <span class="block text-sm">単語を編集・修正する</span>
    </a>
    <a href="{{ route('chinese') }}" class="text-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-auto" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
        </svg>
        <span class="block text-sm">次の単語</span>
    </a>
</div>
