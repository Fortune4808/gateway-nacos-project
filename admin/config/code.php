<?php 
	$action=$_POST['action'];
	switch ($action){

	case 'get_form':
		$page=$_POST['page'];
		require_once ('form.php');
	break;

	case 'reset_password':
		$page=$action;
		require_once ('form.php');
	break;
}
?>
	