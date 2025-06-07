class Solution {

    /**
     * @param Integer $target
     * @param Integer[] $nums
     * @return Integer
     */
    function minSubArrayLen($target, $nums) {
        //O(n)
        // minlegnth, left right sum 

        // 1. right 
        // 兩個指標 left right 
        // 右邊擴展 num[right] > sum
        // sum > target, 縮小左邊, 比對minLength
        // 沒找到回傳0
        
        $n = count($nums);
        $sum = 0;
        $left = 0;
        $minLength = PHP_INT_MAX;

        for ($right = 0; $right  < $n; $right++) {
            
            $sum += $nums[$right];
        
            while($sum >= $target){
                // sum < target 得知 sum每次剪去左邊指針
                $minLength = min($minLength, $right - $left + 1);
                $sum -= $nums[$left];
                $left++;
            }

        }
        
        return $minLength == PHP_INT_MAX ? 0 : $minLength;
    }
}