
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script language="javascript"></script>
	<link rel="stylesheet" type="text/css" href="./code/sport.css">
	<script src="./code/funtion.js"></script>
</head>
<body>
	<div class="page-header">
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<div class="text-left">
				Địa chỉ:101B-Lê Hưu Trác-Sơn Trà-Đà Nẵng
			</div>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<div class="text-right">
				<a href="./code/thanhtoan.html"><span class="glyphicon glyphicon-shopping-cart"></span>Giỏ hàng</a>
			</div>				
		</div>
	</div>
	<div class="logo">
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
			<a href="./responsive.html"><img class="polo" src="./Image/logo.JPG" width="230" height="125"></a>
		</div>
		<div class="col-xs-3 col-sm-3 col-md-6 col-lg-3">
			<img class="picture" src="./Image/uytin.jpg" width="230" height="125">
		</div>		
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
			<img class="picture" src="./Image/giaohang.jpg" width="230" height="125">
		</div>		
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
			<img class="picture" src="./Image/phone.jpg" width="230" height="125">
		</div>		
	</div>
	<div class="container">
		<div class="menu">
			<div class="topnav" id="myTopnav">
			    <a href="products/selectAllProduct.php"><span class="glyphicon glyphicon-home"></span>QUẢN LÍ SẢN PHẨM</a>
			    <a href="categories/selectAllCategories.php">  QUẢN LÍ LOẠI SẢN PHẨM</a>
			    <a href="../responsive.html#sp">QUẢN LÍ NHÂN VIÊN</a>
			    <a href="./thanhtoan.html">QUẢN LÍ KHÁCH HÀNG</a>
			    <a href="./lienhe.html">ĐƠN HÀNG</a>
			    
					<form class="navbar-form navbar-right">
					<a class="btn btn-primary" data-toggle="modal" href='#modal-iddangnhap'><span class="glyphicon glyphicon-log-in"></span> Đăng nhập</a>
					<a class="btn btn-primary" data-toggle="modal" href='#modal-iddangky'><span class="glyphicon glyphicon-user"></span> Đăng ký</a>
				</form>
			    <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
  			</div>
			







	<div class="modal fade" id="modal-iddangnhap">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="submit" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<center><h4 class="modal-title"><b> ĐĂNG NHẬP TÀI KHOẢN</b></h4></center>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="row">
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<label style="padding: 15px;"><span class="glyphicon glyphicon-user"></span> User name: </label>
							</div>
							<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
								<input type="text" name="username" id="Username" class="form-control" placeholder="Tên đăng nhập">
							</div>
						</div>
						<div class="row">
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<label style="padding: 15px;"><i class="fa fa-briefcase"></i> Password: </label>
							</div>
							<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
								<input type="password" name="password" id="Password" class="form-control" placeholder="Mật khẩu">
								<p></p>
								<p style="color: red;">Bạn chưa có tài khoản?</p>
								<p style="color: red;">Đăng ký để sử dụng</p>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-foote">
					<button type="submit" class="btn btn-default" data-dismiss="modal">Thoát</button>
					<button type="submit" onclick="signin()" class="btn btn-primary">OK</button>
				</div>
			</div>
		</div>
	</div>
		<div class="modal fade" id="modal-iddangky">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="submit" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<center><h4 class="modal-title"><b> ĐĂNG KÝ TÀI KHOẢN</b></h4></center>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="row">
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
									<label style="padding: 15px;"><span class="glyphicon glyphicon-pencil"></span> Full Name: </label>
								</div>
								<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
									<input type="text" name="name" id="inputName" class="form-control" placeholder="Họ Tên">
								</div>
							</div>
							<div class="row">
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
									<label style="padding: 15px;"><span class="glyphicon glyphicon-phone-alt"></span> Phone: </label>
								</div>
								<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
									<input type="phone" name="phone" id="inputPhone" class="form-control" placeholder="Số Điện Thoại">
								</div>
							</div>
							<div class="row">
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
									<label style="padding: 15px;"><span class="glyphicon glyphicon-envelope"></span> Email: </label>
								</div>
								<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
									<input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email">
								</div>
							</div>
							<div class="row">
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
									<label style="padding: 15px;"><span class="glyphicon glyphicon-user"></span> User Name:</label>
								</div>
								<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
									<input type="text" name="username" id="inputUsername" class="form-control" placeholder="Tên Đăng Nhập">
								</div>
							</div>
							<div class="row">
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
									<label style="padding: 15px;"><i class="fa fa-briefcase"></i> Password: </label>
								</div>
								<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
									<input type="password" name="password" id="inputPass" class="form-control" placeholder="Mật khẩu">
								</div>
								<p id="display">
							</div>
						</div>
						<div class="modal-foote">
							<button type="submit" class="btn btn-default" data-dismiss="modal">Thoát</button>
							<button type="submit" name="signin" class="btn btn-primary">OK</button>
							<button type="submit" onclick="display()" class="btn btn-primary">display</button>
						</div>
					</div>
				</div>
			</div>
		</div>
</body>
</html>