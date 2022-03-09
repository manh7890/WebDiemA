<?php
	require "config/config.php";
?>

<html>
	<head>
		<meta charset="utf-8">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
			<h1 style="text-align: center; font-size: 24px;">Cập nhật sản phẩm</h1>
			<div class="row">
				<form action="product.php" class="col-6" method="post">
					<?php
						if (isset($_GET["id"])) 
						{
							$id = $_GET["id"];
							// echo $id;
							$sql = "SELECT * FROM tbl_product where Product_ID ='".$id."'";
							$result = mysqli_query($conn, $sql);

							if ($result -> num_rows > 0) 
							{
								// output data of each row
								while($row = mysqli_fetch_assoc($result)) 
								{
									echo "<input type = 'hidden' name = 'product_id' value = '".$row["Product_ID"]."' >";
									echo "Cập nhật tên sản phẩm";
									echo "<input type='text' class='form-control' name='product_name' value = '".$row["Product_Name"]."'>";
									echo "Cập nhật giá sản phẩm";
									echo "<input type='text' class='form-control' name='price' value = '".$row["Price"]."'>";
									echo "Cập nhật mô tả sản phẩm";
									echo "<input type='text' class='form-control' name='description' value = '".$row["Description"]."'>";
									echo "Cập nhật trạng thái";
									echo "<input type='text' class='form-control' name='status' value = '".$row["Status"]."'>";
								}
							}
						}
					?>
					<input type="submit" name="update" value="Cập nhật" class="btn btn-primary">
				</form>
			</div>
		</div>
	</body>
</html>