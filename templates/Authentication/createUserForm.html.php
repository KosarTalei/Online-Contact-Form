<form action="createUser.php" method="post">
	<fieldset>
		<legend>Create User</legend>
		<p>
			<label for="username">Username:</label>
			<input type="text" id="username" name="username" required>
		</p>
		<p>
			<label for="password">Password:</label>
			<input type="password" id="password" name="password" required>
		</p>
		<p>
			<input type="submit" value="Add new user">
		</p>
	</fieldset>
</form>
<p><?= $message ?></p>