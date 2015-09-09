<?php
	$first_name = "Hendrik";
	$last_name = "Vallimägi";
	$age = 20;
	
	echo $first_name." ".$last_name;
?>
<br>
<?php
	
	// testib loogikat, juhul kui vanus on väiksem kui 18 siis kirjuta ""alaealine""
	// muul juhul ""täisealine""

	// if'i sisse loogikatehe 
	if($age >= 18) {
		//tõene
		
		echo "täisealine";
	} else {
		//väär
		
		echo "alaealine";
	}
	
?>