<? 
					$conn = new mysqli("localhost", "qwe", "232001","shoes");
							
							$query = "SELECT * FROM categ";
							 $rs_result = mysqli_query ($conn, $query);
							while($row = mysqli_fetch_array($rs_result))
							{
								
			echo '<a href="men.php?id_categ='.$row["id"].'">'.$row["title_cat"].'</a>
			
									';
		
                                       
			}
							?>