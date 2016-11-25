<?php 
$pageTitle = 'Contact Us';
include ('includes/header.php');
?>
<h2 align="center" > Send us an email and we'll get right back to you. </h2>

<div>
	<form method="POST" action="sent.php" class="contact-form" name="contact-form">
		<label>Name:</label><br>
			<input id="name" name="nameInput" type="text">
			<br>
		<label>Email:</label><br>
			<input id="email" name="emailInput" type="email">
			<br>
		<label>Subject:</label><br>	
			<input id="subject" name="subjectInput" type="text">
			<br>
		<label>Message:</label><br>	
			<input id="message" name="messageInput" type="text">
			<br><br>
		<input value="Send" type="submit">
	</form>
</div>

<?php include ('includes/footer.php'); ?>