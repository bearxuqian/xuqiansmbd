<?php
	$info = array("name"=>"Ðìå¹","age"=>23);
	foreach ($info as $value) {
		echo $value."<br>";
	}
	
	echo "<hr>";
	foreach ($info as $id => $value){
		echo $id."---".$value."<br>";
		
		
	}
?>