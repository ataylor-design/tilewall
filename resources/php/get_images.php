<?php
	
	$pattern = "";
	$image_directory = "images";
	$filetypes = array("png", "jpg", "jpeg", "gif", "tif", "tiff", "bmp", "apng", "avif");
	
	if(!empty($image_directory)) {
		
		$pattern .= $image_directory . "/";
		
	}
	
	$pattern .= "*.{";
	
	for ($i = 0; $i <= count($filetypes); $i++) {
		
		$pattern .=  $filetypes[$i];
		
		if($i < count($filetypes) - 1) {
			
			$pattern .= ",";
			
		}
		
	}
	
	$pattern .= "}";
	$files = glob($pattern, GLOB_BRACE);
	
	for ($i = 0; $i <= count($files) - 1; $i++) {
		$num = $files[$i];
		echo '<a href="image.php?image='.rawurlencode($num).'"><div class="imagebox" style="background-image:url('.rawurlencode($num).');"></div></a>';
	}
	
?>