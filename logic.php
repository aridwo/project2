<?php

$wordlist=array ('niko', 'lucy',
'arielle', 'canbow', 'puppies', 'kitties', 'super', 'dynamic', 'dworkin', 'pizza', 'turtle', 'harvard', 'digital', 'beachboys');

if (isset($_POST['count'])){
	$count = $_POST['count'];

	
if(!is_numeric($count)){
		return 'please correctly re-enter the number of words.';}
		else {$count = 1;}

	
if (isset($_POST['symbol'])){
	$symbol = true;}
	else {$symbol = false;}
	
	if (isset($_POST['number'])){
	$number = true;}
	else {$number = false;}
	
	
		
	
		
		$selected_words = [];
		$symbols = ['#','$','%','&','*'];
		$numbers = [0,1,2,3,4,5,6,7,8,9];
		
		$password=[];
		for($i = 0;$1<$count; $i++){
			$max = count($words) -1;
			$rand = rand(0,$max);
			
			$word = $words[$rand];
			echo $word . '<br />';
			array_push($selected_words, $word);}
			
			if ($symbol=='checked') {
$symbolid=rand(0,count($symbolarray)-1);
$word=$word.$symbolarray[$symbolid];
$password[$count-1]=$word;
}
			
			
			if ($number=='checked') {
$numberid=rand(0,9);
$word=$word.$numberid;
$password[$count-1]=$word;
}}