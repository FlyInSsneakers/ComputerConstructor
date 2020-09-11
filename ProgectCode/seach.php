<?php

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
	<script>
		$('#next').click(function() {
			alert("ушло");
		});
	</script>
</head>
<body>

	<header>	
		<div class="container-lg container-md-fluid ">
			<div class="row align-items-center ">
				<div class="col-xl-auto order-lg-0 col-lg offset-lg-0  ml-lg-0 col-md-3 order-sm-0 ml-md-auto col-sm-6 col-12">
					<a href="index.php">Главная</a>				
				</div>			
				<div class="col-xl order-lg-1 col-lg col-md-3  order-sm-4 ml-md-auto mr-xs-auto col-sm-6 col">
					<a href="">Информация</a> 
				</div>
				<div class="col-xl order-lg-2 col-lg col-md-3 order-sm-7 ml-md-auto col-sm-6 col">
					<a href="">Руководства</a>				
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
				<div class="col-xl order-lg-6 col-lg mr-lg-0 col-md-4 order-sm-2 mr-md-auto text_right col-sm-6 col">
					<a href="">Авторизация</a>	
				</div>
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
														<input type="radio" name="type_component" id="mat" value="mat">
														Материнская плата
													</label> 
													<br>
													<label>
														<input type="radio" name="type_component" id="cpu" value="cpu">
														Процессор
													</label>
													<br>
													<label>

												
														
														<input type="radio" name="type_component" id="gc" value="gc" 
														<?php session_start();
														if(isset($_SESSION['component']) and $_SESSION['component']=='video'){
														 ?>  
														 checked <?php } ?> >
														Видеокарта
													</label>
													<br>
													<label>
														<input type="radio" name="type_component" id="ram" value="ram">
														Модули памяти
													</label>
													<br>
													<label>
														<input class="radio_option" type="radio" name="type_component" id="hdd" value="hdd">
														Жесткий диск
													</label>
													<br>
													<label>
														<input class="radio_option" type="radio" name="type_component" id="ssd" value="ssd">
														Твердотельный накопитель
													</label>
												</div>	

											</div>

											<div  class="filter_box for_mat">
												<h5>Форм-фактор</h5>
												<div class="filter_container">
													<label>
														<input type="checkbox" >
														E-ATX
													</label>
													<br>
													<label>
														<input type="checkbox">
														Standard-ATX
													</label>
													<br>
													<label>
														<input type="checkbox">
														micro-ATX
													</label>
													<br>
													<label>
														<input type="checkbox">
														mini-ITX
													</label>
													<br>
													<label>
														<input type="checkbox">
														mini-STX
													</label>
													<br>
												</div>
											</div>

											<div  class="filter_box for_mat for_cpu">
												<h5>Производитель</h5>
												<div class="filter_container">
													<label>
														<input type="checkbox" name="type_cpu" id="intel">
														Intel
													</label>
													<br>
													<label>
														<input type="checkbox" name="type_cpu" id="amd">
														AMD
													</label>
												</div>
											</div>

											<div  class="filter_box for_mat for_cpu">
												<h5>Сокет</h5>
												<div class="filter_container">											
													<div class="socked_box for_type_cpu_intel">
														<label>
															<input type="checkbox">
															AM2
														</label>
														<br>
														<label>
															<input type="checkbox">
															AM2+
														</label>
														<br>
														<label>
															<input type="checkbox">
															AM3
														</label>
														<br>
														<label>
															<input type="checkbox">
															AM3+
														</label>
														<br>
														<label>
															<input type="checkbox">
															FM1
														</label>
														<br>
														<label>
															<input type="checkbox">
															FM2
														</label>
														<br>
														<label>
															<input type="checkbox">
															FM2+
														</label>
														<br>
														<label>
															<input type="checkbox">
															AM1
														</label>
														<br>
														<label>
															<input type="checkbox">
															AM4
														</label>
														<br>
													</div>						
													<div class="socked_box for_type_cpu_amd">
														<label>
															<input type="checkbox">
															LGA775
														</label>
														<br>
														<label>
															<input type="checkbox">
															LGA1156
														</label>
														<br>
														<label>
															<input type="checkbox">
															LGA1366
														</label>
														<br>
														<label>
															<input type="checkbox">
															LGA1155
														</label>
														<br>
														<label>
															<input type="checkbox">
															LGA1150
														</label>
														<br>
														<label>
															<input type="checkbox">
															LGA2011-3
														</label>
														<br>
														<label>
															<input type="checkbox">
															FM2+
														</label>
														<br>
														<label>
															<input type="checkbox">
															AM1
														</label>
														<br>
														<label>
															<input type="checkbox">
															AM4
														</label>
														<br>
													</div>
												</div>
											</div>

											<div  class="filter_box for_mat">
												<h5>Оперативная память</h5>
												<div class="filter_container">
													<h6>Количество слотов</h6>
													<div class="row">
														<label class="col-6"> 
															от
															<input class="cores_in" type="number" placeholder="1" min="1" name="">
														</label>

														<label class="col-6">
															до
															<input class="cores_in" type="number" placeholder="24" max="24" name="" >
														</label>
													</div>

													<h6>Тип памяти</h6>
													<label>
														<input type="checkbox">
														DDR
													</label>
													<br>
													<label>
														<input type="checkbox">
														DDR2
													</label>
													<br>
													<label>
														<input type="checkbox">
														DDR3
													</label>
													<br>
													<label>
														<input type="checkbox">
														DDR3L
													</label>
													<br>
													<label>
														<input type="checkbox">
														DDR4
													</label>
													<br>
												</div>
											</div>

											<div class="filter_box for_mat">
												<h5>Максимальная частота памяти, МГц</h5>
												<div class="filter_container">
													<div class="row">
														<label class="col-6"> 
															от
															<input class="cores_in" type="number" placeholder="100" min="100" name="">
														</label>

														<label class="col-6">
															до
															<input class="cores_in" type="number" placeholder="4800" max="4800" name="" >
														</label>
													</div>
												</div>
											</div>

											<div class="filter_box for_cpu">
												<h5>Количество ядер</h5>
												<div class="filter_container">
													<div class="row">
														<label class="col-6"> 
															от
															<input class="cores_in" type="number" placeholder="1" min="1" name="">
														</label>

														<label class="col-6">
															до
															<input class="cores_in" type="number" placeholder="32" max="32" name="" >
														</label>
													</div>
												</div>
											</div>

											<div class="filter_box for_cpu">
												<h5>Частота процессора</h5>
												<div class="filter_container">
													<div class="row">
														<label class="col-6"> 
															от
															<input class="cores_in" type="number" placeholder="1300" min="1300" name="">
														</label>

														<label class="col-6">
															до
															<input class="cores_in" type="number" placeholder="4500" max="4500" name="" >
														</label>
													</div>
												</div>
											</div>

											<div class="filter_box for_gc">
												<h5>Разработчик видеокарты</h5>
												<div class="filter_container">
													<label>
														<input type="checkbox"  name="producer_gc[]" value="NVIDIA">
														NVIDIA
													</label>
													<br>			
													<label>
														<input type="checkbox"  name="producer_gc[]" value="ASUS">
														ASUS
													</label>	
													<br>
													<label>
														<input type="checkbox"  name="producer_gc[]" value="AMD">
														AMD
													</label>
													<br>
													<label>
														<input type="checkbox"  name="producer_gc[]" value="MSI">
														MSI
													</label>
													<br>
													<label>
														<input type="checkbox"  name="producer_gc[]" value="Palit">
														Palit
													</label>
													<br>
													<label>
														<input type="checkbox"  name="producer_gc[]" value="Matrox">
														Matrox
													</label>			
												</div>						
											</div>

											<div class="filter_box for_gc">
												<h5>Объём видеопамяти</h5>
												<div class="filter_container">
													<label>
														<input type="checkbox">
														8 ГБ
													</label>
													<br>
													<label>
														<input type="checkbox">
														6 ГБ
													</label>
													<br>
													<label>
														<input type="checkbox">
														4 ГБ
													</label>
													<br>
													<label>
														<input type="checkbox">
														2 ГБ
													</label>
													<br>
													<label>
														<input type="checkbox">
														11 ГБ
													</label>
													<br>
												</div>						
											</div>

											<div class="filter_box for_gc">
												<h5>Частота видеопроцессора</h5>
												<div class="filter_container">
													<div class="row">
														<label class="col-6"> 
															от
															<input class="cores_in" type="number" placeholder="4012" min="4012" name="">
														</label>

														<label class="col-6">
															до
															<input class="cores_in" type="number" placeholder="4500" max="4500" name="" >
														</label>
													</div>
												</div>
											</div>

											<div class="filter_box for_gc">
												<h5>Выходов HDMI</h5>
												<div class="filter_container">
													<label>
														<input type="checkbox" >
														1
													</label>
													<br>
													<label>
														<input type="checkbox">
														2
													</label>
													<br>
													<label>
														<input type="checkbox">
														3
													</label>				
												</div>						
											</div>

											<div  class="filter_box for_ram">
												<h5>Форм-фактор</h5>
												<div class="filter_container">
													<label>
														<input type="checkbox" >
														DIMM
													</label>
													<br>
													<label>
														<input type="checkbox">
														FB-DIMM
													</label>
													<br>
													<label>
														<input type="checkbox">
														LRDIMM
													</label>
													<br>
													<label>
														<input type="checkbox">
														MicroDIMM
													</label>
													<br>
													<label>
														<input type="checkbox">
														SODIMM
													</label>
													<br>
												</div>
											</div>

											<div  class="filter_box for_ram">
												<h5>Тип</h5>
												<div class="filter_container">	
													<label>
														<input type="checkbox">
														DDR
													</label>
													<br>
													<label>
														<input type="checkbox">
														DDR2
													</label>
													<br>
													<label>
														<input type="checkbox">
														DDR3
													</label>
													<br>
													<label>
														<input type="checkbox">
														DDR3L
													</label>
													<br>
													<label>
														<input type="checkbox">
														DDR4
													</label>
													<br>
												</div>
											</div>

											<div class="filter_box for_ram">
												<h5>Объём одного модуля</h5>
												<div class="filter_container">
													<label>
														<input type="checkbox" >
														1 ГБ
													</label>
													<br>
													<label>
														<input type="checkbox">
														2 ГБ
													</label>
													<br>
													<label>
														<input type="checkbox">
														4 ГБ
													</label>
													<br>
													<label>
														<input type="checkbox">
														8 ГБ
													</label>
													<br>
													<label>
														<input type="checkbox">
														16 ГБ
													</label>
													<br>
													<label>
														<input type="checkbox">
														32 ГБ
													</label>
													<br>
												</div>						
											</div>

											<div  class="filter_box for_hdd">
												<h5>Форм-фактор</h5>
												<div class="filter_container">
													<label>
														<input type="checkbox" >
														1.8"
													</label>
													<br>
													<label>
														<input type="checkbox">
														2.5"
													</label>
													<br>
													<label>
														<input type="checkbox">
														3.5"
													</label>
													<br>
												</div>
											</div>

											<div  class="filter_box for_hdd">
												<h5>Емкость</h5>
												<div class="filter_container">
													<label>
														<input type="checkbox" >
														Менее 500 ГБ
													</label>
													<br>
													<label>
														<input type="checkbox">
														500-999 ГБ
													</label>
													<br>
													<label>
														<input type="checkbox">
														1 ТБ
													</label>
													<br>
													<label>
														<input type="checkbox">
														2 ТБ
													</label>
													<br>
													<label>
														<input type="checkbox">
														4 ТБ
													</label>
													<br>
												</div>
											</div>

											<div  class="filter_box for_hdd">
												<h5>Интерфейс SATA</h5>
												<div class="filter_container">
													<label>
														<input type="checkbox" >
														SATA 1.5 Gb/s
													</label>
													<br>
													<label>
														<input type="checkbox">
														SATA 3 Gb/s
													</label>
													<br>
													<label>
														<input type="checkbox">
														SATA 6 Gb/s
													</label>
													<br>
												</div>
											</div>

											<div class="filter_box for_ssd">
												<h5>Емкость, ГБ</h5>
												<div class="filter_container">
													<div class="row">
														<label class="col-6"> 
															от
															<input class="cores_in" type="number" placeholder="4" min="4" name="">
														</label>

														<label class="col-6">
															до
															<input class="cores_in" type="number" placeholder="15360" max="15360" name="" >
														</label>
													</div>
												</div>
											</div>	

											<div  class="filter_box for_ssd">
												<h5>Интерфейс SATA</h5>
												<div class="filter_container">		
													<label>
														<input type="checkbox">
														SATA 3 Gb/s
													</label>
													<br>
													<label>
														<input type="checkbox">
														SATA 6 Gb/s
													</label>
													<br>
												</div>
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
															<input type="text" id="price1"
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
						<div class="seach">

							<div class="row">
								<div class="col-lg-11 ml-auto mr-auto">
									<div class="seach_container">
										<input class="main_seach" type="text">						
									</div>
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