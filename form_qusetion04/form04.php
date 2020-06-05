<!DOCTYPE html>
<html>
	<body>
		■form_question04<br>
		SUBMITボタンを押した時、radio, checkbox, selectに設定した状態が残るように編集してください。
		<form action="" method="get" style="border: 1px; background-color: lightsteelblue;">

			<h2>FORM</h2>

			<br><br>
			INPUT_SAMPLE: <input type="text" name="name" value="VALUE"><br>
			INPUT_A: <input type="text" name="input_name_a" value="VALUE_A"><br>
			INPUT_B: <input type="text" name="input_name_b" value="VALUE_B"><br>
			INPUT_C: <input type="text" name="input_name_c" value="VALUE_C"><br>

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
			window.addEventListener('DOMContentLoaded', function() {
				setRadioValue('radio_name', getHrefParam('radio_name'));
				setCheckBoxValue('check_name', getHrefParams('check_name'));
				setSelectValue('select_name', getHrefParam('select_name'));
			});

			var getHrefParam = function(key) {
				if (location.search === "") {
					return false;
				}
				var paramStr = location.search.split('?')[1];
				var params = paramStr.split('&');
				for (var i = 0; i < params.length; i++) {
					var paramKey = params[i].split('=')[0];
					if (paramKey === key) {
						return params[i].split('=')[1];
					}
				}
			};

			var getHrefParams = function(key) {
				if (location.search === "") {
					return false;
				}
				var paramStr = location.search.split('?')[1];
				var params = paramStr.split('&');
				var paramAry = [];
				for (var i = 0; i < params.length; i++) {
					var paramKey = params[i].split('=')[0];
					if (paramKey === key) {
						paramAry[i] = params[i].split('=')[1];
					}
				}
				return paramAry;
			};

			var setRadioValue = function(name, value) {
			  var radios = document.getElementsByName(name);
			  for (var i = 0; i < radios.length; i++) {
			    var opt = radios[i];
			    if (opt.value === value) {
			      opt.checked = true;
			      break;
			    }
			  }
			};

			var setCheckBoxValue = function(name, values) {
			  var boxes = document.getElementsByName(name);
			  for (var i = 0; i < boxes.length; i++) {
			    var opt = boxes[i];
			    if (values.includes(opt.value)) {
			      opt.checked = true;
			    }
			  }
			};

			var setSelectValue = function(name, value) {
			  var select = document.getElementsByName(name)[0];
			  for (var i = 0; i < select.children.length; i++) {
			    var opt = select.children[i];
			    if (opt.value === value) {
			      opt.selected = true;
			    }
			  }
			};
		</script>
	</body>
</html>
