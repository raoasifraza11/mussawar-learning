<?php
	
	//$salt = "asdfghjklqwertyuuiio";
	
	$row['id'] = 73;

	echo md5(md5($row['id'])."password"); // scure password

?>