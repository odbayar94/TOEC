<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin</title>
<link href="../assets/style1.css" rel="stylesheet" type="text/css">

<!-- Javascript goes in the document HEAD -->
<script type="text/javascript">
function altRows(id){
	if(document.getElementsByTagName){

		var table = document.getElementById(id);
		var rows = table.getElementsByTagName("tr");

		for(i = 0; i < rows.length; i++){
			if(i % 2 == 0){
				rows[i].className = "evenrowcolor";
			}else{
				rows[i].className = "oddrowcolor";
			}
		}
	}
}
window.onload=function(){
	altRows('alternatecolor');
}
</script>

<!-- CSS goes in the document HEAD or added to your external stylesheet -->
<style type="text/css">
table.altrowstable {
	border-width: 1px;
	border-color:  #ddd;
	border-collapse: collapse;
}
table.altrowstable th {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #ddd;
}
table.altrowstable td {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #ddd;
}
.oddrowcolor{
	background-color:#fcfcfc;
}
.evenrowcolor{
	background-color:#e0dbdb;
}
</style>

<!-- Table goes in the document BODY -->



</head>

<body>



	<div id="main3">

		<div id="header"><img src="../source/img/logo.png"></div>
<center>
	<div id="manu">
	<ul>
	<li><a href="admin.php" >HOME</a></li>
	<li><a href="product.php" >PRODUCT</a></li>
	<li><a href="order.php" >ORDER</a></li>
	<li><a href="logout.php?logout=true" >SIGN OUT</a></li>
	</ul>
	</div>
</center>
<div id="content">

<h1><button class="button">Welcome <?php //echo $userRow['user_name']; ?></button></h1>

<p> In this web app admin can access rich features like below. </p>
<p>1. Add Edit Delete Products</p>
<p>2. Add Edit Delete Orders</p>
<p>3. Manage Orders</p>


</div>


</div>

<div id="footer3">
<center>
	<p>Home . Product . Contact Us . Services </p>

	<p><img src="../source/img/facebook.png"> <img src="../source/img/twitter.png">  <img src="../source/img/u.png"></p>
</center>
<b>  Copyrights © 2017 ComputerPakistan. Design by Naeem Hussain</b>



    </div>

    </div>



</body>
</html>
