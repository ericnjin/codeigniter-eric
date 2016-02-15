<html>
<body>
<?php
	$a = 100;
	echo gettype($a);

	settype($a, "double");
	echo '<br />';
	echo gettype($a);

	var_dump($a);
	echo '<br />';

	//echo is_array($a);

	echo is_array($a) ? 'Array' : 'not an Array';
	echo '<br />';

	echo 'vvvvvvvvvvvvvvvv';
	echo '<br />';

	if (is_float(27.25)) {
	   echo "is float\n";
	} else {
    	echo "is not float\n";
	}
	var_dump(is_float('abc'));
	var_dump(is_float(23));
	var_dump(is_float(23.5));
	var_dump(is_float(1e7));  //Scientific Notation
	var_dump(is_float(true));

// is_ array
// is_ bool
// is_ callable
// is_ double
// is_ float
// is_ int
// is_ integer
// is_ long
// is_ null
// is_ numeric
// is_ object
// is_ real
// is_ resource
// is_ scalar
// is_ string

?>
</body>
</html>
