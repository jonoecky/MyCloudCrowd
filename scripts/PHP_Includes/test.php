<?php 
include 'test_php.php';


?>

<html>
	<script>
		function removeSpaces(string) {
 			return string.split(' ').join('');
		}
	</script>
	<body>
		<form method="post">
			<input value="postcode" onblur="this.value=removeSpaces(this.value);" id="postcode" name="postcode" type="text" />
			<input typpe="text" value="town">
			<select name="distance">
				<option>
					5
				</option>
				<option>
					10
				</option>
			</select>
			<input name="submit" type="submit" value="submit" />
		</form>
	</body>
</html>