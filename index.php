<?php 
//khỏi tạo session để lấy session đã lưu khi đăng nhập
    if (session_id() === '')
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/css.css"/>
		<title>TacThienBang Shop</title>
	</head>
	<body>
		<div class="fluid-container" style="background:#C0C0C0;">
			<img src="images/ship.png" style="position:fixed;top:60; right:0;"/>
			<div class="container">
				<!--banner-->
				<div class="row">
					<!--logo-->
					<div class="col-1">
						<img src="images/logo8.png" style="width:100%"/>
					</div>
					
					<!--menu-->
					<div class="col-2">
						<div style="margin-top:30px;" id="menu">
							<ul>
								<li><a href="#"><i class="fa fa-bars" style="font-size:60px;color:white;float:left;"></i><h6 style="font-size:20px;color:black;margin-left:10px;">Danh Mục sản phẩm </h6></a>
									<ul>
										<li><a href="#">Điện thoại - máy tính bảng</a>
										<li><a href="#">Điện tử - Điện Lạnh</a></li>
										<li><a href="#">Ti vi</a></li>
										<li><a href="#">Đồ gia Dụng</a></li>
										<li><a href="#">Đồ gia Dụng</a></li>
										<li><a href="#">Đồ gia Dụng</a></li>
										<li><a href="#">Đồ gia Dụng</a></li>
										
									</ul>
								</li>
							</ul>
							
						</div>
					</div>
					
					<!--search-->
					<div class="col-5">
						<form method="btl.html" action="post" style="margin-top:30px;">
							<div class="row">
								<div class="col-md-9">
									<input class="form-control" type="text" placeholder="Nhập vào mã sản phẩm"/>
								</div>
								<div class="col-md-3">
									<input class="form-control" style="background:#003399;color:white;margin-left:-20px;" type="submit" value="Tìm Kiếm">
								</div>
							</div>
							
						</form>
					</div>
						
					<!--login-->
					<div class="col-2">
						<div style="margin-top:30px;">
							<a href="login.php"><i class="fa fa-sign-in" style="font-size:60px;color:white;float:left;"></i><h6 style="font-size:16px;color:black;margin-left:10px;">Đăng nhập/ Đăng ký<br/>Tài khoản </h6></a>
						</div>
						<?php
                    		if (isset($_SESSION['username'])) {
                       			echo "
                            		<a href='xuly/logout.php'><i class='fas fa-sign-out-alt'></i></a>
                            		<span style='font-size: 15px; color: #009688; margin-left: 10px;'>Xin chào <b><i>". $_SESSION['username']."</i></b></span>
                        ";
                    		}else{
                        		echo '<a href="./login.php"><i class="fa fa-user-o" id="login-btn"></i></a>';
                    		}
                ?>
					</div>
					
					<!--cart-->
					<div class="col-2">
						<div style="margin-top:30px;">
							<a href="product.php"><i class="fa fa-cart-plus" style="font-size:60px;color:white;float:left;"></i><h6 style="font-size:25px;color:black;margin-left:10px;">Giỏ hàng </h6></a>
						</div>
						
					</div>
				</div>	

				<div class='row' style="margin-bottom:15px;">
					
				</div>
			</div>
	
		</div>
		<div class="fluid-container">
			<div class="container">
				<div id="main_menu">
					<a href="#">Tủ lạnh</a>
					<a href="#">Xong chảo</a>
					<a href="#">Bàn ghế</a>
					<a href="#">Bát đĩa</a>
					<a href="#">Nồi cơm</a>
					<a href="#">Điều hòa</a>
					<a href="#">Quạt</a>
					<a href="#">Giường</a>
					<a href="#">Ti vi</a>
					<a href="#">Máy tính</a>
				</div>
			</div>
		</div>
		<div class="fluid-container" style="background:#EEEEEE;">
			<div class="container">
				<div class="row" style="padding:20px 0px;">
					<div class="col-9">
						<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
						  <div class="carousel-indicators">
							<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
							<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
							<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
							<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 3"></button>
							<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 3"></button>
							<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 3"></button>
						  </div>
						  <div class="carousel-inner">
							<div class="carousel-item active">
								
							  <img src="images/1.jpg" class="d-block w-100" style="height:300px;" alt="...">
							</div>
							<div class="carousel-item">
							  <img src="images/2.jpg" class="d-block w-100" style="height:300px;" alt="...">
							</div>
							<div class="carousel-item">
							  <img src="images/3.jpg" class="d-block w-100" style="height:300px;" alt="...">
							</div>
							<div class="carousel-item">
							  <img src="images/4.jpg" class="d-block w-100" style="height:300px;" alt="...">
							</div>
							<div class="carousel-item">
							  <img src="images/5.jpg" class="d-block w-100" style="height:300px;" alt="...">
							</div>
							<div class="carousel-item">
							  <img src="images/6.png" class="d-block w-100" style="height:300px;" alt="...">
							</div>
						  </div>
						  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
							<h6 class="carousel-control-prev-icon" aria-hidden="true"></h6>
							<h6 class="visually-hidden">Previous</h6>
						  </button>
						  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
							<h6 class="carousel-control-next-icon" aria-hidden="true"></h6>
							<h6 class="visually-hidden">Next</h6>
						  </button>
						</div>
					</div>
					<div class="col-3">
						<a href="#"><img src="images/salelap.png" style="width:100%;height:100%"/></a>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div id="carouselExampleIndicators1" class="carousel slide" data-bs-ride="carousel">
						  <div class="carousel-indicators">
							<button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
							<button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="1" aria-label="Slide 2"></button>
							
						  </div>
						  <div class="carousel-inner img_sale">
							<div class="carousel-item active">
								<div class="row">
									<div class="col-2 sale_hot">
										<img src="images/ban.png" class="d-block w-100" alt="...">
										<h5>-69%</h5>
										<p>Bàn làm việc nhân viên RAT120SHL3D</p>
										<p>Giá 1.270.000 vnđ</p>
										<h6>Vừa mở bán</h6>
									</div>
									<div class="col-2 sale_hot">
										<img src="images/noi.jpg" class="d-block w-100" alt="...">
										<h5>-69%</h5>
										<p>Bộ Nồi Silit Diamant 5 Món</p>
										<p>Giá 4.890.000 vnd</p>
										<h6>Vừa mở bán</h6>
									</div>
									<div class="col-2 sale_hot">
										<img src="images/chao.jpg" class="d-block w-100" alt="...">
										<h5>-69%</h5>
										<p>Chảo chống dính SUNHOUSE Magnetic Pan SHM18 18cm</p>
										<p>Giá 127.000 vnđ</p>
										<h6>Vừa mở bán</h6>
									</div>
									<div class="col-2 sale_hot">
										<img src="images/tulanh.jpg" class="d-block w-100" alt="...">
										<h5>-69%</h5>
										<p>Tủ lạnh Toshiba inverter GR-B22VU-UKG (180 lít)</p>
										<p>Giá 12.000.000 vnđ</p>
										<h6>Vừa mở bán</h6>
									</div>
									<div class="col-2 sale_hot">
										<img src="images/mayloc.jpg" class="d-block w-100" alt="...">
										<h5>-69%</h5>
										<p>Máy lọc nước RO tích hợp làm nóng lạnh FujiE WPD5300C</p>
										<p>Giá 1.270.000 vnđ</p>
										<h6>Vừa mở bán</h6>
									</div>
									<div class="col-2 sale_hot">
										<img src="images/noicom.jpg" class="d-block w-100" alt="...">
										<h5>-69%</h5>
										<p>Nồi cơm điện Palado Hàn Quốc 1.8 Lít</p>
										<p>Giá 1.200.000 vnđ</p>
										<h6>Vừa mở bán</h6>
									</div>
								</div>
							  
							</div>
							<div class="carousel-item">
							  <div class="carousel-item active">
								<div class="row">
									<div class="col-2">
										<img src="images/ghe.jpg" class="d-block w-100" alt="...">
										<h5>-69%</h5>
										<p>Ghế Eames Nhựa Chân Gỗ</p>
										<p>Giá 127.000 vnđ</p>
										<h6>Vừa mở bán</h6>
									</div>
									<div class="col-2">
										<img src="images/ghesofa.jpg" class="d-block w-100" alt="...">
										<h5>-69%</h5>
										<p>Sofa giường thông minh</p>
										<p>Giá 7.000.000 vnđ</p>
										<h6>Vừa mở bán</h6>
									</div>
									<div class="col-2">
										<img src="images/giuong.jpg" class="d-block w-100" alt="...">
										<h5>-69%</h5>
										<p>GIƯỜNG NGỦ GỖ SIZE SS CÓ NGĂN KÉO</p>
										<p>Giá 15.000.000 vnđ</p>
										<h6>Vừa mở bán</h6>
									</div>
									<div class="col-2">
										<img src="images/tivi.jpg" class="d-block w-100" alt="...">
										<h5>-69%</h5>
										<p>Smart Tivi 4K 55 inch Sharp 4T-C55CJ2X</p>
										<p>Giá 10.000.000 vnđ</p>
										<h6>Vừa mở bán</h6>
									</div>
									<div class="col-2">
										<img src="images/dieuhoa.jpg" class="d-block w-100" alt="...">
										<h5>-69%</h5>
										<p>Điều hòa Funiki 1 chiều 9000BTU HSC09MMC</p>
										<p>Giá 5.000.000 vnđ</p>
										<h6>Vừa mở bán</h6>
									</div>
									<div class="col-2">
										<img src="images/quat.jpg" class="d-block w-100" alt="...">
										<h5>-69%</h5>
										<p>Quạt Điện Đứng Senko L1638</p>
										<p>Giá 127.000 vnđ</p>
										<h6>Vừa mở bán</h6>
									</div>
								</div>
							  
							</div>
							</div>
							
						  </div>
						  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide="prev">
							<h6 class="carousel-control-prev-icon" aria-hidden="true"></h6>
							<h6 class="visually-hidden">Previous</h6>
						  </button>
						  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide="next">
							<h6 class="carousel-control-next-icon" aria-hidden="true"></h6>
							<h6 class="visually-hidden">Next</h6>
						  </button>
						</div>
					</div>
				</div>
				
				<div class="row" style="margin:30px 0px;">
					<div class="col-2">
						<a href="#"><img style="width:100%;" src="https://www.tiendauroi.com/wp-content/uploads/2020/03/the-cao-dt.png"/></a>
					</div>
					<div class="col-8">
						<a href="#"><img style="width:100%;" src="https://salt.tikicdn.com/cache/w750/ts/banner/03/e7/ac/f40896f831f70457574873f37c4e2ff4.png.webp"/></a>
					</div>
					<div class="col-2">
						<a href="#"><img style="width:100%;" src="https://cdn.wccftech.com/wp-content/uploads/2018/12/WCCFgamespotgamedays.jpg"/></a>
					</div>
					
				</div>
				<div class="row">
					<div class="row-12">
						<div class="row" style="margin:30px 0px;">
							<div class="col-2">
									<a href="#"><img style="width:100%;" src="https://salt.tikicdn.com/cache/200x200/ts/product/a4/dc/0c/88cb484eae6bda7651bbc76602bebf0f.jpg.webp"/></a>
									<p>Drap Chống Thấm PT Họa Tiết Vườn Thú Kem</p>
									<p>Giá 69.000 vnđ</p>
	                    			
							</div>
							<div class="col-2">
								<a href="#"><img style="width:100%;" src="https://salt.tikicdn.com/cache/100x100/ts/product/09/2e/03/ea481d558b664fd6e699733f28f0c123.jpeg.webp"/></a>
								<p>Giấy ăn gấu trúc sợi tre siêu dai</p>
								<p>Giá 69.000 vnđ</p>
							</div>
							<div class="col-2">
								<a href="#"><img style="width:100%;" src="https://salt.tikicdn.com/cache/100x100/ts/product/8f/4c/b5/164ea4d18f67fd59d72eb6f1808a9be2.jpg.webp"/></a>
								<p>Ca lọc cặn dầu bằng thép không gỉ</p>
								<p>Giá 69.000 vnđ</p>
							</div>
							<div class="col-2">
								<a href="#"><img style="width:100%;" src="https://salt.tikicdn.com/cache/100x100/ts/product/7e/99/79/7f6ac2585e0150148dc2b3e85cf0fcdd.jpg.webp"/></a>
								<p>MÁY HÚT BỤI - NƯỚC CLEPRO S1/30</p>
								<p>Giá 69.000 vnđ</p>
							</div>
							<div class="col-2">
								<a href="#"><img style="width:100%;" src="https://salt.tikicdn.com/cache/100x100/media/catalog/producttmp/fe/79/20/19f8338a4f8238df8ebcdb5ace1d40eb.jpg.webp"/></a>
								<p>Nồi Chiên Không Dầu Điện Tử Lock&Lock EJF357BLK (5.2 Lít)</p>
								<p>Giá 69.000 vnđ</p>
							</div>
							<div class="col-2">
								<a href="#"><img style="width:100%;" src="https://salt.tikicdn.com/cache/100x100/ts/product/8f/4c/d0/cefa7ef327a71477963f94dc9e3a4b73.jpg.webp"/></a>
								<p>Quạt đứng Toshiba F-LSD10(W)VN</p>
								<p>Giá 69.000 vnđ</p>
							</div>
							<div class="col-2">
								<a href="#"><img style="width:100%;" src="https://salt.tikicdn.com/cache/100x100/ts/product/fb/f4/1c/30d9f8675534887b6527e64962af0b1a.jpg.webp"/></a>
								<p>Bộ Cây Lau Nhà Tự Vắt Thông Minh 2 Ngăn</p>
								<p>Giá 169.000 vnđ</p>
							</div>
							<div class="col-2">
								<a href="#"><img style="width:100%;" src="https://salt.tikicdn.com/cache/100x100/ts/product/6d/f2/7f/744fe723cd25a7347bad611fa0f7440a.png.webp"/></a>
								<p>Bàn Học Bàn Làm Việc Kết Hợp Kệ Sách</p>
								<p>Giá 69.000 vnđ</p>
							</div>
							<div class="col-2">
								<a href="#"><img style="width:100%;" src="https://salt.tikicdn.com/cache/100x100/ts/product/df/af/65/5d9179461fe36920cf9bd3ea2574ea2b.jpg.webp"/></a>
								<p>Thang nhôm xếp chữ A </p>
								<p>Giá 69.000 vnđ</p>
							</div>
							<div class="col-2">
								<a href="#"><img style="width:100%;" src="https://salt.tikicdn.com/cache/100x100/ts/product/f9/26/e3/dac7a59f6f0ab16985fae288af103d41.jpg.webp"/></a>
								<p>Bàn xoay để Laptop Đa Năng</p>
								<p>Giá 69.000 vnđ</p>
							</div>
							<div class="col-2">
								<a href="#"><img style="width:100%;" src="https://salt.tikicdn.com/cache/100x100/media/catalog/producttmp/d0/db/68/9b2b39dc961e489b223d5430b3e33991.jpg.webp"/></a>
								<p>Dao Làm Bếp Đa Năng Sunhouse</p>
								<p>Giá 69.000 vnđ</p>
							</div>
							<div class="col-2">
								<a href="#"><img style="width:100%;" src="https://salt.tikicdn.com/cache/100x100/ts/product/3c/f1/ad/46c4818e7f1838f0da6eeb805cdc9129.jpg.webp"/></a>
								<p>Bình Lọc Nước BRITA Flow Basic Blue</p>
								<p>Giá 69.000 vnđ</p>
							</div>
							
						</div>
					</div>		
				</div>
				<div class="row" style="margin:30px 0px;">
					<div class="col-3">
						<a href="#"><img style="width:100%;" src="https://salt.tikicdn.com/cache/w280/ts/banner/36/7e/0c/e3ffce369d3f9c886408604ae23189bb.png.webp"/></a>
					</div>
					<div class="col-3">
						<a href="#"><img style="width:100%;" src="https://salt.tikicdn.com/cache/w280/ts/banner/2d/eb/28/0bb7b83025d2a1614015da114e0f544e.png.webp"/></a>
					</div>
					<div class="col-3">
						<a href="#"><img style="width:100%;" src="https://salt.tikicdn.com/cache/w280/ts/banner/ec/36/e6/5e2833fe00e7e75901d397fe469cd5b7.png.webp"/></a>
					</div>
					<div class="col-3">
						<a href="#"><img style="width:100%;" src="https://salt.tikicdn.com/cache/w280/ts/banner/16/69/81/8aae6d41a0b05f91f8d0f1cc5db43c5b.png.webp"/></a>
					</div>
					
				</div>
				<div class="row" style="margin:30px 0px;">
					<div class="col-4">
						<a href="#"><img style="width:100%;" src="https://salt.tikicdn.com/cache/w400/ts/banner/3a/5d/92/c48bbf697ade39a2528280f9cafb8830.png.webp"/></a>
					</div>
					<div class="col-4">
						<a href="#"><img style="width:100%;" src="https://salt.tikicdn.com/cache/w400/ts/banner/16/81/47/0b148b8b20356793ea6973e21565c1a3.png.webp"/></a>
					</div>
					<div class="col-4">
						<a href="#"><img style="width:100%;" src="https://salt.tikicdn.com/cache/w400/ts/banner/4e/db/20/2cf1e1d2a8c2feb7861376d3b7cfbce9.png.webp"/></a>
					</div>
					
				</div>	
				<div class="row s" style="margin:30px 0px;justify-content: space-between;display:flex;">
					<div class="col-auto">
						<a href="#">
							<img src="https://cdn.tgdd.vn//GameApp/-1//MemeCheems57-500x500.jpg" style="width:110px"><br/><p>Bí kíp săn sale</p>
						</a>
					</div>
					<div class="col-auto">
						<a href="#">
							<img src="https://i.pinimg.com/736x/e9/29/64/e92964b7ff2fa02ab99bd59ac6c02fe9.jpg" style="width:110px"><br/><p>Thịt rau củ</p>
						</a>
					</div>
					<div class="col-auto">
						<a href="#">
							<img src="https://palada.vn/wp-content/uploads/2021/07/them-m-nhu-the-nay-nay.jpg" style="width:110px"><br/><p>Mã giảm giá</p>
						</a>
					</div>
					<div class="col-auto">
						<a href="#">
							<img src="https://cdn.tgdd.vn//GameApp/1335967//800x-800x462.jpg" style="width:110px"><br/><p>Dịch vụ tiện ích</p>
						</a>
					</div>
					<div class="col-auto">
						<a href="#">
							<img src="https://i.redd.it/ryeppulanmt41.jpg" style="width:110px"><br/><p>Gói hội viên</p>
						</a>
					</div>
					<div class="col-auto">
						<a href="#">
							<img src="https://gamek.mediacdn.vn/133514250583805952/2021/3/3/photo-1-1614760815795919925922.jpg" style="width:110px"><br/><p>Giảm giá </p>
						</a>
					</div>
					<div class="col-auto">
						<a href="#">
							<img src="https://i.pinimg.com/564x/44/8b/34/448b3416286b5e7c057392225033d8fe.jpg" style="width:110px"><br/><p>Giảm tiền 15%</p>
						</a>
					</div>
					<div class="col-auto">
						<a href="#">
							<img src="https://media.travelmag.vn/files/content/2021/08/29/ban-sao-cua-khong-co-tieu-de-15-17241357.jpg" style="width:110px"><br/><p>Ưu đãi thanh toán</p>
						</a>
					</div>
					<div class="col-auto">
						<a href="#">
							<img src="https://memedaily.vn/storage/meme/meme-cho-vang-adu-vjp-a-du-vip.jpg" style="width:110px"><br/><p>Hẹn giao & Lắp đặt</p>
						</a>
					</div>
					
				</div>
			</div>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
		
		<footer>
			<div class="row">
					<div class="row-12">
						<div class="row" style="margin:30px 0px;">
							<div class="col-3">
								<h5>Hỗ trợ khách hàng</h5>
								<a href="#">Hotline: 1900-6035</a></br>
								<a href="#">(1000 đ/phút, 8-21h kể cả T7, CN)</a></br>
								<a href="#">Các câu hỏi thường gặp</a></br>
								<a href="#">Gửi yêu cầu hỗ trợ</a></br>
								<a href="#">Hướng dẫn đặt hàng</a></br>
								<a href="#">Chính sách đổi trả</a></br>
								<a href="#">Hướng dẫn trả góp</a></br>
								<a href="#">Chính sách hàng nhập khẩu</a></br>
								<a href="#">Hỗ trợ khách hàng: hotro@tacthienbang.vn</a></br>
								<a href="#">Báo lỗi bảo mật: security@tacthienbang.vn</a></br>
							</div>
							<div class="col-3">
								<h5>Về TacThienBang</h5>
								<a href="#">Giới thiệu TacThienBang</a></br>
								<a href="#">Tuyển dụng</a></br>
								<a href="#">Chính sách bảo mật thanh toán</a></br>
								<a href="#">Chính sách bảo mật thông tin cá nhân</a></br>
								<a href="#">Chính sách giải quyết khiếu nại</a></br>
								<a href="#">Điều khoản sử dụng</a></br>
								<a href="#">Giới thiệu TacThienBang Xu</a></br>
								<a href="#">Tiếp thị liên kết cùng TacThienBang</a></br>
								<a href="#">Bán hàng doanh nghiệp</a></br>
							</div>
							<div class="col-3">
								<h5>Địa chỉ văn phòng: 69 Tạc Thiên Bang, thành phố Lương Sơn Bạc</h5>
								<h5>© 2077 - Bản quyền của Công Ty Cổ Phần Tạc Thiên Bang</h5>
								<p>Giấy chứng nhận Đăng ký Kinh doanh số 6996696969 do Sở Kế hoạch và Đầu tư Thành phố Lương Sơn Bạc cấp ngày 23/09/2077</p>
							</div>
							<div class="col-3">
								<h5>Kết nối với chúng tôi</h5>
								<a href="https://vi-vn.facebook.com/"><img src="https://fptshop.com.vn/Uploads/images/TinTuc/05/28/bao_ve_anh_Dai_dien_FB.png" style="width:70px">
								<a href="https://zalo.me/pc/"><img src="https://trainthetrainer.vn/wp-content/uploads/2021/05/zalo-4.png" style="width:70px">
								<a href="https://youtube.com/"><img src="https://www.youtube.com/img/desktop/yt_1200.png" style="width:70px">
								<a href="https://twitter.com/"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4f/Twitter-logo.svg/1200px-Twitter-logo.svg.png" style="width:70px">
							</div>
						</div>
					</div>
				</div>				
		</footer>
	</body>
</html>