<?php
declare(strict_types=1);
require __DIR__ . "/../src/DomainReview.php";

use Portfolio\DomainReview;
use Portfolio\DomainReviewLens;

$item = new DomainReview(72, 20, 14, 91);
assert(DomainReviewLens::score($item) === 213);
assert(DomainReviewLens::lane($item) === "ship");
