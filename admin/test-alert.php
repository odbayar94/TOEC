
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Order Alert</title>
<link rel="stylesheet" href="../style/style.css" type="text/css"  />
</head>
<body>



	<div id="main2">



<?php


						 $a = $_POST['a'];
						 $b = $_POST['b'];
					   $ans = $_POST['ans'];
						 $spam = $a + $b;
if($ans == $spam)
{

	if($_POST)
	{ ?>
        <h1><font color='green'>Congratulation! <br>Your Order submitted Successfully..</font></h1>
<?php
	}


//	header("Location: track.php?myid=$myid");


?>

               <p><b><?php   }



							 else{

	echo '<p> Wrong Answer! <br/> Please calculate the number again and try  to give correct answer. </p>';



							 	} ?></b></p>


								<p><a href="../test.php" ><button class="button" >Back</button</a>
</p>
        </div>







</body>
</html>
