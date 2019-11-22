<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
             

<?php
session_start();
include_once("class.user.php");
$errorMessage ="null";
$login = new USER();

if($login->is_loggedin()!="")
{
	$login->redirect('/admin/admin.php');
}

if($_SERVER["REQUEST_METHOD"] == "POST")
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

        //$errorMessage = "Your Login Name or Password is invalid";
                       $error = "<b><font color='red'>Your Login Name or Password is invalid</font></b>";
//        $errorMessage = "Username or Password is invalid";
                       $error = "<b><font color='red'>Wrong Details !</font></b>";

	}
        }
        

?>





<html>
    <head>
        <meta charset="UTF-8">
        <title>TOIEC registration form</title>
        <link rel="stylesheet" href="assets/core.css" type="text/css"  />
    </head>
    <body>
         <form  action="" method="post">
        <div class="page">


            <div class="leftside">
                <div class="inner">
                    <img class="img-slide" src="https://news.ets.org/wp-content/uploads/2019/09/GettyImages-492198113_1920x710.jpg">
                 </div>
                
                <div class="login-title">
                    <h2>The TOEIC® Program</h2>
                    <p>The Global Leader in English-language Assessment for the Workplace</p>
                </div>
                    
               
            </div>
    <div class="rightside">
        <div class="form">
                          
    


        <?php
      if(isset($error))
      {
        ?>

                   <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?> !

                <?php
      }
    ?>


        <div class="logos">
            <div class="logo">
                <a href="/">
                    <img src="https://www.ets.org/rsc/img/logo/ets_logo.svg" alt="ETS" height="46" width="68">
                </a>

                <a href="/toeic">
                    <img src="https://www.ets.org/rsc/img/logo/toeic.svg" alt="TOEIC" height="46" width="156">
                </a>
            </div>
            
        </div>
                   
                   
                   
                   
                   
                   <div class="form-group">  
                       <span class="d-block text-muted"><?php 
                       
                       ?></span>
        <input class="login-input" type="text"  name="txt_uname_email" placeholder="Email address or account name" required />
                   </div>

                   <div class="form-group">
        <input class="login-input" type="password"  name="txt_password" placeholder="Password" />
                   </div>

                   <div class="form-group">
                     
                       <!--<input value="LOG IN" type="submit" name="btn-login" class="btn-login">-->
                       <button type="submit" class="btn-login" class="btn btn-primary btn-block">LOG IN</button>
                       
                   </div>
                   <div class="login-copy-right">
                       <span>COPYRIGHT</span>
                       <a href="https://www.ets.org/" target="_blank">ETS</a>
                       </div>
     

        </div>
            </div>
        </div>
                          </form>

    </body>
</html>
