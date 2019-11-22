<?php
session_start();
include_once("class.user.php");

$login = new USER();

if($login->is_loggedin()!="")
{
	$login->redirect('/admin/admin.php');
}

if($_POST)
{
	$uname = strip_tags($_POST['txt_uname_email']);
	$umail = strip_tags($_POST['txt_uname_email']);
	$upass = strip_tags($_POST['txt_password']);

	if($login->doLogin($uname,$umail,$upass))
	{
		$login->redirect('/admin/admin.php');
	}
	else
	{
           $error = header("location: index.php");
#$error = "<b><font color='red'>Wrong Details !</font></b>";
	}
}
?>