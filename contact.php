<?php 
$pageTitle = 'Contact Us';
include ('includes/header.php');
?>
<h2 align="center" > Send us an email and we'll get right back to you. </h2>

<div>
	<form action="mailto:pacificdevteam@gmail.com" method="post" enctype="text/plain">
	Name:<br>
		<input type="text" name="name"><br>
	E-mail:<br>
		<input type="text" name="mail"><br>
	Message:<br>
		<textarea type="text" name="message" rows="25" cols="100"></textarea><br><br>
		<input type="submit" value="Send">
		<input type="reset" value="Reset">
</form>

</div>

<?php include ('includes/footer.php'); ?>