<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Books and Authors</title>
</head>
<body style="background-color: wheat;">
	<h1 style="color: firebrick;">Books and Their Authors</h1>
	<hr/>
	<?php
		$Books = array("The Adventures of Huckleberry Finn", "Nineteen Eighty-Four", "Alices adventures in Wonderland", "The Cat in the Hat");
		$Authors = array("Mark Twain", "George Orwell", "lewis Carroll", "Dr.Seuss");
		$RealNames = array("Samuel Clemens", "Eric Blair","Charles Dodson", "Theodor Geisel");

		for ($i = 0; $i < count($Books); ++$i) { 
			echo "<p>The real name of $Authors[$i], the author of \"$Books[$i]\", is $RealNames[$i].</p>";
			echo "The title \"$Books[$i]\" contains ", strlen($Books[$i]), "characters and ", str_word_count($Books[$i]), "words.</p>";
		}

	?>

</body>
</html>