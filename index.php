<!DOCTYPE html>
<html>
<head>
	<title>Morena Hash Wordlist Search</title>
</head>
<body style="background-color: red;">


	<center>
		<br><br>
		<br><br><br><br>
<br><br>
		<br><br><br><br>

<form action="islem.php" method="POST">
<h2><p style="color: white">Morena Hash Cracker</p>
<input type="text" name="hash" placeholder="hash">
<button name="gonder" type="submit">Search</button>
</form>



<?php 

if (@$_GET['durum']=='ok') {
	$durum = "hash cracked";
}else
{
	$durum = "no cracked";
}

 ?>

<?php if ($_GET) { ?>
	

 <table border="1">
	<tr>
		<th>Hash=</th>
		<th><?php echo @$_GET['hash']; ?></th>
	</tr>
	<tr>
		<th>Şifre=</th>
		<th><?php echo @$_GET['sifre']; ?></th>
	</tr>
	<tr>
		<th>durum=</th>
		<th><?php echo $durum ?></th>
	</tr>
</table>

<?php } ?>
</body>
</html>
