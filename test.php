<?php
	
	/*
		Get 3 random files from 16 wav files.
		There are 3 conditions.
		
	
	*/
	
	$results = array();
	
	// Generate cond_0 .. cond_3 folders
	$media_folders = array();
	for ($i=0; $i<4; $i++){
		$media_folders[] = "cond_$i";
	}
	
	$media_files = array();
	
	for ($i=0; $i<16; $i++){
		$media_files[] = "test_$i.wav";
	}
	
	$random_numbers = array_rand($media_files, 10);	
	
	shuffle($random_numbers);
	
	$a = array_splice($random_numbers, 0, 3);
	$b = array_splice($random_numbers, 0, 3);
	$c = array_splice($random_numbers, 0, 3);		

	
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