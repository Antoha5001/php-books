<?php
	ob_start();

//	ob_get_contents();
	?>

	echo "Test";


<?php
	ob_start();
	echo 12;
	$str = ob_get_contents();
	ob_end_clean();
//	ob_end_flush();
//	ob_start();
//	echo  ob_get_level();
	echo " and Test";

	$str2 = ob_get_contents();
	ob_end_clean();
//	ob_get_contents();
//	echo ob_get_contents();
//ob_start();
echo $str;
echo $str2;
