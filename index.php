<html>
<head>
 <?php include "header.php"; ?>
  
</head>
<body>
<?php include "nav1.php"; ?>
<!-- carousel start-->

<div>
	
	<img src = "myimages/2.jpg" width="100%" height=400px>

</div>
<!-- carousel end-->
<div class="container" style = "margin-top : 50px">
<h2 class="text-center" style = "font-family:Monotype Corsiva ; color : red">Our Product categories</h2>
<center><img src="myimages2/line1.jpg" style = "height:20px;width:500px"></center>

<?php 
include "dbconfigure.php";
$query = "select * from category";
$rs = my_select($query);
echo "<div class='row'>";
while($row = mysqli_fetch_array($rs))
{
echo "<div class='col-sm-4'>";
echo "<h2 class='text-center' style='font-family:Forte ; color:#E0033A'>$row[1]</h2>";
$loc = "admin/".$row[2];
echo "<a href = 'giftbycategory.php?category=$row[0]&categoryname=$row[1]'><img class='zoom' src='$loc' style='width:340px ; height:236px'></a>";
echo "</div>";
}
echo "</div>";
?>
</div>
</body>
</html>