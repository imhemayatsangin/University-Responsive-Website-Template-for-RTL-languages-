<!DOCTYPE html>
<html lang="ps">
<head>
<meta charset="utf-8">
 
  </head>
  <body>
<?php
 include "db.php";

 
 $title=$_POST["title"];
 $result=mysql_query("SELECT * FROM kankor where ID like '%$title%' ");
 $result1=mysql_query("SELECT * FROM kankor where Name like '%$title%' ");
 $found=mysql_num_rows($result);
 $found1=mysql_num_rows($result1);


  
				if($found>0){
				?>
			<table class="table table-bordered" >
			<thead>
				<tr>
				<th>ID</th>
				<th>نوم</th>
				<th>پلارنوم</th>
				<th>کانکور نمرې</th>
				<th>نتیجه</th>
				</tr>
			</thead>
			<?php
			while($row=mysql_fetch_array($result)){
			
			echo "<tbody><tr><td>".$row['ID']."</td><td>".$row['Name']."</td><td>".$row['FName']."</td><td>". $row['Score']."</td><td>". $row['Status']."</td></tr></tbody>";
		
			}
			?>
			</table>
			<?php			
		 }
		 
		 
			elseif($found1>0){
			
					?>
			<table class="table table-bordered" >
			<thead>
				<tr>
				<th>ID</th>
				<th>نوم</th>
				<th>پلارنوم</th>
				<th>دکانکور نمرې</th>
				<th>نتیجه</th>
				</tr>
			</thead>
			<?php
			while($row1=mysql_fetch_array($result1)){
		
			echo "<tbody><tr><td>".$row1['ID']."</td><td>".$row1['Name']."</td><td>".$row1['FName']."</td><td>". $row1['Score']."</td><td>". $row1['Status']."</td></tr></tbody>";
		
			
			} 
			?>
			</table>
			<?php			
		 }
		 
		 else{
		 echo "<b>ستاسو داخل کړی معلومات سیستم کې نشته!مهرباني وکړی صحیح آي ډي او یا نوم داخل کړی.</b>";
		 
		 }
 // ajax search
?>
<body>
</html>