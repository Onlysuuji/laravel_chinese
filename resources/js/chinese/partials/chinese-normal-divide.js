import { mergeSishengPinyin } from "../../onlysuuji.js";

function updateContent() {
    document.getElementById('sisheng_pinyin').textContent = mergeSishengPinyin(document.getElementById(
        'yoursisheng').value, document.getElementById('yourpinyin').value);
}
updateContent(); // 初期ロード時に実行
// ボタンにイベントリスナーを追加
document.getElementById('yoursisheng').addEventListener('input', updateContent);
document.getElementById('yourpinyin').addEventListener('input', updateContent);

// 声調入力フィールドにエンターキー押下時にピンイン入力フィールドへ移動
document.getElementById('yoursisheng').addEventListener('keydown', function (event) {
    if (event.key === "Enter") {
        event.preventDefault(); // デフォルトのフォーム送信を防止
        document.getElementById('yourpinyin').focus(); // ピンイン入力フィールドにフォーカスを移動
    }
});

// ピンイン入力フィールドにエンターキー押下時に答えを確認する   
document.getElementById('yourpinyin').addEventListener('keydown', function (event) {
    if (event.key === "Enter") {
        event.preventDefault(); // デフォルトのフォーム送信を防止
        document.getElementById('goToAnswer').click(); // ボタンのクリックイベントをトリガー
    }
});