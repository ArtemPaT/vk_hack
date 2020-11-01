<!DOCTYPE html>
<html>
<head>
	<title>VK Бизнес</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<meta charset="utf-8">
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
			margin-left: 280px;
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
	<?php 
		$con = mysqli_connect("localhost", "id15279334_artem","M<@?4B-XLc1UIwH?","id15279334_hackathon");
		$query = mysqli_query($con, "SELECT * FROM fran");
	 ?>
	<div class="col-10 mx-auto">
					<!--Шапка-->
			<div class="col-12 btn-vk" style="height: 100px; border-radius: 0 0 20px 20px;">
				<div class="row">
					<div class="col-1 mt-2">
						<img src="logo.png" class="w-100 col-12">
					</div>
					<div class="col-9 mt-2">
						<a href="buisness.php" class="text-white otst" style="text-decoration:none;">Бизнес идеи</a>
						<a href="admin.php" class="text-white otst" style="text-decoration:none;">+ Добавить франшизу</a>
					</div>
					<div class="col-2 mt-4">
						<h1 class="title" style="color: white;">VK БИЗНЕС</h1>
					</div>
				</div>
			</div>
			<div class="col-12 mt-5 mb-5 text-center pb-3 pt-3 sl1">
				<h3 >Что это?</h3>
				<div class="mb-2 mt-1 btn-vk mx-auto" style="width: 150px; height: 1.3px;"></div>
				<div class="row">
					<div class="col-4">
						<h3 class="text-vk mt-5">Многие люди стремятся обрести финансовую независимость и работать на себя, но не все знают с чего начать - этот раздел предназначен как раз для того что бы люди могли примерно соориентироваться и узнать расценки в разных сферах</h3>
					</div>
					<div class="col-4">
						<img src="cash.png" class="w-100 col-12">
					</div>
					<div class="col-4">
						<h3 class="text-vk mt-5 title">VK бизнес</h3><h3 class="text-vk mt-1"> - платформа, предоставляющая людям возможность найти то дело которым он хочет заниматься, которое будет приносить ему удовольствие и быть его активом  </h3>
					</div>
				</div>

			</div>
			
			<h1>Франшизы</h1>
				<?php for($i=0;$i<$query->num_rows;$i++){
	 					$fran = $query->fetch_assoc();
				?>
				<div class="col-12 bg-light shadow p-1 mb-5 bg-white rad" style="height: 300px;">
					
						<div class="col-12 d-flex pl-0" style="height: 270px;">
							<div class="col-2 mt-2 rad">
								<div class="col-12" style="height: 60px;">
									<h4><?php echo $fran["name"] ?></h4>
								</div>
								<div class="col-12" style="height: 180px;">
									<img src="<?php echo $fran["img"] ?>" class="w-100 col-12 mt-3">
								</div>
								<div class="col-12" style="height: 30px;">
									<img src="like.png" class="icon col-12">
									<img src="177.png" class="iconz col-12">
								</div>
							</div>
							<div class="col-5 btn-vk mt-2 rad ml-1">
								<h5 class="mt-1"><?php echo $fran["descrip"] ?></h5>
							</div>
							<div class="col-3 btn-vk mt-2 rad ml-1">
								<h5 class="text-white">Доступные города:</h5>
								<h5><?php echo $fran["loc"]  ?> </h5>
							</div>
							<div class="col-2 btn-vk mt-2 rad ml-1">
								<div class="col-12" style="height: 40px;"><h5 class="text-white">Цена для реализации:</h5></div>
								<div class="col-12 mt-3" style="height: 80px;"><h5 class=""><?php echo  $fran["price"]; ?></h5></div>
								<div class="col-12" style="height: 40px;"><h5 class="text-white">Время окупаемости:</h5></div>
								<div class="col-12 mt-3" style="height: 80px;"><h5 class=""><?php echo  $fran["okup"]; ?></h5></div>
							</div>
						</div>
						<h5 class="soh mt-5" style="opacity: 0%">Сохранено в закладках</h5>
						
				</div>
					<?php }; ?>  
			<h1>Готовые идеи</h1>
			<!--Предложения-->
				<?php 
					$query = mysqli_query($con, "SELECT * FROM idea");

				?>
				<?php 
	 		//цикл начинается
	 		for($i=0;$i<$query->num_rows;$i++){
	 			$stroka = $query->fetch_assoc();
				?>			
	 			<div class="col-12 bg-light shadow pl-0 pr-0 mb-5 bg-white rad pb-5">
					<div class="col-12 btn-vk pt-2 pb-2 rounded"><h3 class="text-white text-center"> <?php echo $stroka["prodname"]; ?></h3></div>
					<div class="col-12 d-flex mt-3" >
						<div class="col-3">
							<img src="<?php echo $stroka["img"] ?>" class="w-50 col-12">
							<div class="col-12" style="height: 30px;">
									<img src="like.png" class="icon col-12">
									<img src="177.png" class="iconz col-12">
							</div>
						</div>
						<div class="col-6">
							<h5 class="mt-1"><?php echo $stroka["descrip"] ?></h5>
							<a href="<?php echo $stroka["link"] ?>">
								<button class="btn btn-vk text-white mt-3">Подробнее</button>
							</a>
						</div>
						<div class="col-3">
							<div class="col-12"><h5 class="text-dark">Цена для реализации:</h5></div>
							<div class="col-12 mt-3"><h5 class="text-success"><?php echo  $stroka["price"]; ?></h5></div>
							<div class="col-12"><h5 class="text-dark">Время окупаемости:</h5></div>
							<div class="col-12 mt-3"><h5 class="text-dark"><?php echo  $stroka["okup"]; ?></h5></div>
						</div>
					</div>
					
				</div>
				<h5 class="soh mt-5" style="opacity: 0%">Сохранено в закладках</h5>
	 		<!--цикл заканчивается, создаёт 3 дива.-->
	 		<?php }; ?>  
	</div>
	<script src="fun.js">
		
	</script>
	<script type="text/javascript">
		let re = document.querySelector('.fkf');
		alert(re.value);
	</script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</script>
</body>
</html>