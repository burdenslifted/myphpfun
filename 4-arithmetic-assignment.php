<html>
	<head>
		<title>Ex 4: Arithmetic-Assignment Operators and Variables</title>
	</head>
	<body>
		<?php 
		$x = 8;
		echo "Value is now " . $x . ".<br />";
		echo "Add 2. Value is now " . ($x+=2) . ".<br />";
		echo "Subtract 4. Value is now " . ($x-=4) . ".<br />";
		echo "Multiply by 5. Value is now " . ($x*=5) . ".<br />";
		echo "Divide by 3. Value is now " . ($x/=3) . ".<br />";
		echo "Increment value by one. Value is now " . ++$x . ".<br />";
		echo "Decrement value by one. Value is now " . --$x .".<br />";
		
			?>
			<hr />
			<?php   
			 
			$num = 8; 
			echo "Value is now $num.<br/>";   
			 
			$num += 2; 
			echo "Add 2. Value is now $num. <br/>";   
			 
			$num -= 4; 
			echo "Subtract 4. Value is now $num. <br/>";   
			 
			$num *= 5; 
			echo "Multiply by 5. Value is now $num. <br/>";   
			 
			$num /= 3; 
			echo "Divide by 3. Value is now $num. <br/>";   
			 
			$num++; 
			echo "Increment value by one. Value is now $num.<br/>";   
			 
			$num--; 
			echo "Decrement value by one. Value is now $num.";   
			 
			?> 
	</body>
</html>