<?php
class Solution {
    public function searchInsert($nums, $target) {
        $left = 0;
        $right = count($nums) - 1;

        while ($left <= $right) {
            $mid = $left + floor(($right - $left) / 2);

            if ($nums[$mid] == $target) {
                return $mid; 
            } elseif ($nums[$mid] < $target) {
                $left = $mid + 1;
            } else {
                $right = $mid - 1;
            }
        }

        return $left; 
    }
}

// Example usage
$solution = new Solution();
$nums = [1, 3, 5, 6];
$target = 5;
$result = $solution->searchInsert($nums, $target);
echo "Index: $result"; // Output: Index: 2