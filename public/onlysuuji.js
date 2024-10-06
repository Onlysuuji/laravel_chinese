

export function processInput(input) {
    // 最初に 'v' を 'ü' に置き換える
    input = input.replace(/v/g, 'ü');

    // 取り除く文字とその置き換え
    const replacements = [
        { regex: /iang|uang|ueng|iong/g, map: { 'iang': '____', 'uang': '____', 'ueng': '____', 'iong': '____' } },
        { regex: /üan|ang|eng|ing|ong|ian|uan|uen|iao|iou|uai|uei/g, map: { 'üan': '___', 'ang': '___', 'eng': '___', 'ing': '___', 'ong': '___', 'ian': '___', 'uan': '___', 'uen': '___', 'iao': '___', 'iou': '___', 'uai': '___', 'uei': '___' } },
        { regex: /er|ai|ei|ao|ou|ia|ie|ua|uo|üe|an|en|in|ün|iu|ui|un/g, map: { 'er': '__', 'ai': '__', 'ei': '__', 'ao': '__', 'ou': '__', 'ia': '__', 'ie': '__', 'ua': '__', 'uo': '__', 'üe': '__', 'an': '__', 'en': '__', 'in': '__', 'ün': '__', 'iu': '__', 'ui': '__', 'un': '__' } },
        { regex: /a|o|e|i|u|ü/g, map: { 'a': '_', 'o': '_', 'e': '_', 'i': '_', 'u': '_', 'ü': '_' } }
    ];



    replacements.forEach(({ regex, map }) => {
        input = input.replace(regex, match => map[match] || match);
    });

    return input;
}
export function subtractPatterns(original, pattern) {
    // 置き換えた結果を格納する配列
    let result = [];

    // 元の文字列とパターンの長さを取得
    const length = original.length;

    for (let i = 0; i < length; i++) {
        // パターンがアンダースコアでない場合、元の文字を追加
        if (pattern[i] !== '_') {
            result.push('_');
        } else {
            result.push(original[i]);
        }
    }

    return result.join('');
}
export function tosisheng(input) {
    // 最初に 'v' を 'ü' に置き換える
    input = input.replace(/v/g, 'ü');

    // 取り除かれた文字を格納する配列
    let removedChars = [];

    // 取り除く文字とその置き換え
    const replacements = [
        { regex: /iang|uang|ueng|iong/g, map: { 'iang': '1-', 'uang': '2-', 'ueng': '3-', 'iong': '4-' } },
        { regex: /üan|ang|eng|ing|ong|ian|uan|uen|iao|iou|uai|uei/g, map: { 'üan': '5-', 'ang': '6-', 'eng': '7-', 'ing': '8-', 'ong': '9-', 'ian': '10-', 'uan': '11-', 'uen': '12-', 'iao': '13-', 'iou': '14-', 'uai': '15-', 'uei': '16-' } },
        { regex: /er|ai|ei|ao|ou|ia|ie|ua|uo|üe|an|en|in|ün|iu|ui|un/g, map: { 'er': '17-', 'ai': '18-', 'ei': '19-', 'ao': '20-', 'ou': '21-', 'ia': '22-', 'ie': '23-', 'ua': '24-', 'uo': '25-', 'üe': '26-', 'an': '27-', 'en': '28-', 'in': '29-', 'ün': '30-', 'iu': '31-', 'ui': '32-', 'un': '33-' } },
        { regex: /a|o|e|i|u|ü/g, map: { 'a': '34-', 'o': '35-', 'e': '36-', 'i': '37-', 'u': '38-', 'ü': '39-' } }
    ];




    replacements.forEach(({ regex, map }) => {
        input = input.replace(regex, match => map[match] || match);
    });



    return input;
}
export function extractNumbers(input) {
    // ハイフンで分割し、各部分の数字を取り出す
    return input.split('-').map(part => {
        // すべてのアンダースコアを取り除く
        return part.replace(/_/g, ''); // アンダースコアをすべて削除
    }).filter(num => num); // 空の文字列を除外する
}
export function replaceNumbers(inputs) {
    const replacements = [
        { regex: /39/g, replacement: 'ü' },
        { regex: /38/g, replacement: 'u' },
        { regex: /37/g, replacement: 'i' },
        { regex: /36/g, replacement: 'e' },
        { regex: /35/g, replacement: 'o' },
        { regex: /34/g, replacement: 'a' },
        { regex: /33/g, replacement: 'un' },

        { regex: /32/g, replacement: 'ui' },

        { regex: /31/g, replacement: 'iu' },

        { regex: /30/g, replacement: 'ün' },
        { regex: /29/g, replacement: 'in' },
        { regex: /28/g, replacement: 'en' },
        { regex: /27/g, replacement: 'an' },
        { regex: /26/g, replacement: 'üe' },
        { regex: /25/g, replacement: 'uo' },
        { regex: /24/g, replacement: 'ua' },
        { regex: /23/g, replacement: 'ie' },
        { regex: /22/g, replacement: 'ia' },
        { regex: /21/g, replacement: 'ou' },
        { regex: /20/g, replacement: 'ao' },
        { regex: /19/g, replacement: 'ei' },
        { regex: /18/g, replacement: 'ai' },
        { regex: /17/g, replacement: 'er' },
        { regex: /16/g, replacement: 'uei' },
        { regex: /15/g, replacement: 'uai' },
        { regex: /14/g, replacement: 'iou' },
        { regex: /13/g, replacement: 'iao' },
        { regex: /12/g, replacement: 'uen' },
        { regex: /11/g, replacement: 'uan' },
        { regex: /10/g, replacement: 'ian' },
        { regex: /9/g, replacement: 'ong' },
        { regex: /8/g, replacement: 'ing' },
        { regex: /7/g, replacement: 'eng' },
        { regex: /6/g, replacement: 'ang' },
        { regex: /5/g, replacement: 'üan' },
        { regex: /4/g, replacement: 'iong' },
        { regex: /3/g, replacement: 'ueng' },
        { regex: /2/g, replacement: 'uang' },
        { regex: /1/g, replacement: 'iang' }
    ];
    const e1 = [];
    inputs.forEach(input => {
        replacements.forEach(({ regex, replacement }) => {
            input = input.replace(regex, replacement);
        });
        e1.push(input); // 修正: inputをe1に追加
    });

    return e1;
}
export function replacepinyin(inputs, numbers) {
    const f1 = [];
    const replace_a = ['a', 'an', 'ua', 'ia', 'ao', 'ai', 'uai', 'iao', 'uan', 'ian', 'ang', 'üan', 'uang', 'iang'];
    const replace_e = ['e', 'en', 'üe', 'ie', 'ei', 'er', 'uei', 'uen', 'ueng', 'eng'];
    const replace_o = ['o', 'uo', 'ou', 'iou', 'ong', 'iong'];
    const replace_i = ['i', 'in', 'ing', 'eng', 'ui'];
    const replace_u = ['u', 'iu','un'];
    const replace_ü = ['ü', 'ün'];

    if (inputs.length > numbers.length) {
        numbers.push(...Array(inputs.length - numbers.length).fill(0));
    }


    function sisheng_fetch(varc, num) {
        switch (varc) {
            case 'a':
                switch (num) {
                    case 0:
                        return 'a';
                        break;
                    case 1:
                        return 'ā';
                        break;
                    case 2:
                        return 'á';
                        break;
                    case 3:
                        return 'ǎ';
                        break;
                    case 4:
                        return 'à';
                        break;
                }
            case 'e':
                switch (num) {
                    case 0:
                        return 'e';
                        break;
                    case 1:
                        return 'ē';
                        break;
                    case 2:
                        return 'é';
                        break;
                    case 3:
                        return 'ě';
                        break;
                    case 4:
                        return 'è';
                        break;
                }
            case 'o':
                switch (num) {
                    case 0:
                        return 'o';
                        break;
                    case 1:
                        return 'ō';
                        break;
                    case 2:
                        return 'ó';
                        break;
                    case 3:
                        return 'ǒ';
                        break;
                    case 4:
                        return 'ò';
                        break;
                }
            case 'i':
                switch (num) {
                    case 0:
                        return 'i';
                        break;
                    case 1:
                        return 'ī';
                        break;
                    case 2:
                        return 'í';
                        break;
                    case 3:
                        return 'ǐ';
                        break;
                    case 4:
                        return 'ì';
                        break;
                }
            case 'u':
                switch (num) {
                    case 0:
                        return 'u';
                        break;
                    case 1:
                        return 'ū';
                        break;
                    case 2:
                        return 'ú';
                        break;
                    case 3:
                        return 'ǔ';
                        break;
                    case 4:
                        return 'ù';
                        break;
                }
            case 'ü':
                switch (num) {
                    case 0:
                        return 'ü';
                        break;
                    case 1:
                        return 'ǖ';
                        break;
                    case 2:
                        return 'ǘ';
                        break;
                    case 3:
                        return 'ǚ';
                        break;
                    case 4:
                        return 'ǜ';
                        break;
                }
        }

    }

    // inputs と numbers の長さを取得
    const length = Math.min(inputs.length, numbers.length); // 最小の長さを取得

    for (let i = 0; i < length; i++) {
        let input = inputs[i];       // inputs の要素
        const number = numbers[i];     // numbers の要素

        switch (true) {
            case replace_a.includes(input):
                input = input.replace('a', sisheng_fetch('a', number));
                break;
            case replace_e.includes(input):
                input = input.replace('e', sisheng_fetch('e', number));
                break;
            case replace_o.includes(input):
                input = input.replace('o', sisheng_fetch('o', number));
                break;
            case replace_i.includes(input):
                input = input.replace('i', sisheng_fetch('i', number));
                break;
            case replace_u.includes(input):
                input = input.replace('u', sisheng_fetch('u', number));
                break;
            case replace_ü.includes(input):
                input = input.replace('ü', sisheng_fetch('ü', number));
                break;
            default:
                // どちらにも含まれていない場合の処理
                console.log("Input is not in");
                break;
        }



        f1.push(input); // 修正: inputをf1に追加
    }
    return f1;
}
export function removenumber(input) {
    let result = input.replace(/\d+/g, ''); // 数字を空文字列に置き換える

    return result;
}
function putpinyin(base, vars) {
    let result = '';
    let count = 0; // 数字のインデックス
    for (let char of base) {
        // 文字が '-' のとき
        if (char === '-') {
            // 数字を追加
            if (count < vars.length) {
                result += vars[count];
                result += ' ';
                count++;
            }
        } else {
            result += '_';
        }
    }
    return result;
}
function output_i_func(b, s) {
    let result = '';
    let count = 0;
    for (let char of s) {
        // 文字が '-' のとき
        if (char === '_') {
            result += b[count];
            count++;

        } else if (char === ' ') {
            result += ' ';
        } else {
            result += char;
            count++;

        }

    }
    return result;

}
export function mergeSishengPinyin(sisheng, pinyin) {

    // 入力された値に対して関数を連続的に適用
    const i1 = output_i_func(
        processInput(pinyin),
        putpinyin(
            removenumber(tosisheng(subtractPatterns(pinyin, processInput(pinyin)))),
            replacepinyin(replaceNumbers(extractNumbers(tosisheng(subtractPatterns(pinyin, processInput(pinyin))))), Array.from(String(sisheng), Number))
        )
    );

    return i1;
}

export function extractAndMergeSishengPinyin(sisheng_pinyin) {

    // 文字だけを抽出
    const pinyin = sisheng_pinyin.replace(/[0-9]/g, '');  
    // 0から4までの数字だけを抽出
    const sisheng = sisheng_pinyin.replace(/[^0-4]/g, '');
    // 入力された値に対して関数を連続的に適用
    const i1 = output_i_func(
        processInput(pinyin),
        putpinyin(
            removenumber(tosisheng(subtractPatterns(pinyin, processInput(pinyin)))),
            replacepinyin(replaceNumbers(extractNumbers(tosisheng(subtractPatterns(pinyin, processInput(pinyin))))), Array.from(String(sisheng), Number))
        )
    );
    return i1;
}