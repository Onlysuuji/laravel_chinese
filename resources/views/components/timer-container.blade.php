<div>
    <script>
        function timerData() {
            return {
                time: 0,
                hours: 0,
                minutes: 0,
                seconds: 0, // secondsを適切に定義

                intervalId: null,
                isRunning: false,

                startTimer() {},

                stopTimer() {},

                resetTimer() {},

                setTime() {},

                saveState() {},

                get formattedTime() {},
                init() {},
            }
        }
    </script>

    <ul>
        <li><x-timer test="1"></x-timer></li>
        <li><x-timer test="2"></x-timer></li>
        <li><x-timer test="3"></x-timer></li>
    </ul>
    


    <script>
        function timerData() {
            return {
                time: 0,
                hours: 0,
                minutes: 0,
                seconds: 0,
                storageKey: '', // 保存するキー名を動的に変更したい場合のプロパティ

                intervalId: null,
                isRunning: false,
                startTimer() {

                    if (this.time <= 0) {
                        this.setTime();
                    }
                    if (this.time == 0) return;


                    this.isRunning = true;
                    this.saveState();

                    this.intervalId = setInterval(() => {
                        if (this.time > 1) {
                            this.time--;
                            this.saveState(); // 停止した状態を保存
                        } else {
                            this.time = 0;
                            this.stopTimer();
                            alert(`タイマー終了`);

                        }

                    }, 1000);
                },

                stopTimer() {
                    clearInterval(this.intervalId);
                    this.intervalId = null;
                    this.isRunning = false;
                    this.saveState(); // 停止した状態を保存
                },

                resetTimer() {
                    if (this.time <= 0) {
                        this.hours = 0;
                        this.minutes = 0;
                        this.seconds = 0;
                    }
                    this.stopTimer();
                    this.time = 0;
                    this.saveState();
                },

                setTime() {
                    this.time = (this.hours * 3600) + (this.minutes * 60) + this.seconds;
                    this.saveState();
                },

                saveState() {
                    // 現在のtimeとisRunningをlocalStorageに保存
                    localStorage.setItem(
                        this.storageKey,
                        JSON.stringify({
                            time: this.time,
                            hours: this.hours,
                            minutes: this.minutes,
                            seconds: this.seconds,
                            isRunning: this.isRunning
                        })
                    );
                },

                get formattedTime() {
                    const hours = String(Math.floor(this.time / 3600)).padStart(2, '0');
                    const minutes = String(Math.floor((this.time % 3600) / 60)).padStart(2, '0');
                    const seconds = String(this.time % 60).padStart(2, '0');
                    return `${hours}  :  ${minutes}  :  ${seconds}`;
                },

                init() {
                    const savedData = localStorage.getItem(this.storageKey);
                    if (savedData) {
                        const parsedData = JSON.parse(savedData);
                        this.time = parsedData.time || 0;
                        this.hours = parsedData.hours || 0;
                        this.minutes = parsedData.minutes || 0;
                        this.seconds = parsedData.seconds || 0;
                        this.isRunning = parsedData.isRunning || false;
                        if (this.isRunning) {
                            this.startTimer();

                        }
                    }
                }
            }
        }
    </script>



</div>
