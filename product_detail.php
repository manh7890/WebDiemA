<?php
	require "config/config.php";
	
?>

<html>
	<head>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
		<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
		
		<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
		<link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css" rel="stylesheet">
		
	</head>
	<body>
		<div class="container">
			<h1 style="text-align:center;font-size:24px;">Chi tiết sản phẩm</h1>
			<div class="row">
				<?php
					$id = $_GET["product_id"];
					$sql = "select * from tbl_product where Product_ID='".$id."'";
								
					$result = mysqli_query($conn, $sql);

					if (mysqli_num_rows($result) > 0) {
					// output data of each row
						while($row = mysqli_fetch_assoc($result)) {
						
						echo "<p>".$row["Product_Name"]."</p>";
						echo "<p style='color:red'>".$row["Price"]."</p>";
						echo "<p>".$row["Description"]."</p>";
						
						
						
					
						}
					} 
					else {
						echo "0 results";
					}
				?>
			
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
			<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
			<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
			<script>
				$(document).ready( function () {
					$('#product_table').DataTable();
				} );
			</script>
	</body>
</html>
