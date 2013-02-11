<?php
$arrayappend=array();
$arrayappend[]=0;
$arrayappend[]=15;

echo "<!doctype html>
<html>
<head>
<meta charset='UTF-8'>
<title>Welcome</title>
</head>

<body><p>The result is (Every five elements are one group!):</p>";
echo "<p> ";
foreach($arrayappend as $value) echo $value." ";

$arrayL=array(1,2,3,3,4,5,5,6,7,9,9,10,12,14,15);
$width=15;
array_pop($arrayL);
//print_r($arrayL);
$arrayX=array(0);
$arrayX[]=$width;
$array3=array(6,10);
//print_r($arrayX);
PLACE($arrayL,$arrayX);

function PLACE(&$l,&$x) 
{  // $i=0;
	//echo "$i ";
	
	if(empty($l)) {
		foreach($x as $xi) echo "$xi ";
		 //return true;
		 }sort($l);
	$y=array_pop($l);
	$flag1=false;
	$flag2=false;
	$len=0;
	$len2=0;
	$suc=array();
	$suc2=array();
	$cc=0;
	$cc1=0;
	sort($l);
	
		for($j=0;$j<count($x);$j++){
			$length=abs($y-$x[$j]);
			//echo $length;
			for($i=0;$i<count($l);$i++){
				if($l[$i]==6) $array3[0]=$l[$i];
				//echo count($l);
			if($length==$l[$i]){
				//echo $i;
			//$flag1=true;
			$cc++;
			$len=$y;
			$suc[]=$l[$i];
			$l[$i]=-1;
			break;
								   }
								   }
		}
		if($cc==(count($x)-1)) $flag1=true;
		//echo $cc;echo $y;
		for($i=0;$i<count($suc);$i++)
		{
			for($j=0;$j<count($l);$j++){
			if($l[$j]==-1) {$l[$j]=$suc[$i]; break;}
			}
		}
		sort($l);
	if($flag1==true){
		
		echo "$y ";
		$x[]=$y;
		
			for($j=0;$j<count($x);$j++){
				$cancel=abs($x[$j]-$y);
				for($i=0;$i<count($l);$i++){
			if($l[$i]==$cancel) {unset($l[$i]);break;}
			//if($l[$i])
			}
			}
		PLACE($l,$x);
		for($i=0;$i<count($x);$i++){
			if($x[$i]==$y) {unset($x[$i]);break;}
			}
		for($j=0;$j<count($x);$j++){
				$add=abs($x[$j]-$y);
				$l[]=$add;
		}
		sort($l);
		}
	//////////////////////////////////////////////	
	sort($l);
	$addd=15-$y;
	
	for($j=0;$j<count($x);$j++){
			$length=abs($x[$j]-$addd);
			for($i=0;$i<count($l);$i++){
				if($l[$i]==10) $array3[1]=$l[$i];
			if($length==$l[$i]){
			//$flag2=true;
			$cc1++;
			$len2=$addd;
			$suc2[]=$l[$i];
			$l[$i]=-1;
			break;
								   }
								   }
		}
		if($cc1==(count($x)-1)) $flag2=true;
		
		for($i=0;$i<count($suc2);$i++)
		{
			for($j=0;$j<count($l);$j++){
			if($l[$j]==-1) {$l[$j]=$suc2[$i]; break;}
			}
		}
		sort($l);
	if($flag2==true){
		
		echo "$addd ";
		$x[]=$addd;
		for($j=0;$j<count($x);$j++){
				$cancel=abs($x[$j]-$addd);
				for($i=0;$i<count($l);$i++){
			if($l[$i]==$cancel) {unset($l[$i]);break;}
			//if($l[$i])
			}
			}
		PLACE($l,$x);
		for($i=0;$i<count($x);$i++){
			if($x[$i]==$addd) {unset($x[$i]);break;}
			}
		for($j=0;$j<count($x);$j++){
				$add=abs($x[$j]-$addd);
				$l[]=$add;
		}
		sort($l);
		}
		sort($l);
	//print_r($l);
	//print_r($x);
	
	return;
};
$arrayappend=array_merge($array3,$arrayappend);
foreach($arrayappend as $value) echo $value." ";
echo " </p></body>
</html>";