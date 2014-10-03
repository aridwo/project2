<!doctype html>
<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link type='text/css' rel="stylesheet" href="style.css">
<title>XKCD Password Generator</title>
<?php require'logic.php'; ?>
</head>
<body> 


<h2>Password Generator</h2>

<form method="GET" action="index.php" >
<label>Number of words (1-5) </label>
<input type="text" name="count" value=<?=$wordno?>>
<br>
<label>Include symbol</label>
<input type="checkbox" name='symbol' <?=$symbol?> >
<br>

<label>Include number</label>
<input type="checkbox" name="number" <?=$number?> >
</br>

<input type="submit" name="submit" value="SUBMIT">
</form>
<h2>Here's Your Password:</h2>
<p id="pw"><?php foreach ($password as $key => $value) {echo $value.' ';}?></p>

</body>
</html>