	<?php
	session_start();
	?>

	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>ComputerConstructor</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

		<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>


		<link rel="stylesheet" href="css/list_slide.css">
		<link rel="stylesheet" href="main.css">

		<!-- <script src="js/main.js"></script> -->
		<script src="js/jsCanvas/mainCanvas.js"></script>
	</head>
	<body>

		<header>	
			<div class="container-lg container-md-fluid ">
				<div class="row align-items-center ">
					<div class="col-xl-auto order-lg-0 col-lg offset-lg-0  ml-lg-0 col-md-3 order-sm-0 ml-md-auto col-sm-6 col-12">
						<a href="index.php">Главная</a>				
					</div>			
					<div class="col-xl order-lg-1 col-lg col-md-3  order-sm-4 ml-md-auto mr-xs-auto col-sm-6 col">
						<a href="inf.php">Информация</a> 
					</div>
					<div class="col-xl order-lg-2 col-lg col-md-3 order-sm-7 ml-md-auto col-sm-6 col">
						<a href="instruction.php">Руководства</a>				
					</div>
					<div class="col-xl order-lg-3 col-lg col-md-2 ml-md-auto mr-md-auto order-md-1 d-md-block d-none">
						<img src="img/01.png" alt="">
					</div>
					<div class="col-xl order-lg-4 col-lg col-md-5 order-sm-5 ml-md-auto mr-md-auto text_right col-sm-6 col">
						<a href="seach.php">Комплектующие</a>				
					</div>
					<div class="col-xl order-lg-5 col-lg col-md-4 order-sm-8 mr-md-auto col-sm-6 col">
						<a href="designer.php">Конструктор</a>				
					</div> 
					<?php if(isset($_SESSION["login"])){
						?>
						<div class="col-xl order-lg-6 col-lg mr-lg-0 col-md-4 order-sm-2 mr-md-auto text_right col-sm-6 col">
							<a href="account.php">Профиль</a>	
						</div>
					<?php } else{?>


						<div class="col-xl order-lg-6 col-lg mr-lg-0 col-md-4 order-sm-2 mr-md-auto text_right col-sm-6 col">
							<a href="login.php">Авторизация</a>	
						</div>
					<?php } ?>
					<div class="d-lg-none d-md-block w-100 order-sm-3 pd_t"></div>
					<div class="d-lg-none d-md-block  w-100 order-sm-6 pd_t"></div>
				</div>		
			</div>
		</header>

		<section id="work_space">
			<div class="row">
			<!-- <div class="col-lg-2">
				<div class="container">					

				</div>
			</div> -->

			<div class="col-lg-8">
				<div class="container">		
					<canvas id="canvas" width="700" height="600"></canvas>		
				</div>
			</div>

			<div class="col-lg-4">
				<div class="container_comp">	

					
					<form id="rezultForm" method="POST" action="php/user/save_comp.php">
						<div id="rezult" style="">						
							<div class="row">
								<div class=" col-6">
									<h4>наименование</h4>
								</div>
								<div class="col-3">
									<h4>цена</h4>
								</div>
								<div class="col-1">
									<h4>кол</h4>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-7">
								<input type="text" name="name" style="font-size: 25px;" class="save_button" 
								<?php if(isset($_SESSION["name"])){?>	
									value="<?=$_SESSION["name"]?>
									<?php }?>">
								</div>
								<div class="col-5">
									<button type="submit" class="save_button">
										Сохранить сборку
									</button>
								</div>
							</div>
						</form>

					</div>
				</div>
			</div>
		</section>

	</body>
	</html>