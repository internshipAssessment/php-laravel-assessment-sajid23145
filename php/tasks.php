<?php
/**
 * PHP 8+
 * Edit only inside the TODO blocks.
 *
 * Quick self-check (optional):
 *   php php/tasks.php
 */

// ------------------------------------------------------------
// Task 1 — firstUniqueChar(string $s): ?string
// Return the first non-repeating character or null if none.
// ------------------------------------------------------------
function firstUniqueChar(string $s): ?string {
    $charCounts = [];

    // First pass: Count character occurrences
    for ($i = 0; $i < strlen($s); $i++) {
        $char = $s[$i];
        if (!isset($charCounts[$char])) {
            $charCounts[$char] = 0;
        }
        $charCounts[$char]++;
    return ;
}

// ------------------------------------------------------------
// Task 2 — sumOrder(array $items): int
// $items = [['qty'=>2,'unit_price'=>150], ['qty'=>1,'unit_price'=>299]];
// Return the integer total (e.g., 599)
// ------------------------------------------------------------
function sumOrder(array $items): int {
    $total = 0;
    foreach ($items as $item) {
        $total += $item['qty'] * $item['unit_price'];
    }
    return $total;
    
}

// ------------------------------------------------------------
// Optional quick tests (won’t be graded by runner)
// Run: php php/tasks.php
// ------------------------------------------------------------
if (PHP_SAPI === 'cli' && basename(__FILE__) === basename($_SERVER['argv'][0])) {
    echo "Self-check:\n";

    $res1 = firstUniqueChar("swiss");   // expected 'w'
    echo "firstUniqueChar('swiss') => "; var_dump($res1);

    $res2 = firstUniqueChar("aabb");    // expected null
    echo "firstUniqueChar('aabb') => "; var_dump($res2);

    $total = sumOrder([
        ['qty'=>2,'unit_price'=>150],
        ['qty'=>1,'unit_price'=>299],
    ]); // expected 599
    echo "sumOrder(...) => $total\n";
}
