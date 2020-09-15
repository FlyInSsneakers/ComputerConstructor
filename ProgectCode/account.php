 <?php session_start(); 
 require_once 'php/user/get_data.php';
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>ComputerConstructor</title>
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 	<link rel="stylesheet" href="css/account.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>

 </head>
 <body>
 	<<header>	
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
 	<div class="container">

 		<section>
 			<div class="container">
 				<div class="row both">
 					<div class="left">
 						<div class="borders">
 							<div class="item">
 								<?=$login?>
 							</div>
 							<div class="item">
 								<?=$email?>
 							</div>
 							<!-- <div class="item">
 								Пароль
 							</div> -->
 							<!-- <button class="edit" id="edit1">
 								Редактировать
 							</button> -->
 						</div>
 						<form method="POST" action="php/user/exit.php">
 							<button class="edit prefer">
 								Выход
 							</button>
 						</form>
 					</div>
 					<div class="right">
 						<?php
 						for ($i=0; $i <  count($rez); $i++) {?>
 							<form id="comp" method="POST" action="php/user/delete_comp.php"> 
 								<div class="container">
 									<div class="row">
 										<div class="col-5 block">
 											<h4><?=$rez[$i][0]?></h4>
 											<input type="text" name="name" style="display: none;" value="<?=$rez[$i][0]?>">
 											<h5><?=$rez[$i][1]?></h5>
 											<input type="text" name="id" style="display: none;" value="<?=$rez[$i][1]?>">
 										</div>
 										<div class="col-4 block">
 											<h4><?=$rez[$i][2]?></h4>
 										</div>
 										<div class="col-3 block" style="border-right: none;">
 											<div class="row">
 												<div class="col-6">
 													<button name = "change">Изменить</button>
 												</div>
 												<div class="col-6">
 													<button name = "delete">Удалить</button>
 												</div>
 											</div>
 										</div>

 									</div>
 								</div>
 							</form>

 						<?php }?>


 					</div>
 				</div>
 			</div>
 		</section> 
 		<!-- <form method="POST" action="" id="form" class="forms">
 			<div class="form-group row">
 				<div class="col-md-8">
 					<h2>Редактирование</h2>
 				</div>
 			</div>

 			<div class="form-group row">
 				<div class="col-md-8">
 					<input id="login" type="text" class="form-control" placeholder="Логин" name="email">
 				</div>
 			</div>

 			<div class="form-group row">
 				<div class="col-md-8">
 					<input id="email" type="text" class="form-control" placeholder="Почта" name="password">
 				</div>
 			</div>

 			<div class="form-group row">
 				<div class="col-md-8">
 					<input id="password1" type="text" class="form-control" placeholder="Пароль" name="password">
 				</div>
 			</div>

 			<div class="form-group row">
 				<div class="col-md-8">
 					<input id="password2" type="text" class="form-control" placeholder="Повторите пароль" name="password">
 				</div>
 			</div>

 			<div class="form-group row mb-0">
 				<div class="col-md-1">
 					<button type="submit" class="btn nonactive green" id="edit2">
 						Изменить 
 					</button>
 				</div>
 				<div class="col-md-5">
 				
 				</div>
 				<div class="col-md-1">
 					<button type="submit" class="btn nonactive green" id="edit2">
 						Закрыть
					</button>
				</div>

			</div>
		</form>      -->
	</div>

<!-- 	<script>
		$("#edit1").click(function() {
			$('#form').show("fast");
		});
		$("#edit2").click(function() {
			$('#form').hidden = true;
		});
		$(!"#edit2").click(function() {
			$('#form').hidden = true;
		});
	</script> -->

</body>
</html>