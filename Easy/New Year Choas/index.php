<?php


function minimumBribes(int $queueSize, array $queue)
{
    $numberOfSwaps = 0;
    for ($i = $queueSize - 1; $i >= 0; $i--) {
        $expectedValue = $i + 1;
        if ((int)$queue[$i] === $expectedValue) {
            continue;
        }
        $next1 = $i - 1;
        $next2 = $i - 2;

        if ($next1 >= 0 && (int)$queue[$next1] === $expectedValue) {
            $queue[$next1] = (int)$queue[$i];
            $queue[$i] = $expectedValue;
            $numberOfSwaps++;
        } elseif ($next2 >= 0 && (int)$queue[$next2] === $expectedValue) {
            $queue[$next2] = (int)$queue[$next1];
            $queue[$next1] = (int)$queue[$i];
            $queue[$i] = $expectedValue;
            $numberOfSwaps += 2;
        } else {
            echo 'Too chaotic';
            return;
        }
    }
    echo $numberOfSwaps;

}

$numberOfTests = readline();

$testCases = [];

for ($i = 0 ; $i < $numberOfTests ; $i++){
    $queueSize = readline();
    $queue = explode(' ', readline());
    $testCases[$i] = [$queueSize, $queue];
}


foreach ($testCases as $testNumber => $testCase){
    if($testNumber > 0){
        echo "\n";
    }
    minimumBribes($testCase[0], $testCase[1]);
}


