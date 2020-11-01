<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<style type="text/css">
		.rond {
			border-radius: 10px;
		}
		.avatar {
			width: 170px; height: 170px; overflow: hidden;
		}
		.btn-vk {
			background: #3577c1;
		}
		.text-vk {
			color: #3577c1;
		}
		.bg-vk {
			background: #edeef0;
		}
		.border-vk {
			border-color: #e7e8ec;
		}
	</style>
	<title></title>
</head>
<body>
	<?php 
		$con = mysqli_connect("127.0.0.1", "root","","hackathon");
		$check = mysqli_query($con, "SELECT * FROM idea");
		$query = mysqli_query($con, "SELECT * FROM idea");
		
		for ($i=0; $i < $query->num_rows; $i++) {
			$strd = $check -> fetch_assoc();
			if ($strd["link"] == "21.php") {
				break;
			}
		}
	 ?>
	 <div class="col-12 pl-0 pr-0 btn-vk text-center p-3 text-white">
	 	<h3><?php echo $strd["prodname"] ?></h3>
	 </div>
	<div class="col-10 mx-auto mt-3">
		<div class="row">
			<div class="rounded-circle avatar">
				<img src="<?php echo $strd["img"] ?>" style="width: 100%; height: 100%">
			</div>
			<div class="col-6 ml-5 p-3 bg-white rond border border-vk shadow">
				<h5 class="">
					<?php 
						echo $strd["descrip"];
					 ?>
				</h5>
			</div>
			<div class="col-3 ml-3" style="height: 200px;">
				<div class="rond col-12 shadow bg-white p-3 mt-1">
					<h5>
						Цена для реализации: <br><span class="text-success"><?php echo $strd["price"]; ?></span>
					</h5>
				</div>
				<div class="rond col-12 shadow bg-white p-3 mt-3">
					<h5>
						Время окупаемости: <br><span class="text-success"><?php echo $strd["okup"]; ?></span>
					</h5>
				</div>
			</div>
		</div>
		<div class="col-8 mx-auto mt-5">
			<div class="col-12 shadow p-3">
				<h5 class="text-center">
					<?php echo $strd["prodname"] ?><br>
					Сбербанк – 11.9% годовых на 3 года, ежемесяный платеж <?php echo $strd["sbkr"] ?>₽ <br> 
					Тинькоф – 7% годовых на 3 года, ежемесячный платеж <?php echo $strd["tnkr"] ?>₽ <br> 
					Альфа банк - 8,5% годовых на 3 года, ежемесячный платеж <?php echo $strd["abkr"] ?> ₽ <br> 
					Цена для реализации: <?php echo $strd["price"]; ?>

				</h5>
			</div>
		</div>
	</div>	
	
	
</body>
</html>в