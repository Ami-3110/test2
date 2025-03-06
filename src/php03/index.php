<?php

require_once("config/status_codes.php");

$random_indexes = array_rand($status_codes, 4);

foreach($random_indexes as $index){
    $options[] = $status_codes[$index];
}

$question = $options[mt_rand(0, 3)];

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Code Quiz</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                Status Code Quiz
            </a>
        </div>
    </header>

    <main>
        <div class="quiz__content"> <!-- 白い画面全体＝緑の枠 -->
            <div class="question">  <!-- 問題文が掲載される黒い部分＝黄色の枠　-->
                <p class="question__text">Q. 以下の内容に当てはまるステータスコードを選んでください</p> <!-- 質問文 -->
                <p class="question__text">
                    <?php echo $question["description"] ?>
                </p>  <!-- ランダムなステータスの内容(phpで取得) -->
            </div>
            <form class="quiz-form" action="result.php" method="POST">  <!--ピンクの枠-->
                <input type="hidden" name="answer_code" value="<?php echo $question["code"] ?>">
                <div class="quiz-form__item">   <!--選択肢ボタンの箱-->
                    <?php foreach($options as $option): ?>
                    <div class="quiz-form__group">  <!-- 各選択肢ボタン外枠-->
                        <input class="quiz-form__radio" id="<?php echo $option["code"] ?>" type="radio" name="option" value="<?php echo $option["code"] ?>">  <!-- インライン！！各選択肢の選択入力-->
                        <label class="quiz-form__label" for="<?php echo $option["code"] ?>">    <!--インライン！！選択肢ボタンの見出し-->
                            <?php echo $option["code"] ?>
                        </label>
                    </div>
                    <?php endforeach; ?>    <!--foreachの終わり-->
                </div>
                <div class="quiz-form__button"> <!-- 回答ボタンの箱-->
                    <button class="quiz-form__button-submit" type="submit"><!--インライン！！回答ボタンの見出し-->
                    回答
                    </button>
                </div>
            </form>
        </div>
    </main>    
</body>
</html>
