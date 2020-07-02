<!DOCTYPE html>
<html>
	<body>
		■form_question03<br>
		SUBMITボタンを押した時、input type="text"に入力した状態が消えないように編集してください。
		<form action="" method="get" style="border: 1px; background-color: lightsteelblue;">

			<h2>FORM</h2>

			<br><br>
			INPUT_SAMPLE: <input type="text" name="name" value="<?php echo $_GET['name']; ?>"><br>
			INPUT_A: <input type="text" name="input_name_a" value="<?php echo $_GET['input_name_a']; ?>"><br>
			INPUT_B: <input type="text" name="input_name_b" value="<?php echo $_GET['input_name_b']; ?>"><br>
			INPUT_C: <input type="text" name="input_name_c" value="<?php echo $_GET['input_name_c']; ?>"><br>

			<br><br>
			<input type="radio" name="radio_name" value="RADIO_A">RADIO_A<br>
			<input type="radio" name="radio_name" value="RADIO_B">RADIO_B<br>
			<input type="radio" name="radio_name" value="RADIO_C">RADIO_C<br>

			<br><br>

			<input type="checkbox" name="check_name" value="CHECK_A">CHECK_A<br>
			<input type="checkbox" name="check_name" value="CHECK_B">CHECK_B<br>
			<input type="checkbox" name="check_name" value="CHECK_C">CHECK_C<br>

			<br><br>
			<select name="select_name">
				<option value="OPT_A">OPT_A</option>
				<option value="OPT_B">OPT_B</option>
				<option value="OPT_C">OPT_C</option>
			</select>
			<br><br>
			<br><br>

			<button type="submit">SUBMIT</button>
		</form>

		<script type="text/javascript">

		</script>
	</body>
</html>
