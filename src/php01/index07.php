<?php
// function exam($core1, $score2,$score3)
// {
//   $total = $score1 + $score2 + $score3;
// if($total > 210) {
//     echo "合計点は" . $total . ”なので合格です”;
// }else{
//     echo "合計点は" . $total . "なので不合格です";
// }
// }
// echo (exam(80,60,90));

// $x = 10;
// $y = 20;
// $z = 10;

// function sankaku($x , $y)
// {
//     return $x * $y / 2;
// }
// function shikaku($x , $y)
// {
//     return $x * $y;
// }
// function daikei($x , $y , $z)
// {
//     return ($x + $z) * $y / 2;
// }

//     echo sankaku;
//     echo shikaku;
//     echo daikei;

function getShikaku($base, $height)
{
  return $base * $height;
}
function getSankaku($base, $height)
{
  return $base * $height / 2;
}
function getTrapezoid($upperBase, $lowerBase, $height)
{
  return ($upperBase + $lowerBase) * $height / 2;
}

echo getShikaku(5, 5) . "\n";
echo getSankaku(7, 8) . "\n";
echo getTrapezoid(4, 5, 4);

