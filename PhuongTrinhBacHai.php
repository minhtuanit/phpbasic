<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<title>Phương Trình Bậc Hai</title>
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
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2 sidebar pr-0">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="SoNguyenTo.php">
							<i class="fa fa-globe"></i> Số nguyên tố
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="PhuongTrinhBacNhat.php">
							<i class="fa fa-globe"></i> Phương trình bậc nhất
						</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="PhuongTrinhBacHai.php">
							<i class="fa fa-dot-circle"></i> Phương trình bậc 2
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
			
			<?php
				if($_SERVER['REQUEST_METHOD'] == 'GET'){
					$a = isset($_GET['a']) ? $_GET['a'] : '';
					$b = isset($_GET['b']) ? $_GET['b'] : '';
					$c = isset($_GET['c']) ? $_GET['c'] : '';
				}
			?>
			
			<div class="col-md">
				<div class="content">
					<p><span class="text-header">Bài toán</span> kiểm tra phương trình bậc hai</p>
					<div class="main-content">
						<form method="get" action="PhuongTrinhBacHai.php">
							<div class="form-group">
								<input name="a" class="form-control form-input" placeholder="a" value="<?php echo $a; ?>">X2 + <input name="b" class="form-control form-input" placeholder="b" value="<?php echo $b; ?>">X + <input name="c" class="form-control form-input" placeholder="c" value="<?php echo $c; ?>"> = 0
						  </div>
							<button class="btn btn-primary" type="submit">Tính</button>
						</form>
					</div>
					
					<?php
						include('ham.php');
						if(is_numeric($a) && is_numeric($b) && is_numeric($c)){
							echo '
								<div class="result mt-3">
									'. phuongTrinhBacHai($a, $b, $c) .'
								</div>			
							';
						} else if($a != '' && $b != '' && $c != '')
							echo '
								<div class="error mt-3">
									a hoặc b hoặc c không phải là số
								</div>
							';	
						
					?>
					
					
				</div>
			</div>
		</div>
	</div>		
</section>
</body>
</html>
