<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration form</title>
    <link href="../../styleContactForm.css" rel="stylesheet">
</head>

<form class="full-center" action="registration.php" method="post">
	<fieldset>
		<div class="panel">

			<div class="panel-heading">
				<h3>Please fill out the details to ask question</h3>
			</div>

			<div class="panel-body">
				<!-- removed required="required" -->
				<div>
					<label for="firstName" class="required">* First name</label>
					<input type="text" name="firstName" id="firstName" placeholder="Enter your first name" 
					value="">
				</div>

				<div>
					<label for="lastName" class="required">* Last name</label>
					<input type="text" name="lastName" id="lastName" placeholder="Enter your last name" 
					value="">
				</div>

				<div>
					<label for="Contactnumber" class="longeLabel"> Contact Telephone number</label>
					<input type="tel" name="Contactnumber" id="Contactnumber" placeholder="Enter telephone number" 
					value="">
				</div>

				<div>
					<label for="Emailaddress" class="required longeLabel">* Email</label>
					<input type="email" name="Emailaddress" id="Emailaddress" placeholder="Enter valid email" 
					value="">
				</div>
			</div>
		</div>

		<div class="form-group">
			<label class="longeLable">Please write your question here:</label>
			<textarea name="comments" id="comments" rows="4" cols="50"> </textarea>
		</div>

		<div class="full-center">
			<button type="submit" name="submitButton" id="submitButton" value="Send Details">Submit</button>
		</div>

	</fieldset>
</form>