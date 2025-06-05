class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isPalindrome($s) {
        $s = preg_replace("/[^A-Za-z0-9]/", '', $s);
        $s = strtolower($s);
        return $s === strrev($s);
    }
}