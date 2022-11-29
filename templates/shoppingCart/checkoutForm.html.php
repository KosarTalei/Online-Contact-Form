<form method="post" action="thanksOrder.php" novalidate id="checkout">
	<fieldset>
		<legend>Delivery Details</legend>
		<p>
			<label for="firstName">First Name:</label>
			<input type="text" id="firstName" name="firstName" required>
			<span class="error"></span>
		</p>
		<p>
			<label for="lastName">Last Name:</label>
			<input type="text" id="lastName" name="lastName"required>
			<span class="error"></span>
		</p>
		<p>
			<label for="address">Address:</label>
			<input type="text" id="address" name="address"required>
			<span class="error"></span>
		</p>
		<p>
			<label for="phone">Phone:</label>
			<input type="text" id="phone" name="phone"required>
			<span class="error"></span>
		</p>
		<p>
			<label for="email">Email:</label>
			<input type="text" id="email" name="email"required>
			<span class="error"></span>
		</p>
	</fieldset>
	<fieldset>
		<legend>Payment</legend>
		<p>
			<label for="creditcard">Credit card number:</label>
			<input type="text" id="creditcard" name="creditcard"required>
			<span class="error"></span>
		</p>
		<p>
			<label for="nameOnCard">Name on card:</label>
			<input type="text" id="nameOnCard" name="nameOnCard"required>
			<span class="error"></span>
		</p>
		<p>
			<label for="expiry">Expiry date:</label>
			<input type="text" id="expiry" name="expiry"required>
			<span class="error"></span>
		</p>
		<p>
			<label for="csv">CSV:</label>
			<input type="text" id="csv" name="csv"required>
			<span class="error"></span>
		</p>
		<p><input type="submit"  name="pay" value="Pay"></p>
	</fieldset>
</form>
<script src="scripts/contact.js"></script>