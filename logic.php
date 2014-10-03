<?php

$wordlist=array ('niko', 'lucy','arielle', 'canbow', 'puppies', 'kitties', 'super', 'dynamic', 'massachusetts', 'boston', 'manhattan', 'hollywood', 'sculpture', 'funky', 'chicken', 'wassup', 'racecar', 'schnitzel', 'dworkin', 'pizza', 'turtle', 'harvard', 'digital', 'beachboys', 'radiator', 'socrates', 'pluto', 'venus', 'mars');

if (empty($_GET['count'])){ 
}
else if ($_GET['count']>0 && $_GET['count']<=5){
$wordno=$_GET['count'];
}
else {$count=false;
}

if (isset($_GET['symbol'])){
$symbol='true';
}
else {$symbol=false;
}


if (isset($_GET['number'])){
$number='true';
}
else {$number=false;
}

$symbols= ['$','*','@','!','&','%'];
$numbers= ['1','2','3','4','5','6','7','8','9'];

$password=[];
for ($i=0; $i<$wordno; $i++) {
$wordid=rand(0,count($wordlist)-1);
$word=$wordlist[$wordid];
array_push($password, $word);
}

if ($symbol=='true') {
$symbolid=rand(0,count($symbols)-1);
$word=$word.$symbols[$symbolid];
$password[$wordno-1]=$word;
}

if ($number=='true') {
$numberid=rand(0,count($numbers)-1);
$word=$word.$numbers[$numberid];
$password[$wordno-1]=$word;
}