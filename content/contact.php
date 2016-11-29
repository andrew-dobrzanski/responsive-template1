<?php include '../includes/header.php';

?>

<div class="container">
	<form action="form_process.php" method="post" name="contact_form">
	  <table width="285" border="1">
		<tr>
		  <td width="104"><strong>First Name: </strong></td>
		  <td width="165"><input name="first_name" type="text" /></td>
		</tr>
		<tr>
		  <td><strong>Last Name:</strong></td>
		  <td><input name="last_name" type="text" /></td>
		</tr>
		<tr>
		  <td><strong>Email:</strong></td>
		  <td><input name="email" type="text" /></td>
		</tr>
		<tr>
		  <td><strong>Your Message:</strong></td>
		  <td><textarea name="message"></textarea></td>
		</tr>
		<tr>
		  <td>&nbsp;</td>
		  <td><input name="submit" type="submit" id="submit" value="Submit" />
		  <input name="reset" type="reset" id="reset" value="Reset" /></td>
		</tr>
	  </table>
	</form>
</div>

<?php include '../includes/footer.php';

?>