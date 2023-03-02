<?require 'connect.php';
$id_categ = $_GET['id_categ']; 
$query = "SELECT * FROM product ";     
	$rs_result = mysqli_query ($conn, $query);    
   
	while ($row = mysqli_fetch_array($rs_result)) 
	{    
	
	echo ' 
<div class="col-lg-3 mb-4 text-center">
						<div class="product-entry border">
							<a href="http://localhost/footwear/product-detail.php" class="prod-img">
								<img src='.$row["product_image"].' class="img-fluid" alt="Free html5 bootstrap 4 template">
							</a>
							<div class="desc">
								<h2><a href="#">'.$row["product_name"].'</a></h2>
								<span class="price">'.$row["product_price"].' руб.</span>
							</div>
						</div>
					</div>';
    }
    ?>
