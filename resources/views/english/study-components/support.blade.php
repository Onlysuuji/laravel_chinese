<!-- 下部に固定されたタブバー全体 -->
<div class="fixed bottom-0 left-0 w-full bg-gray-800 text-white h-16 z-10">
    <!-- 左下に固定されたボタン -->
    <a href="{{ $id ? route('chinese.modify', ['id' => $id]) : route('chinese') }}"
        class="absolute left-4 bottom-4 text-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-auto" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12h18M3 6h18M3 18h18" />
        </svg>
        <span class="block text-sm">Menu</span>
    </a>

    <!-- 真ん中に入力フォームにフォーカスさせるボタン -->
    <a href="#"class="absolute left-1/2 transform -translate-x-1/2 bottom-4 text-center bg-gray-700">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-auto" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
        </svg>
        <span class="block text-sm px-40">Focus Input</span>
    </a>

    <!-- 右下に固定されたボタン -->
    <a href="#" class="absolute right-4 bottom-4 text-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-auto" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
        </svg>
        <span class="block text-sm">Check</span>
    </a>
</div>
