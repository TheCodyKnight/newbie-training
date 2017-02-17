// The string s contains dashes that split it into groups of characters.
// You are given an integer k that represents the number of characters in groups that your output should have. 
// Your goal is to return a new string that breaks s into groups with a length of k by placing dashes at the correct intervals. 
// If necessary, the first group of characters can be shorter than k. 
// It is guaranteed that there are no consecutive dashes in s.

function stringReformatting($s, $k) {
      
    $s = preg_replace('/-/', '', $s); 
    
    if (strlen($s) % $k != 0) {
        $rest = strlen($s) % $k;        
        $start = substr($s, 0, $rest);
        $start .= "-";
        
        $s = substr($s, $rest);    
    }
    
    $s = str_split($s, $k);
    
    foreach ($s as $part) {
        $part .= "-";
        print_r($part);
    }
    
    $s = implode('-', $s);
    $s = $start . $s;
    
    return $s;

}
