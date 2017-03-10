<!DOCTYPE html>
<html lang="it">

<body>
	<header >
		<h1 >Contanct</h1>
	</header>
		<br>
	 <form action="<?php echo base_url('index.php/email_cfg/send_mail'); ?>" method="post">
						
	<input class="form-control" type="text" name="name" placeholder="Nome" required>
		<br>
	<input class="form-control" type="email" name="email" placeholder="Email" required>
		<br>
	<input class="form-control" type="text" name="subject" placeholder="Subject" required>
		<br>
	<textarea name="message" placeholder="your message..." class="form-control" rows="9" required></textarea>
		<br>
		<br>
	<input class="btn btn-action" type="submit" value="Send">
											
	</form>					
</body>
</html>
