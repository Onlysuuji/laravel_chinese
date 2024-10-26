<div>
    <script>
        function timerData() {
            return {
                storageKey: '',
                timerNumber: null,

                remainingTime: 0,
                endTime: null,
                interval: null,
                isRunning: false,
                hours: 0,
                minutes: 0,
                seconds: 0,

                init() {
                    const savedData = localStorage.getItem(this.storageKey);
                    if (savedData) {
                        const parsedData = JSON.parse(savedData);
                        this.hours = parsedData.hours || 0;
                        this.minutes = parsedData.minutes || 0;
                        this.seconds = parsedData.seconds || 0;
                        this.isRunning = parsedData.isRunning || false;
                        this.remainingTime = parsedData.remainingTime || 0;
                        if (this.isRunning) {
                            this.endTime = new Date(parsedData.endTime)
                            this.startInterval();
                        }
                    }
                    console.log(this.storageKey);
                    console.log(savedData);
                },

                save(){
                    localStorage.setItem(this.storageKey, JSON.stringify({
                        hours: this.hours,
                        minutes: this.minutes,
                        seconds: this.seconds,
                        isRunning: this.isRunning, 
                        remainingTime: this.remainingTime,
                        endTime: this.endTime,
                    }));
                },

                startTimer() {
                    const currentTime = new Date();
                    if (this.remainingTime === 0) {
                        this.remainingTime = (this.hours * 3600 + this.minutes * 60 + this.seconds) * 1000;
                    }
                    if (this.remainingTime) {
                        if(this.remainingTime >=360000000){
                            this.remainingTime = 359999999;
                        }
                        this.endTime = new Date(currentTime.getTime() + this.remainingTime);
                        this.isRunning = true;
                        this.startInterval();
                    }
                },

                startInterval() {
                    this.interval = setInterval(() => {
                        const currentTime = new Date();
                        this.remainingTime = Math.max(0, this.endTime - currentTime);
                        if (this.remainingTime <= 0) {
                            this.isRunning = false;
                            this.endTime = 0;
                            this.remainingTime = 0;
                            clearInterval(this.interval);
                            const audio = new Audio('/test.mp3');
                            audio.play();

                            setTimeout(() => {
                                alert(`タイマー${this.timerNumber}\n${this.hours}時間${this.minutes}分${this.seconds}秒経過しました。`);
                                audio.pause();
                                audio.currentTime = 0; // 音声を最初から再生する場合
                            }, 100);
                            
                        }
                        this.save();
                    }, 100);
                },

                pauseTimer() {
                    clearInterval(this.interval);
                    this.isRunning = false;
                    this.save(); // 停止した状態を保存
                },

                resetTimer() {
                    if (this.remainingTime > 0 || this.isRunning) {
                        clearInterval(this.interval);
                        this.endTime = null;
                        this.isRunning = false;
                        this.remainingTime = 0;
                        this.save();
                    } else {
                        this.hours = 0;
                        this.minutes = 0;
                        this.seconds = 0;
                        this.save();
                    }
                },

                get formattedTime() {
                    const hours = String(Math.floor(this.remainingTime/1000 / 3600)).padStart(2, '0');
                    const minutes = String(Math.floor((this.remainingTime/1000 % 3600) / 60)).padStart(2, '0');
                    const seconds = String(Math.floor(this.remainingTime/1000 % 60)).padStart(2, '0');
                    return `${hours}  :  ${minutes}  :  ${seconds}`;
                },
            }
        }
    </script>

    <ul>
        <li><x-timer test="1"></x-timer></li>
        <li><x-timer test="2"></x-timer></li>
        <li><x-timer test="3"></x-timer></li>
    </ul>


</div>
