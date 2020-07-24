<?php
const MAX_GRADE = 100;
const MIN_ROUNDABLE_GRADE = 38;


$gradesCount = readline();
$grades = [];

for ($i = 0; $i < $gradesCount; $i++) {
    $grade = (int)trim(fgets(STDIN));
    if($grade >= MIN_ROUNDABLE_GRADE && $grade < MAX_GRADE){
        $remain = $grade % 5;
        $nextMultiple = $grade + (5 - $remain);
        $grade = ($nextMultiple - $grade) < 3 ? $nextMultiple : $grade;
    }
    $grades[] = $grade;
}

echo implode("\n", $grades);