<?php
declare(strict_types=1);
require __DIR__ . "/../src/Policy.php";

use Portfolio\Policy;
use Portfolio\Signal;

$signal_case_1 = new Signal(65, 103, 26, 23, 7);
assert(Policy::score($signal_case_1) === 56);
assert(Policy::classify($signal_case_1) === "review");
$signal_case_2 = new Signal(92, 76, 26, 9, 6);
assert(Policy::score($signal_case_2) === 147);
assert(Policy::classify($signal_case_2) === "review");
$signal_case_3 = new Signal(82, 95, 17, 25, 12);
assert(Policy::score($signal_case_3) === 138);
assert(Policy::classify($signal_case_3) === "review");
