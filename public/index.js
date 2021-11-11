function zen2han(str) {
    if (!str) return ''; // 偽であれば空文字を返す

    var hankaku_eisu = function (str) {
        if (!str) return '';
        return String.fromCharCode(str.charCodeAt(0) - 0xFEE0);
    };

    str = str.replace(/[Ａ-Ｚａ-ｚ０-９]/g, hankaku_eisu); // 英数
    str = str.replace(/[−―‐ー]/g, '-'); // 色々なハイフンも統一
    str = str.replace(/＠/g, '@'); // @マークも親切に統一
    str = str.replace(/[ts　]/g, ''); // ついでにタブやスペースを消す
    return str;
}

// 入力値の全角を半角に変換（この後バリデーションにかける）
var postaddress = zen2han(document.getElementById('postaddress').value);