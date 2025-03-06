<?php

require_once("config/status_codes.php");

$answer_code = htmlspecialchars($_POST['answer_code'], ENT_QUOTES);
$option = htmlspecialchars($_POST['option'], ENT_QUOTES);

if (!$option) {
  header('Location: index.php');
}
foreach($status_codes as $status_code){
    if($status_code["code"] === $answer_code){
        $code = $status_code["code"];
        $description = $status_code["description"];
    }
}
$result = $option === $code;

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
    <link rel="stylesheet" href="css/result.css">
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                Status Code Quiz
            </a>
        </div>
    </header>
    <main>  <!-- ヘッダーの下全体-->
        <div class="result__content">   <!-- ヘッダーの下白いところ全部=黄緑の枠-->
            <div class="result">     <!--正誤のタイトル部分の箱＝黄色の枠-->
                <?php if($result): ?>
                <h2 class="result__text-correct">正解</h2>
                <?php else: ?>
                <h2 class="result__text-incorrect">不正解</h2>
                <?php endif; ?>
            </div>
            <div class="answer-table">  <!-- テーブルが入る箱-->
                <table class="answer-table__inner">
                    <tr class="answer-table__row">
                        <th class="answer-table__header">ステータスコード</th>
                        <td class="answer-table__text"><?php echo $code ?></td>
                    </tr>
                    <tr class="answer-table__row">
                        <th class="answer-table__header">説明</th>
                        <td class="answer-table__text"><?php echo $description ?></td>
                    </tr>
                </table>
            </div>

    </div>
</body>
</html>

                        <label class="quiz-form__label" for="<?php echo $option["code"] ?>">    <!--インライン！！選択肢ボタンの見出し-->

                        </label>