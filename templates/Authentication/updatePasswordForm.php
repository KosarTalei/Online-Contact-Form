<form action="updatePassword.php" method="post">
	<fieldset>
		<legend>Update Login details</legend>
		<p>
			<label for="username">Username:</label>
			<input type="text" id="username" name="username" required>
		</p>
		<p>
			<label for="password">Password:</label>
			<input type="password" id="password" name="password" required>
		</p>
		<p>
			<input type="submit" name="updateSubmit" value="Update">
		</p>
	</fieldset>
</form>
<p><?= $message ?></p>

<?php if(isset($error)):?>
	<p class="error"><?= $message ?></p>
<?php endif; ?>

<p><a href="login.php"><i class="fa-solid fa-arrow-right"></i> Login Again</a></p>