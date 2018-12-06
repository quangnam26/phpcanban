<form action="" method="post">
	<input type="text" name="name"><br>
	<input type="text" name="email"><br>
	<input type="submit">

</form>
<form action="" method="get">
	<input type="text" name="name"><br>
	<input type="text" name="email"><br>
	<input type="submit">

</form>

<h2>Welcome <?php  echo $_POST["name"]; ?></h2>
<p>Your email <?php echo $_POST["email"]; ?></p>
<h3>Welcome <?php  echo $_GET["name"]; ?></h3>
<p>Your email <?php echo $_GET["email"]; ?></p>
<?php 
$x=array(13,1,5);
$y=array(3,2,8,7);

print_r(array_merge($x,$y));
?>