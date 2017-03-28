<div class="container">
	<form action="<?= URL ?>student/createSave" method="post">
	
		<input type="text" name="name" placeholder="john">
		<input type="text" name="species" placeholder="doe">
		<input type="text" name="status" placeholder="doe">
		<select name="gender">
			<option value="male">Male</option>
			<option value="female">Female</option>	
		</select>

		<input type="submit" value="Verzenden">
	
	</form>

</div>