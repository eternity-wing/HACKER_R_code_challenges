<?php



function printLadderBoard(int $numberOfScores, array $scores, int $numberOfAliceScores,array $aliceScores){
    $aliceRankString = '';
    $previousScore = null;
    $aliceScoreIndex = $numberOfAliceScores - 1;
    $rank = 0;

    $scoreIndex = 0;
    $previousAliceScore = null;


    while($aliceScoreIndex >= 0){
        $score = (int)$scores[$scoreIndex];

        $isNewScore = $previousScore !== $score;
        if($isNewScore){
            $rank++;
        }
        $previousScore = $score;


        $aliceScore = (int)$aliceScores[$aliceScoreIndex];
        $isLastScoreIndex = $scoreIndex === ($numberOfScores - 1);
        if ($aliceScore < $score && !$isLastScoreIndex) {
            $scoreIndex++;
            continue;
        }


        do{
            $aliceRank = $isLastScoreIndex && $score > $aliceScores[$aliceScoreIndex] ? $rank + 1 : $rank;
            $aliceRankString = $aliceRank . (($aliceRankString !== '' ? "\n" : '') . $aliceRankString ) ;
            $aliceScoreIndex--;
            $alicePreviousScoreHasSameRank = $aliceScoreIndex >= 0 && ($isLastScoreIndex || $score <= (int)$aliceScores[$aliceScoreIndex]);
        }while($alicePreviousScoreHasSameRank);
    }
    echo  $aliceRankString;
}

$numberOfScores = readline();
$spaceSeparatedScores = readline();
$numberOfAliceScores = readline();
$aliceSpaceSeparatedScores = readline();


$scores = explode(' ', $spaceSeparatedScores);
$aliceScores = explode(' ', $aliceSpaceSeparatedScores);

printLadderBoard($numberOfScores, $scores, $numberOfAliceScores, $aliceScores);
