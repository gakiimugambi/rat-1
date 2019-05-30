<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php 
 
function flipSign($a) 
{ 
	$neg = 0; 

	$tmp = $a < 0 ? 1 : -1; 
	while ($a != 0) 
	{ 
		$neg += $tmp; 
		$a += $tmp; 
	} 
	return $neg; 
} 

function areDifferentSign($a, $b) 
{ 
	return (($a < 0 && $b > 0) || 
			($a > 0 && $b < 0)); 
} 



function mul($a, $b) 
{ 
	if ($a < $b) 
		return mul($b, $a); 

	$sum = 0; 
	for ($i = abs($b); $i > 0; $i--) 
		$sum += $a; 

	if ($b < 0) 
		$sum = flipSign($sum); 

	return $sum; 
} 

$to_words = new NumberFormatter("en", NumberFormatter::SPELLOUT);
echo $to_words->format(mul(4.5, 5));

print("Product is " . mul(4.5, 5) . "\n"); 


?> 


</body>
</html>