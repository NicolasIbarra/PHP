
<form action="core/process.php" method="post">

	<input type="hidden" name="formID" value="form2" />
	<input type="hidden" name="redirect_to" value="" />

	<p>Input: <input type="text" name="input" /></p>
	<p>Input2: <input type="text" name="input2" /></p>

	<p>Textarea: <textarea rows="20" cols="30" name="textarea"></textarea></p>

	<p>Dropdown:
		<select name="dropdown">
			<option value="value1">Value 1</option>
			<option value="value2">Value 2</option>
			<option value="value3">Value 3</option>
		</select>
	</p>

	<input type="submit" value="enviar" />

</form>
