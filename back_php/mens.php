
<?
require 'connect.php';
$id_categ = $_GET['id_categ']; 
$query = "SELECT * FROM product WHERE cat=".$id_categ;     
	$rs_result = mysqli_query ($conn, $query);    
   
	while ($row = mysqli_fetch_array($rs_result)) 
	{    
	
	echo ' 
<div class="col-md-3 col-lg-3 mb-4 text-center">
<div class="product-entry border">
    <a href="#" class="prod-img">
        <img src="'.$row["product_image"].'" class="img-fluid" ">
    </a>
    <div class="desc">
        <h2><a href="#">'.$row["product_name"].'</a></h2>
        <span class="price">'.$row["product_price"].'</span>
    </div>
</div>
</div>';
    }
?>