 @props(['test' => "aaa"])




<div x-data="timerData()" x-init="storageKey = 'タイマー{{$test}}_{{Auth::user()->id}}';timerNumber={{$test}}; init()" class="flex flex-row justify-between items-center gap-4 px-2 py-1">
    <pre class="pt-1 font-bold h-10 w-40 flex items-center justify-center" x-text="formattedTime" x-show="remainingTime > 0">
        00:00:00</pre>

    <!-- 時間設定用の入力フィールド -->
    <div class="flex gap-1 h-10 w-40" x-show="remainingTime <= 0">
        <input type="number" placeholder="時" x-model.number="hours" @input="save" @keydown.enter.prevent="startTimer" class="rounded p-2 w-12 text-center">
        <span class="flex items-center">:</span>
        <input type="number" placeholder="分" x-model.number="minutes" @input="save" @keydown.enter.prevent="startTimer" class="rounded p-2 w-12 ">
        <span class="flex items-center">:</span>
        <input type="number" placeholder="秒" x-model.number="seconds" @input="save" @keydown.enter.prevent="startTimer" class="rounded p-2 w-12">
    </div>


    <div class="flex gap-2">
        <button @click="startTimer" x-show="!isRunning"
            class="bg-green-400 text-white rounded text-sm py-2 px-1">スタート</button>
        <button @click="pauseTimer" x-show="isRunning"   
            class="bg-red-400 text-white rounded text-sm py-2 px-1">ストップ</button>
        <button @click="resetTimer" class="bg-gray-400 text-white rounded text-sm py-2 px-1">リセット</button>
    </div>
</div>

