<div id="alarmDiv" class="pl-3 flex flex-row justify-around pr-3 py-2" x-data="{ alarm: null, time: null }">
    <div name="time" class="flex flex-col justify-around gap-y-3">
        <div class="flex justify-center ring-gray-300 ring-1">
            <div id="clock"></div>
        </div>
        <div id="alarm-set" class="flex flex-row justify-around">
            <input type="time" id="alarm-time" step="60" x-model="time">
        </div>
    </div>
    <div name="button" class="flex flex-col justify-around gap-y-3 w-20">
        <lavel for="reset-alarm" id="set-alarm" class="w-full flex justify-center border-b-2"
            :class="time ? 'border-green-200' : 'border-gray-200'" x-text="time ? '動作中' : 'アラームなし'">
            状態なし
        </lavel>
        <button id="reset-alarm" class="ring ring-gray-200 rounded-md text-xs h-5" @click="time = null">リセット</button>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // 現在時刻を表示する関数
        function updateClock() {
            const now = new Date(); // 現在時刻を取得
            const hours = String(now.getHours()).padStart(2, '0');
            const minutes = String(now.getMinutes()).padStart(2, '0');
            const stop = false;


            // 時間をテキスト形式で #clock 要素に表示
            $('#clock').text(`${hours}:${minutes}`);

            // アラームが設定されていて、現在時刻と一致する場合
            if ($('#alarm-time').val() && $('#alarm-time').val() === `${hours}:${minutes}`) {
                if (!stop) {
                    alert('Alarm ringing!'); // アラーム通知
                    $('#alarm-time').val(''); // アラームをリセット
                    const inputElement = document.getElementById('alarm-time');
                    inputElement.dispatchEvent(new Event('input'));
                }
            }
        }
        $('#stop-alarm')

        // 毎秒、時計を更新する
        setInterval(updateClock, 1000);
        updateClock();
    });
</script>
