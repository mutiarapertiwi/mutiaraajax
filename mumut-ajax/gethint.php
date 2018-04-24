<?php 
// ARRAY WITH NAMES
$a[] = "Mita";
$a[] = "Bila";
$a[] = "Batas";
$a[] = "Jo";
$a[] = "Madan";
$a[] = "Aini";
$a[] = "Ellen";
$a[] = "Ibuk";

//GET THE Q PARAMETER FREM URL
$q = $_REQUEST["q"];

$hint = "";

// LOOKUP ALL HINTS FROM ARRAY IF $q IS DIFFERENT FROM ""
if ($q !== "") {
	$q = strtolower($q);
	$len = strlen($q);
	foreach ($a as $name) {
		if (stristr($q, substr($name, 0, $len))) {
			if ($hint === "") {
				$hint = $name;
			} else {
				$hint .= ", $name";
			}
		}
	}
}

// OUTPUT "NO SUGGESTION" IF NO HINT WAS FOUND OR OUTPUT CORRECT VALUES
echo $hint === "" ?"no suggestion" : $hint;
 ?>