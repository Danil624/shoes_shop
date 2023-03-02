<? $conn = new mysqli("localhost", "qwe", "232001","shoes");
    $id_categ = $_GET['id_categ']; 
	$query = "SELECT * FROM categ WHERE id = ".$id_categ;     
	$rs_result = mysqli_query ($conn, $query);    
	while ($row = mysqli_fetch_array($rs_result)) 
	{    
	echo '<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col">
            <p class="bread"><span><a href="index.php">главная</a></span> / <span>'.$row["title_cat"].'</span></p>
            </div>
        </div>
    </div>
</div>
<div class="breadcrumbs-two">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs-img" style="background-image: url('.$row["img"].');">
							<h2>'.$row["title_cat"].'</h2>
						</div>
						
					</div>
				</div>
			</div>
		</div>';
	}?>