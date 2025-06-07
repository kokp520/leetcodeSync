class Solution {

    /**
     * @param String $ransomNote
     * @param String $magazine
     * @return Boolean
     */
    function canConstruct($ransomNote, $magazine) {

        // chekc mahazine 字母次數
        // check ransomNote 每個字母再magazine還有剩餘數量
        // return 缺字母 ? false : true

        // foreach magazine
        // foreach ransomNote
        
        // $count = []; // 後來發現有魔法function array_fill(0, 26, 0);
        // for($i = 0; $i < 26; $i++){
        //     $count[] = 0;
        // } 
        $count = [];
    
        // 統計 magazine 出現次數
        for ($i=0; $i < strlen($magazine); $i++) {
            $char = $magazine[$i];
            if (!isset($count[$char])){
                $count[$char] = 0;
            }
            $count[$char]++;
        }

        // check 
        for($i=0; $i<strlen($ransomNote); $i++){
            $char = $ransomNote[$i];
            if(!isset($count[$char]) || $count[$char] == 0){
                return false;
            }
            $count[$char]--;
        }

        return true;
    }
}