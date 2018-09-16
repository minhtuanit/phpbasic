<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Số nguyên tố</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="Font-Awesome/css/fontawesome-all.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>
<script src="bootstrap/js/jquery-3.3.1.slim.min.js" type="text/javascript"></script>
<script src="bootstrap/js/popper.min.js" type="text/javascript"></script>
</head>

<body>
<header>
	<div class="container-fluid">
		<div class="row my-2">
			<div class="col-md-6">
				<span class="heading">Toán học cơ bản</span>
				
			</div>
			<div class="col-md-6">
				<a class="text-right nav-link" href="#">
					<i class="fa fa-user"></i> Lê Văn Long Vũ
				</a>
			</div>
		</div>
	</div>	
</header>
	
<section>
	<?php
		
		function kiemTraSoNguyenTo($n){
			$dem = 0;
			for($i = 1; $i <= $n; $i++){
				if($n % $i == 0)
					$dem++;
			}

			if($dem == 2)
				return true;
			else
				return false;
		}
	?>
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2 sidebar pr-0">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="SoNguyenTo.php">
							<i class="fa fa-dot-circle"></i> Số nguyên tố
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="PhuongTrinhBacNhat.php">
							<i class="fa fa-globe"></i> Phương trình bậc nhất
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="PhuongTrinhBacHai.php">
							<i class="fa fa-globe"></i> Phương trình bậc 2
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="ChuViVaDienTichTamGiac.php">
							<i class="fa fa-globe"></i> Chu vi và diện tích tam giác
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="GiaiThua.php">
							<i class="fa fa-globe"></i> Giai thừa
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
							<i class="fa fa-globe"></i> ...
						</a>
					</li>
				</ul>	
			</div>
			
			<div class="col-md">
				<div class="content">
					<p><span class="text-header">Bài toán</span> kiểm tra số nguyên tố</p>
					
					<div class="main-content">
						<form method="get" action="SoNguyenTo.php">
							<div class="form-group">
								<input class="form-control" placeholder="Nhập vào số cần kiểm tra" name="n">
							</div>
							<button class="btn btn-primary" type="submit">Kiểm tra</button>
						</form>
					</div>
					
					<?php
						if($_SERVER['REQUEST_METHOD'] == 'GET'){
							$n = isset($_GET['n']) ? $_GET['n'] : '';
							
							if(is_numeric($n)){
								if(kiemTraSoNguyenTo($n) == true){									
									echo '
										<div class="result mt-3">
											Số '. $n .' là số nguyên tố
										</div>';	
								} else {
									echo '
										<div class="result mt-3">
											Số '. $n . ' không phải là số nguyên tố
										</div>';
								}
							} else if($n != ''){
								echo '
									<div class="error mt-3">
										'. $n . ' không phải là chữ số
									</div>';
							}
							
						}
						?>
				</div>
			</div>
		</div>
	</div>		
</section>
</body>
</html>
