<?php
switch ($_GET['operator']) {
	case 'sqr':
		print $_GET['number'] * $_GET['number'];
		break;
	case 'sqrt':
	    $t = sqrt($_GET['number']);
		print $t;
		break;
	
}