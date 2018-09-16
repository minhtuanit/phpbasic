<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
		function phuongTrinhBacNhat($a, $b) {
			if($a == 0)
			{
				if($b != 0){
					return "Phuong trinh vo nghiem";
				} else {
					return "Phuong trinh co nghiem vo dinh";
				}
			} else {
				return "Phuong trinh co nghiem la:" . -$b/$a;
			}
		}
		
		function phuongTrinhBacHai($a, $b, $c){
			if ($a==0)
			{
				if ($b==0)
				{
					if ($c==0) 
						return "Phuong trinh vo so nghiem";
					else 
						return "Phuong trinh vo nghiem";
				}
				else
				{
					$x1=-$b/$c;
					return "Phuong trinh co 1 nghiem: " . $x1;
				}
			}
			else
			{
				$delta=$b*$b-4*$a*$c ;
				if ($delta < 0) 
					return "Phuong trinh vo nghiem";
				if ($delta == 0)
				{
					$x1=-$b/(2*$a);
					return "Phuong trinh da nghiem kep: " . $x1;
				}
				if ($delta > 0)
				{
					$x1=(-$b+sqrt($delta))/(2*$a);
					$x2=(-$b-sqrt($delta))/(2*$a);
					return "Phuong trinh co 2 nghiem phan biet: x1= " . $x1 . " x2= " . $x2;
				}
			}
		}
	
		function chuViTamGiac($a, $b, $c){
			$chuVi =  $a + $b + $c;
			return "Chu vi tam giác là: " . $chuVi;
		}
	
		function dienTichTamGiac($a, $b, $c){
			$p = ($a + $b + $c) / 2;
			$dienTich =  sqrt($p*($p-$a)*($p-$b)*($p-$c));
			return "Diện tích tam giác là: " . $dienTich;
		}
	
		function tinhGiaiThua($a){
			$giaiThua = 1;
			for($i=1; $i <= $a; $i++){  
				$giaiThua = $giaiThua * $i;  
			}  
			return "Giai thừa của ".$a." la: " . $giaiThua;  
		}
	?>
	
</body>
</html>