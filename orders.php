<html><head><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' /></head>
	<body>
<div class="colorlib-loader"></div>

<nav class="colorlib-nav" role="navigation">
		<!-- шапка	 --> 
		<? include("top/top-menu.php")?>   
			<? include("top/sale.php")?>
		</nav> 
		<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="ion-ios-arrow-up"></i></a>
	</div>
	<div class="container">
    <div id="message"></div>
    <div class="row mt-2 pb-3">
      
			  <tbody>
              
             <table class="table table-bordered table-striped text-center">
			 <thead>
			  
				 <td colspan="7">
				   <h4 class="text-center text-info m-0">Заказы</h4>
				 </td>
			   
			   <tr>
				 <th>ID</th>
				 <th>Имя</th>
				 <th>Почта</th>
				 <th>Телефон</th>
				 <th>Адрес</th>
				 <th>Оплата</th>
				 <th>Товары</th>
				 <th>Сумма</th>
				 <th>Статус</th>
				 <th>
				   <a href="action.php?clear=all" class="badge-danger badge p-1" onclick="return confirm('Are you sure want to clear your cart?');"><i class="fas fa-trash"></i>&nbsp;&nbsp;Clear Cart</a>
				 </th>
			   </tr>
			 </thead>
			 <tbody>
			   <?php
				$conn = new mysqli("localhost", "qwe", "232001","shoes");
				 $stmt = $conn->prepare('SELECT * FROM orders');
				 $stmt->execute();
				 $result = $stmt->get_result();
				 $grand_total = 0;
				 while ($row = $result->fetch_assoc()):
			   ?>
			   
	
			   <tr>
				 <td><?= $row['id'] ?></td>
				 <input type="hidden" class="pid" value="<?= $row['id'] ?>">
				 <td><?= $row['name'] ?></td>
				 <td><i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= ($row['email']); ?></td>
				 <td>
				   <i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= ($row['phone']); ?>
				 </td>
				 <td><?= $row['address'] ?></td>
				 <td><?= $row['pmode'] ?></td>
				 <td><i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= ($row['products'])?></td>
				 </td>
				 <td><i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= ($row['amount_paid']); ?></td>
				 
				 <td>
                  <a href="cart/action.phpremove=<?= $row['id'] ?>" class="text-danger lead" onclick="return confirm('Are you sure want to remove this item?');"><i class="fas fa-trash-alt"></i></a>
                </td>
			   </tr>
			   
			   <?php endwhile; ?>
			  
			 </tbody>
		   </table>
            </tbody>
      </div>
  
    </div>
  </div>
	<? require 'back_php/footer.php'?>
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
   <!-- popper -->
   <script src="js/popper.min.js"></script>
   <!-- bootstrap 4.1 -->
   <script src="js/bootstrap.min.js"></script>
   <!-- jQuery easing -->
   <script src="js/jquery.easing.1.3.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	
</body>
</html>