<?php

/**
 * groupAnagrams funcion 
 * @param String[] $strs
 * @return String[][]
 */
function groupAnagrams($words) {
    
    $map = [];
    for($i = 0; $i < count($words); $i++) {
        $s = $words[$i];
        $temp = str_split($s);
    	// sort each word on the list
        sort($temp);
        $sorted = implode($temp);
        // construct a map where the key is each sorted word,
		// and value is a list of indices where it is present
        if($map[$sorted] == null) {
            $map[$sorted] = [];
        }
        // traverse the map and read indices for each sorted key.
		// The anagrams are present in the actual list at those indices
        array_push($map[$sorted], $words[$i]);
    }
    //return group anagrams
    return array_values($map);
}

// list of words
$words = array(
    "CARS", "REPAID", "DUES", "NOSE", "SIGNED", "LANE",
    "PAIRED", "ARCS", "GRAB", "USED", "ONES", "BRAG",
    "SUED", "LEAN", "SCAR", "DESIGN"
);

var_dump(groupAnagrams($words));

?>
