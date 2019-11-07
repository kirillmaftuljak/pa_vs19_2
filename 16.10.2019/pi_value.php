<?php

$maxCount = 1000;
$count = 1;
$sum = 0;
while ($count <= $maxCount) {
    // create element
    $element = 1 / (2 * $count -1);
    // if count is odd +
    if($count % 2 != 0) {
        $sum = $sum + $element;
    } else {
        // if count is even -
        $sum = $sum - $element;
    }
    //increase element number - count
    $count++;
}
echo 'pi = ' . ($sum * 4) . '<br>';
echo 'pi = ' . pi();