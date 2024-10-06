<style>
    /* アイコン用のスタイル (FontAwesomeなどのライブラリが必要です) */
    @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css');

    .tab {
        display: flex;
        justify-content: space-between;
        background-color: #004d40;
        /* タブの背景色 */
        padding: 2px;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 1000;
    }

    .tab-button {
        color: white;
        text-decoration: none;
        padding: 6px 8px;
        border-radius: 5px;
        font-size: 18px;
        transition: background-color 0.3s;
    }

    .tab-button:hover {
        background-color: #00665c;
        /* ホバー時の背景色 */
    }

    /* 家のアイコンを設定 */
    .tab-button.left i {
        margin-right: 8px;
    }

    /* ホームボタンのスタイル */
    .tab-button.left {
        background-color: transparent;
    }

    /* 他のボタンのスタイル */
    .tab-button.right {
        background-color: #00665c;
        padding: 6px 15px;
        font-size: 20px;
    }

    body {
        display: flex;
        flex-direction: column;
        align-items: center;
        /* 中央に配置 */
        margin: 20px;
        /* 全体のマージン */
        font-family: Arial, sans-serif;
        margin-top: 30px;
        /* タブの高さに合わせてマージンを設定 */
    }

    .tab-button.right:hover {
        background-color: #00796b;
    }
</style>
<!-- 上のタブ -->
<nav class="tab">
    <a href="/index.php" class="tab-button left"><i class="fas fa-home"></i>ホーム</a>
    <a href="{{ route('chinese') }}" class="tab-button right">学習</a>
    <a href="{{ route('chinese.wordlist')}}" class="tab-button right">単語リスト</a>
    <a href="{{ route('chinese.register') }}" class="tab-button right">単語登録</a>
</nav>
