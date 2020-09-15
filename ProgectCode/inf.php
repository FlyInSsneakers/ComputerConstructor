<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ComputerConstructor</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="main.css">

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

	<section id="welcome">
		<div class="container">
			<div class="row">
				<div class="col-xl-8 col-lg-7 col-md-9 col-sm-12 col-7 ml-auto mr-auto">
					<h3 style="text-align: center;">По всем вопросам можете обращаться на:</h1>
				</div>
				<div class=" w-100"></div>
				

				<div class="col-xl-6 col-lg-4 col-md-5 col-sm-7 col-7 ml-auto mr-auto ">
					<a href="mailto:flyinsneakers@gmail.com" style="text-align: center; font-size: 25px; padding-left: 120px;">flyinsneakers@gmail.com</a>
					<a href="mailto:Skype_HOH@mail.ru" style="text-align: center; font-size: 25px; padding-left: 120px;">Skype_HOH@mail.ru</a>
					<a href="mailto:danila.lukin200000@gmail.com" style="text-align: center; font-size: 25px; padding-left: 120px;">danila.lukin200000@gmail.com</a>

					
				</div>
			</div>
		</div>	
	</section>


</body>
</html>