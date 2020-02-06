<?php

// testファイル

$tutorial_step = 3; 

$_tutorial_steps = [
    0 => null,
    1 => 'step_1',
    2 => 'step_2',
    3 => 'step_3',
    4 => 'step_4',
    5 => 'end_tutorial',
];

foreach (array_reverse($_tutorial_steps, true) as $step => $step_name) {
    if ($tutorial_step === $step) {
        break;
    }
    $next_step = $step;
}

var_dump(array_reverse($_tutorial_steps, true));





// testtest
?>