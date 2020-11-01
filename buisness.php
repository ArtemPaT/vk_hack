
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		@font-face {
			font-family: Rockin Record;
			src:url(19755.ttf);
		}
		.title {
			font-family: Rockin Record;
			font-size: 30px;
		}  
		.rad{
			border-radius: 15px;
		}        
		.icon{
			width: 70px;
			height: 40px;
		}
		.iconz{
			width: 85px;
			height: 40px;
		}
		.soh{
			transition: 2s;
		}
		.otst{
			margin-left: 200px;
		}
		.bg-vk {
			background: #edeef0;
		}
		.border-vk {
			border-color: #e7e8ec;
		}
		.text-vk {
			color: #3577c1;
		}
		.text-vk2 {
			color: #818c99;
		}
		.bolder {
			font-weight: bolder;
		}
		.bg-dis {
			background: #36393f;
		}
		.bob {
			border-bottom: none;
			cursor: pointer;
		}
		.main {
			display: block;
		}
		.plusmon {
			display: none;
		}
		.minmon {
			display: none;
		}
		.borbot {
			border-bottom: 1.3px solid;
			border-color: #36393f;
		}
		.btn-vk {
			background: #3577c1;
		}
	</style>
</head>
<body>
		<div class="col-10 btn-vk mx-auto" style="height: 100px; border-radius: 0 0 20px 20px;">
					<div class="row">
						<div class="col-1 mt-2">
							<img src="logo.png" class="w-100 col-12">
						</div>
						<div class="col-2 mt-4">
							<h1 class="title" style="color: white;">VK БИЗНЕС</h1>
						</div>
					</div>
		</div>
				<?php 
	//connect
	//
		$con_bd = mysqli_connect("localhost", "id15279334_artem","M<@?4B-XLc1UIwH?","id15279334_hackathon");
		$con_table_rash = mysqli_query($con_bd, 'SELECT * FROM rash');
		$con_table_rash2 = mysqli_query($con_bd, 'SELECT * FROM rash');
		$con_table_dohod = mysqli_query($con_bd, 'SELECT * FROM dohod');
		$con_table_dohod2 = mysqli_query($con_bd, 'SELECT * FROM dohod');
		$table_count_rash = mysqli_num_rows($con_table_rash);
		$table_count_dohod = mysqli_num_rows($con_table_dohod);
		$obdohod = 0;
		$zardohod = 0;
		$dopdohod = 0;
		$obrash = 0;
		$prodrash = 0;
		$zadrash = 0;
		$dosrash =0;
		$prash = 0;
	 ?>
	 <?php 
	 //dohod
	 //
	 	for ($i=0; $i < $table_count_dohod; $i++) { 
			$result3 = $con_table_dohod -> fetch_assoc();
			$obdohod = $obdohod + $result3["obdohod"];
			$zardohod = $zardohod + $result3["zardohod"];
			$dopdohod = $dopdohod + $result3["dopdohod"];
		}
	  ?>
	  <?php 
	  	//rashod
	  //
		  	for ($i=0; $i < $table_count_rash; $i++) { 
				$result = $con_table_rash -> fetch_assoc();
				$obrash = $obrash + $result["obrash"];
				$prodrash = $prodrash + $result["prodrash"];
				$zadrash = $zadrash + $result["zadrash"];
				$dosrash = $dosrash + $result["dosrash"];
				$prash = $prash + $result["prash"];
			}
			$fmoney = $obdohod - $obrash;
	   ?>

	<div class="col-5 mx-auto bg-white pt-2 border-vk border pr-4 pl-4 mt-5 mb-5" >
		<h2 class="text-center bolder">Расчет финансов</h2>
		<div class="row text-center mt-5">
			<div class="col-4 borbot bob">
				<h5 class="text text-vk">Главная</h5>
			</div>
			<div class="col-4 borbot bob">
				<h5 class="text text-vk2">Доходы</h5>
			</div>
			<div class="col-4 borbot bob">
				<h5 class="text text-vk2">Расходы</h5>
			</div>
		</div>
		<div class="main mt-3 text-center">
			<h5>
				<?php  
					echo "Ваши доходы: ".$obdohod."₽" ;
				?>
				
			</h5><br>
			<h5>
				<?php 
					echo "Ваши расходы: ".$obrash."₽" ;
				 ?>
			</h5><br>
			<h5>
				<?php 
					echo "Ваши свободные деньги: ".$fmoney."₽" ;
				 ?>
			</h5><br>
			<h5>
				Выберите фильтр исходя из ваших свободных денег
				<select id="filter">
				  <option value="item">все</option>
				  <option value="dd">до 10 т.р</option>
				  <option value="ddv">до 20 т.р</option>
				  <option value="dt">до 30 т.р</option>
				  <option value="dch">До 40 т.р</option>
				  <option value="dp">до 50 т.р</option>
				  <option value="oh">от 60 т.р</option>
				  <option value="bs">больше 100 т.р</option>
				</select>
			</h5>
		</div>
		<div class="plusmon mt-3">
			<h5 class="text-center">
				<?php 
					echo "Общий доход: ". $result3["obdohod"] ."₽";
				?>
			</h5>
			<form action="insert_dohod.php" method="GET">
				<div class="row border-top border-dark pt-3">
					<div class="text-center col-6 border-right border-dark">
						<h5>
							<?php 
								echo "Доход с зарплаты: ". $result3["zardohod"] ."₽";
							 ?>
							
						</h5><br>
						<input class="bg-vk rounded border" type="number" name="zardohod" placeholder="Доход"><br><br>
						
					</div>
					<div class="col-6 text-center">
						<h5 class="text-center">
							<?php 
								echo "Доп. доход: ". $result3["dopdohod"] ."₽";
							 ?>
						</h5><br>
						<input class="bg-vk rounded border" type="number" name="dopdohod" placeholder="Доход"><br><br>
						
					</div>
					<button class="btn btn1 btn-vk text-white border mx-auto mt-3">Сохранить</button>
				</div>
			</form>
			<div class=" mt-4" style="cursor: default;">
				<h5 class="text-center">История расходов</h5>
					<div class="row">
							<div class="col-3 pr-0 pl-0 text-center btn-vk text-white border border-dark" >
								<h5>
									Номер
								</h5>
							</div>
							<div class="col-3 pr-0 pl-0 text-center bg-vk border border-dark" >
								<h5>
									Общее
								</h5>
							</div>
							<div class="col-3 pr-0 pl-0 text-center bg-vk border border-dark" >
								<h5>
									Зарплата
								</h5>
							</div>
							<div class="col-3 pr-0 pl-0 text-center bg-vk border border-dark" >
								<h5>
									Дополнительно
								</h5>
							</div>
						</div>
				<?php 
					for ($i=0; $i < $table_count_dohod; $i++) {
						$result2 = $con_table_dohod2 -> fetch_assoc();
						echo '
						<div class="row">
							<div class="col-3 bg-vk pr-0 pl-0 text-center border border-dark" style="height: 50px;">
								<h5>
									'. $result2["date"] .'
								</h5>
							</div>
							<div class="col-3 bg-vk pr-0 pl-0 text-center border border-dark" style="height: 50px;">
								<h5>
									'. $result2["obdohod"] . "₽".'
								</h5>
							</div>
							<div class="col-3 bg-vk pr-0 pl-0 text-center border border-dark" style="height: 50px;">
								<h5>
									'. $result2["zardohod"] ."₽".'
								</h5>
							</div>
							<div class="col-3 bg-vk pr-0 pl-0 text-center border border-dark" style="height: 50px;">
								<h5>
									'. $result2["dopdohod"] ."₽".'
								</h5>
							</div>
						</div>';
					}
					
				 ?>
			</div>
		</div>
		<div class="minmon mt-3">
			<h5 class="text-center">
				<?php 
					echo "Общие расходы: ". $obrash ."₽";
				 ?>
			</h5>
			<form action="insert_rash.php" method="GET">
				<div class="row border-top border-dark pt-3">
					<div class="text-center col-6 border-right border-dark">
						<h5>
							<?php 
								echo "Расходы на задолженности: ". $zadrash ."₽";
							 ?>
						</h5><br>
						<input class="bg-vk inputrash1 rounded border" type="number" name="zadrash" placeholder="Расход"><br><br>
					</div>
					<div class="col-6 text-center">
						<h5 class="text-center">
							Расходы на продукты: 
							<?php 
								echo $prodrash;
							 ?>₽
						</h5><br>
						<input class="bg-vk inputrash2 rounded border" type="number" name="prodrash" placeholder="Расход"><br><br>
					</div>
				</div>
				<div class="row border-top border-dark pt-3 mt-3">
					<div class="text-center col-6 border-right border-dark">
						<h5>Расходы на досуг: 
							<?php 
								echo $dosrash;
							 ?>₽
						</h5><br>
						<input class="bg-vk inputrash3 rounded border" type="number" name="dosrash" placeholder="Расход"><br><br>
					</div>
					<div class="col-6 text-center">
						<h5 class="text-center">
							<?php 
								echo "Расходы на прочее: ". $prash ."₽";
							 ?>
						</h5><br>
						<input class="bg-vk inputrash4 rounded border" type="number" name="prash" placeholder="Расход"><br><br>
					</div>
					<button class="btn btn2 btn-vk text-white border mx-auto mt-3">Сохранить</button>
				</div>
			</form>

			<div class=" mt-4" style="cursor: default;">
				<h5 class="text-center">История расходов</h5>
					<div class="row">
							<div class="col-2 pr-0 pl-0 text-center btn-vk text-white border border-dark" >
								<h5>
									Номер
								</h5>
							</div>
							<div class="col-2 pr-0 pl-0 text-center bg-vk border border-dark" >
								<h5>
									Общее
								</h5>
							</div>
							<div class="col-2 pr-0 pl-0 text-center bg-vk border border-dark" >
								<h5>
									Долги
								</h5>
							</div>
							<div class="col-2 pr-0 pl-0 text-center bg-vk border border-dark" >
								<h5>
									Продукты
								</h5>
							</div>
							<div class="col-2 pr-0 pl-0 text-center bg-vk border border-dark" >
								<h5>
									Досуг
								</h5>
							</div>
							<div class="col-2 pr-0 pl-0 text-center bg-vk border border-dark">
								<h5>
									Прочее
								</h5>
							</div>
						</div>
				<?php 
					for ($i=0; $i < $table_count_rash; $i++) {
						$result2 = $con_table_rash2 -> fetch_assoc();
						echo '
						<div class="row">
							<div class="col-2 bg-vk pr-0 pl-0 text-center border border-dark" style="height: 50px;">
								<h5>
									'. $result2["date"] .'
								</h5>
							</div>
							<div class="col-2 bg-vk pr-0 pl-0 text-center border border-dark" style="height: 50px;">
								<h5>
									'. $result2["obrash"] . "₽".'
								</h5>
							</div>
							<div class="col-2 bg-vk pr-0 pl-0 text-center border border-dark" style="height: 50px;">
								<h5>
									'. $result2["zadrash"] ."₽".'
								</h5>
							</div>
							<div class="col-2 bg-vk pr-0 pl-0 text-center border border-dark" style="height: 50px;">
								<h5>
									'. $result2["prodrash"] ."₽".'
								</h5>
							</div>
							<div class="col-2 bg-vk pr-0 pl-0 text-center border border-dark" style="height: 50px;">
								<h5>
									'. $result2["dosrash"] ."₽".'
								</h5>
							</div>
							<div class="col-2 bg-vk pr-0 pl-0 text-center border border-dark" style="height: 50px;">
								<h5>
									'. $result2["prash"] ."₽".'
								</h5>
							</div>
						</div>';
					}
					
				 ?>
				
				
			</div>
		</div>
	</div>
		<div class="col-9 mx-auto">
				

				<?php 
					$con = mysqli_connect("localhost", "id15279334_artem","M<@?4B-XLc1UIwH?","id15279334_hackathon");
					$query = mysqli_query($con, "SELECT * FROM idea");
				?>
					<?php 
				 		//цикл начинается
				 		for($i=0;$i<$query->num_rows;$i++){
				 			$stroka = $query->fetch_assoc();
					?>			
					<div id="items">
						<div class="col-12 bg-light shadow p-3 mb-5 bg-white rad <?php echo $stroka["classdel"] ?>">
								<div class="col-12 btn-vk rounded"><h3 class="text-white pt-2 pb-2"> <?php echo $stroka["prodname"]; ?></h3></div>
								<div class="col-12 d-flex">
									<div class="col-3">
										<img src="<?php echo $stroka["img"] ?>" class="w-100 col-12">
									</div>
									<div class="col-6">
										<h5 class="mt-1"><?php echo $stroka["descrip"] ?></h5>
										<a href="<?php echo $stroka["link"] ?>">
											<button class="btn btn-vk text-white mt-3">Подробнее</button>
										</a>
									</div>
									<div class="col-3">
										<div class="col-12" style="height: 40px;"><h5 class="text-dark">Цена для реализации:</h5></div>
										<div class="col-12 mt-3" style="height: 80px;"><h5 class="text-success"><?php echo  $stroka["price"]; ?></h5></div>
										<div class="col-12" style="height: 40px;"><h5 class="text-dark">Время окупаемости:</h5></div>
										<div class="col-12 mt-3" style="height: 80px;"><h5 class="text-dark"><?php echo  $stroka["okup"]; ?></h5></div>
									</div>
								</div>
								
							</div>
					</div>
				 		<!--цикл заканчивается, создаёт 3 дива.-->
		 		<?php }; ?>  
		</div>
		<script src="main.js">

		</script>	
		<script src="val.js">
				
		</script>
</body>
</html>