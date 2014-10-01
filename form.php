

<body>
<div>
<p>Project 2 - XKCD Password Generator  </p>
<p>Your current password: </p>
<p>Your new password: <?php echo ($password) ? $password : ''; ?></p>
<p>Generate a new password</p>

<form method="post" action="/index.php">

<label name="count">Enter the number of words</label>
<input type="text" id="count" name="count" /><br />

<label name="symbol">Include a symbol</label>
<input type="checkbox" id="symbol" name="symbol" value="symbol"/><br />


<label name="number">Include a number</label>
<input type="checkbox" id="number" name="number" value="number"/><br />

<input type="submit" name="sumbit" value="submit" />
</form>
</div>






</body>
