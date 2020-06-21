<!DOCTYPE html>
<html>
<head>
	<title>Main Page</title>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
	#videobox{
		padding-left: 3%;
	}
	#videowindow{
		display: none;
		position: relative;
	}
	#close{
		position: absolute;
		right: 2px;
		top: 2px;
		cursor: pointer;
	}
	h2{
		text-align: center;
		padding-top: 5px;
		font-family: "Arial Black";
	}
	#heading{
		background-color: black;
		color: white;
		font-size: 25px;
	}
	td{
		padding-top: 5px;
		padding-bottom: 5px;
		text-align: center;
	}
	button{
		background-color: transparent;
		border: none;
		cursor: pointer;
	}
	#row1, #row3{
		background-color: violet;
	}
</style>
<body>
<script>
	
	function showvid(location, profname){
		$(document).ready(function(){
			$("#videowindow").css("background-color", "gray");
			$("#videowindow").css("display", "block");

			$("#videowindow").html("<img src='close.png' id='close'><h2>"+profname+"</h2><video src='"+location + "'controls width='650px' height='350px' id='videobox'>");

			$("#close").click(function(){
			$("#videowindow").css("display", "none");
		});
			console.log(location);
			console.log(profname);
		});

	}
</script>
<h1 style="text-align: center;">WELCOME TO TUTORIALS</h1>
<div id="videowindow" style="width: 700px; height: 420px; margin: auto;">
		
	</div>



	<?php

$connect = new mysqli("localhost", "root", "", "iwp");
if($connect -> connect_errno)
{
	echo "Could not connect db";
}

$sqll="SELECT * from `videotbl1` where `vname` = 'javascript-hindi'";
$result=$connect->query($sqll);
$row=$result->fetch_assoc(); 

$location = $row['location'];
$profname1 = "'".$row['iname']."'";    
$location1 = "'".$location."'";

$sqll="SELECT * from `videotbl1` where `vname` = 'javascript-english'";
$result=$connect->query($sqll);
$row=$result->fetch_assoc(); 

$location = $row['location'];
$profname2 = "'".$row['iname']."'";           
$location2 = "'".$location."'";

$sqll="SELECT * from `videotbl1` where `vname` = 'jquery-hindi'";
$result=$connect->query($sqll);
$row=$result->fetch_assoc(); 

$location = $row['location'];
$profname3 = "'".$row['inname']."'";          
$location3 = "'".$location."'";

$sqll="SELECT * from `videotbl1` where `vname` = 'jquery-english'";
$result=$connect->query($sqll);
$row=$result->fetch_assoc(); 

$location = $row['location'];
$profname4 = "'".$row['iname']."'";           
$location4 = "'".$location."'";

$sqll="SELECT * from `videotbl1` where `vname` = 'php-hindi'";
$result=$connect->query($sqll);
$row=$result->fetch_assoc(); 

$location = $row['location'];
$profname5 = "'".$row['iname']."'";           
$location5 = "'".$location."'";

$sqll="SELECT * from `videotbl1` where `vname` = 'php-english'";
$result=$connect->query($sqll);
$row=$result->fetch_assoc(); 

$location = $row['location'];
$profname6 = "'".$row['iname']."'";           
$location6 = "'".$location."'";

echo '
	<div class="maintable">
		<table width="70%" style="margin: auto;">
			<tr id="heading">
				<th>Topic</th>
				
				<th>Language</th>
			</tr>
			<tr id="row1">
				<td>Introduction to Javascript</td>
				
				<td><button onclick="showvid('.$location1.', '.$profname1.')">Hindi</button><span>|<span><button onclick="showvid('.$location2.', '.$profname2.')">English</button></span></span></td>
			</tr>
			<tr id="row2">
				<td>Introduction to JQuery</td>
				
				<td><button onclick="showvid('.$location3.', '.$profname3.')">Hindi</button><span>|<span><button onclick="showvid('.$location4.', '.$profname4.')">English</button></span></span></td>
			</tr>
			<tr id="row3">
				<td>Introduction to PHP</td>
				
				<td><button onclick="showvid('.$location5.', '.$profname5.')">Hindi</button><span>|<span><button onclick="showvid('.$location6.', '.$profname6.')">English</button></span></span></td>
			</tr>

		</table>
	</div>';
	

	?>
	<div id="videowindow" style="width: 500px; height: 400px;">
		
	</div>
</body>
</html>
