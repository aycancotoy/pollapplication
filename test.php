<?php
	$results = array();
	
	// Generate cond_0 .. cond_3 folders
	$media_folders = array();
	for ($i=0; $i<4; $i++){
		$media_folders[] = "cond_$i";
	}
	
	shuffle($media_folders);
	
	$media_files = array();
	
	for ($i=0; $i<16; $i++){
		$media_files[] = "test_$i.wav";
	}
	
	$random_numbers = array_rand($media_files, 10);	
	
	shuffle($random_numbers);
	
	$a = array_splice($random_numbers, 0, 3);
	$b = array_splice($random_numbers, 0, 3);
	$c = array_splice($random_numbers, 0, 3);
	echo "<hr>";
	
	foreach ($a as $key => $value){
		settype($value, 'string');
		$a[$key] = 'a'.$a[$key];
	}
	
	print_r($a);
	
	$results[] = $a;
	$results[] = $b;
	$results[] = $c;
	$results[] = $random_numbers;			
	shuffle($results);
?>

<h1 id="test">Test</h1>
<ul>
	<?php
		foreach ($results as $mkey => $mvalue){
			echo "Grup: $mkey";
			echo '<ul>';
			foreach ($mvalue as $value){
				echo '<li>'.$media_files[$value].'</li>';
			}
			echo '</ul>';			
		}
	?>
</ul>