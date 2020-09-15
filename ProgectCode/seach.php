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

	<script src="js/main.js"></script>
	
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

	<section class="container_seach">
		<div class="container-lg">
			<div class="row">
				<div class="col-lg-3">
					<form id="form_attribute">
						<div class="filter">
							<div class="row">
								<div class="col-lg-11 ml-md-auto mr-md-auto">
									<div class="filter_row">
										<div class="filter_box">
											<!-- <form id="form"> -->
												<h5>Тип комплектующей</h5>
												<div class="filter_container">
													<label>
														<input type="radio" name="type_component" id="mat" value="mat" 
														<?php
														if(isset($_SESSION['component']) and $_SESSION['component']=='mather'){?>checked <?php } ?>> Материнская плата
													</label> 
													<br>
													<label>
														<input type="radio" name="type_component" id="cpu" value="cpu"
														<?php
														if(isset($_SESSION['component']) and $_SESSION['component']=='cpu'){?>checked <?php } ?>>
														Процессор
													</label>
													<br>
													<label>
														<input type="radio" name="type_component" id="cool" value="cool"
														<?php
														if(isset($_SESSION['component']) and $_SESSION['component']=='cooler'){?>checked <?php } ?>>
														Куллер
													</label>
													<br>
													<label>		
														<input type="radio" name="type_component" id="gc" value="gc" 
														<?php
														if(isset($_SESSION['component']) and $_SESSION['component']=='video'){?>checked <?php } ?> >
														Видеокарта
													</label>
													<br>
													<label>
														<input type="radio" name="type_component" id="ram" value="ram"
														<?php
														if(isset($_SESSION['component']) and $_SESSION['component']=='ram'){?>checked <?php } ?>>
														Модули памяти
													</label>
													<br>
													<label>
														<input type="radio" name="type_component" id="bp" value="bp"
														<?php
														if(isset($_SESSION['component']) and $_SESSION['component']=='bp'){?>checked <?php } ?>>
														Блок питания
													</label>
													<br>
													<label>
														<input type="radio" name="type_component" id="drive" value="drive"
														<?php
														if(isset($_SESSION['component']) and $_SESSION['component']=='drive'){?>checked <?php } ?>>
														Привод
													</label>
													<br>
													<label>
														<input class="radio_option" type="radio" name="type_component" id="hdd" value="hdd"
														<?php
														if(isset($_SESSION['component']) and $_SESSION['component']=='hdd'){?>checked <?php } ?>>
														Жесткий диск
													</label>
													<br>
													<label>
														<input class="radio_option" type="radio" name="type_component" id="ssd" value="ssd"

														<?php
														if(isset($_SESSION['component']) and $_SESSION['component']=='ssd'){?>checked <?php } ?>>
														Твердотельный накопитель
													</label>
													<br>
													<label>
														<input class="radio_option" type="radio" name="type_component" id="casec" value="casec"
														<?php
														if(isset($_SESSION['component']) and $_SESSION['component']=='case'){?>checked <?php } ?>>
														Корпус
													</label>
												</div>	
												<?php unset($_SESSION['component']); ?>
											</div>



											<div class="filter_box">
												<h5>Цена</h5>

												<p>
													<div class="row">
														<div class="col-lg-6">
															От
															<input type="number" id="price0"
															name="price0"  style="width: 72%; border:0; color:#f6931f; font-weight:bold;">
														</div>
														<div class="col-lg-6">
															До
															<input type="number" id="price1"
															name="price1"  style="width: 72%; border:0; color:#f6931f; font-weight:bold;">
														</div>
													</div>

												</p>

												<div id="slider-range" style=" width: 95%; margin: auto;"></div>


											</div>
										</div>
									</div>								
								</div>
							</div>
						</form>
					</div>

					<div class="col-lg-9">
						<div class="seach" style="margin-bottom: 25px;">

							<div class="row">
								<div class="col-lg-11 ml-auto mr-auto">
									<!-- <div class="seach_container">
										<form id="seach_form">
											<div>
												<input type="text" id="seach" name="seach" class="main_seach" >
											</div>	
										</form>
									</div> -->
									<div class="message">

									</div>
									<form id="form_page">
										<div class="browsing">

										</div>
									</form>

								</div>	
							</div>
						</div>						
					</div>

				</div>				
			</div>
		</div>
	</section>


</body>
</html>