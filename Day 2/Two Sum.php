<?php
class Solution {

    /**
     * Given an array of integers nums and an integer target, return indices of the two numbers such that they add up to target.
     * You may assume that each input would have exactly one solution, and you may not use the same element twice.
     * You can return the answer in any order.
     * Input: nums = [2,7,11,15], target = 9
     * Output: [0,1]
     * Explanation: Because nums[0] + nums[1] == 9, we return [0, 1].
     * Example 2:
     * 
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($numbers, $target) {
            $numIndices = [];
            for ($i = 0; $i < count($numbers); $i++) {
                $complement = $target - $numbers[$i];
                if (isset($numIndices[$complement])) {
                    return [$numIndices[$complement], $i];
                }
                $numIndices[$numbers[$i]] = $i;
            }
            return [];
    }

}

$solution = new Solution();
print_r($solution->twoSum([2,7,11,15], 9));