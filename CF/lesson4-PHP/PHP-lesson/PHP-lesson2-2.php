<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP2-2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="m-5">
<button onclick="history.back()">chapter4メニュー画面に戻る</button>


    <?php
    /*
      課題：
        - 以下のコメントに従いコードを記述してください！
            ※各設問の回答の最後には改行を入れましょう。
            <br>タグをHTMLとして出力することで改行ができます。
        - このファイルをWebブラウザで開き、問題が無ければ保存して、このファイルを提出してください。
        dockerのlesoon4-phpコンテナを起動　→　http://localhost:8000/　にアクセス　→　該当のリンクをクリック　→　結果を確認
    */
    /*  
       お釣りの計算プログラムを作成して下さい。
        所持金は2万円札とし、1円以上の任意の値段を設定した商品を購入した際のおつり（内訳）を
        出力して下さい。
        使用するお金は五千円札、千円札、500円玉、100円玉、50円玉、10円玉、5円玉、1円玉、とします。
    
        出力例
        商品の値段：4000円

        おつり内訳
        五千円札　１枚
        千円札　１枚
    */

    //この下に記述してください


//計算の関数
function calculateChange($price) {

    //おつりの計算
    $change = 20000 - $price;

    //金額の連想配列
    $denominations = [
        5000 => "五千円札",
        1000 => "千円札",
        500 => "五百円玉",
        100 => "百円玉",
        50 => "五十円玉",
        10 => "十円玉",
        5 => "五円玉",
        1 => "一円玉"
    ];

    $changeDetails = [];

    foreach ($denominations as $value => $name) {
        $count = floor($change / $value);
        if ($count > 0) {
            $changeDetails[$name] = $count;
            $change -= $count * $value;
        }
    }

    return $changeDetails;
}

// 商品の値段を設定
$price = 4000;

// おつりの計算
$changeDetails = calculateChange($price);

echo "商品の値段：{$price}円\n\n";
echo "おつり内訳\n";

foreach ($changeDetails as $denomination => $count) {
    echo "{$denomination}　{$count}枚\n";
}


    
?>
<div>
</body>
</html>