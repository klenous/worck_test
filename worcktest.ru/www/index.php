<?php
	require_once 'database/database.php';
	$cat = get_inf();
	$len = count($cat) - 1;

?>
<!DOCTYPE html>
<html>



<head>
	<title>Elect</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>


<body>
		<header class="clearfix">
			<div class="container ">
				<nav>
					<div>
					<ul class="menu ">
						<li>
							<a href="#">О компании<a>
						</li>
						<li>
							<a href="#">Доставка<a>
						</li>
						<li>
							<a href="#">Оплата<a>
						</li>
						<li>
							<a href="#">Сервис<a>
						</li>
						<li>
							<a href="#">Возврат<a>
						</li>
						<li>
							<a href="#">Статья<a>
						</li>
						<li>
							<a href="#">Контакты<a>
						</li>
						
					</ul>
					</div>
				</nav>
			<div class="clearfix">
				<div class="heder_inn">
				  	<img src="img/1.jpg">
				    
					<div>
						<ul class="logo">
							<li class="number">8 (800) 707 - 99 - 24</li>
							<li class="time">9.00 - 20.00 ежедневно</li>
						</ul>
						<img src="img/3.jpg" >
					</div>
				</div>

				</div>

				<div>
				<a class="button comp" href="#">Продукция<br> Энерготех</a>

				<a class="button" href="#">Стабилизатор  220в</a>

				<a class="button" href="#">Стабилизатор  380в</a>

				<a class="button" href="#">Генерато 220в</a>

				<a class="button" href="#">Генерато 380в</a>

				<a class="button" href="#">Ибп и батареи</a>

				<a class="button" href="#">прочая техника</a>

				<a class="button" href="#">Услуги</a>
			
				<a class="button sel" href="#">Акции</a>
				</div>

				
			</div>
		</header>

		<section>
		<div class="container">
			<h1>Полезная информация
			</h1>
			<div class="clearfix">
				<a class="smolb sel" href="#">1</a>

				<a class="smolb" href="#">2</a>

				<a class="smolb" href="#">3</a>

				<a class="smolb" href="#">...</a>

				<a class="smolb" href="#">10</a>
			</div>


			<div class="container">
				<?php for ($i = 0; $i < $len ; $i +=2) { ?>
						<div  class="heder_inn">
							<div class="container">
								<div class="foot ">
									<img src='<?= $cat[$i]["pre"] ?>'>
								</div>
								<div class="foot">
									 <p>
									 	<b><?= $cat[$i]["top"] ?></b><br>
									  <?= $cat[$i]["sdes"] ?>;
									  </p>
								</div>
							</div>

							<div class="container">
								<div class="foot ">
									<img src='<?= $cat[$i+1]["pre"] ?>'>
								</div>
								<div class="foot">
									 <p align="left">
									 <b><?= $cat[$i+1]["top"] ?></b><br>
									  <?= $cat[$i+1]["sdes"] ?>;
									 </p>
								</div>
							</div>
						</div>
		

						<?	}	?>
						<?php if((len+1)%2 == 1){ ?>

							<div class="container logo">
								<div class="foot ">
									<img src='<?= $cat[$i]["pre"] ?>'>
								</div>
								<div class="foot">
									 <p>
									 	<b><?= $cat[$i]["top"] ?></b><br>
									  <?= $cat[$i]["sdes"] ?>;
									  </p>
								</div>
							</div>

						<? } ?>


					
			


			</div>

			<div class="clearfix otst">
				<a class="smolb sel" href="#">1</a>

				<a class="smolb" href="#">2</a>

				<a class="smolb" href="#">3</a>

				<a class="smolb" href="#">...</a>

				<a class="smolb" href="#">10</a>
			</div>

			</section>


		<footer>
			<div class="container  heder_inn">
				<div class="clearfix container" >
					<div>
					<ul class="foot ">
						<li>
							121471 г.Москва ул.Рябиновая 55 стр.28
						</li>
						<li>
							prestizh06@mail.ru
						</li>
						<li class="number">
							8 (800) 707-99-24
						</li>
						<li>
							<a href="#">Контакты<a>
						</li>
					</ul>
				</div>
				<div >
					<ul class=" graf">
						<li>
							Режим работы:
						</li>
						<li>
							Пн-чт с 8.00 до 19.00
						</li>
						<li>
							Пт с 8.00 до 17.00
						</li>
						<li>
							Сб с 10.00 до 15.00
						</li>
						<li>
							Вс (по предварительной договоренности)
						</li>
					</ul>
				</div>
				<ul class="foot">
					<li>
						<div>
							<ul class="foot">
								<li>
									<a href="#">О компании</a>
								</li>
								<li>
									<a href="#">Акции</a>
								</li>
								<li>
									<a href="#">Доставка</a>
								</li>
							</ul>
						</div>
						<div>
							<ul class="foot">
								<li>
									<a href="#">Оплата</a>
								</li>
								<li>
									<a href="#">Сервис</a>
								</li>
								<li>
									<a href="#">Возврат</a>
								</li>
							</ul>
						</div>
					</li>
					<li>
						<a href="#"> Политика обработки персональных данных</a>
					</li>
				</ul>
			</div>
			<div>
				<ul class="foot">
					<li> 
						<img src="img/2.jpg">
					</li>
					<li>
						разработка<br> и продвижение сайтов
					</li>

				</ul>
			</div>
			</div>
	
			
		</footer>
</body>
</html>