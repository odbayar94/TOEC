<?php


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Product</title>
<link href="../style/style1.css" rel="stylesheet" type="text/css">

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

ul.pagination {
    text-align:center;
    color:#1f447f;
}
ul.pagination li {
    display:inline;
    padding:0 3px;
}
ul.pagination a {
    color:#1f447f;
    display:inline-block;
    padding:5px 10px;
    border:1px solid #1f447f;
    text-decoration:none;
}
ul.pagination a:hover,
ul.pagination a.current {
    background:#1f447f;
    color:#fff;
}


</style>

<!-- Table goes in the document BODY -->



</head>

<body>



	<div id="main3">

		<div id="header"><img src="../img/logo.png"></div>
<center>
	<div id="manu">
	<ul>
	<li><a href="admin.php" >HOME</a></li>
	<li><a style="background:#1f447f; color:#fff;" href="product.php" >PRODUCT</a></li>
	<li><a href="order.php" >ORDER</a></li>
	<li><a href="../login/logout.php?logout=true" >SIGN OUT</a></li>
	</ul>
	</div>

</center>
<br>
<div id="content">
	<h2><a class="button" href="add-product.php"> Add Product</a> Admin Access Only [Product Page] </h2>

<center>


        <table class="altrowstable" id="alternatecolor">
        <thead>
        <tr>
        <th>ID</th>
        <th>Image</th>
        <th>Name</th>
				<th>Description</th>
				<th>Price</th>
		    <th>Date</th>
        <th>Edit</th>
        <th>Delete</th>
        </tr>
        </thead>
        <tbody>
					<?php

				?>
			<tr>
			<td><?php //echo $row['pid']; ?></td>

			<td><img with="50" height="50" src="../<?php // $row['img']; ?>"></td>
			<td><?php //echo $row['name']; ?></td>
			<td><?php //echo $row['des']; ?></td>
			<td><?php //echo $row['pr']; ?></td>
			<td><?php //echo $row['cdate']; ?></td>

			<td align="center">
			<a   href="pedit.php?pid=<?php //echo $row['pid']; ?>" title="Edit">
			<img src="../img/edit.png" width="20px" />
            </a></td>
			<td align="center"><a   href="delete.php?pid=<?php //echo $row['pid']; ?>" title="Delete">
			<img src="../img/delete.png" width="20px" />
            </a></td>
			</tr>


        </tbody>
        </table>
				<br>

				<?php


								// displaying paginaiton.
							//	echo pagination($statement,$per_page,$page,$url='?');
								?>
</center>

</div>

<div id="footer3">
<center>
	<p>Home . Product . Contact Us . Services </p>

	<p><img src="../img/facebook.png"> <img src="../img/twitter.png">  <img src="../img/u.png"></p>
</center>
<b>  Copyrights © 2017 ComputerPakistan. Design by Naeem Hussain</b>



    </div>

    </div>



</body>
</html>
