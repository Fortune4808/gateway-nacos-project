<?php 
	$action=$_POST['action'];
	switch ($action){

	case 'get_page':
		$page=$_POST['page'];
		require_once ('content-page.php');
	break;

	case 'get_form':
		$page=$_POST['page'];
		require_once ('form.php');
	break;

	case '_get_form_with_id':
		$ids=$_POST['ids'];
		$page=$_POST['page'];
		require_once ('form.php');
	break;
}
?>
	