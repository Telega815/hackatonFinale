<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="stylesheets/styles.css">
		<link rel="stylesheet" type="text/css" href="stylesheets/styles_ver.css">
		
		<script src="scripts/app1.js"></script>
		<title>Site</title>
	</head>
	<body>
		<header>
			<?php include 'header.html';?>
			<?php include 'ver.html';?>
		</header>
		<main>
			<div class="mainContainer">
				<div class="basicInfo">
					<div class="profilePhotoCont">
						<img id="profilePhoto" src="media/images/emptyuser.jpg" alt="">
						<button onclick="changeAboutBackground()" id="about">обо мне</button>
						<button onclick="changePortfolioBackground()" id="portfolio">портфолио</button>
						<button id="but1" class="verification">Верификация</button>
					</div>
					<div class="works">
						<span class="workTitle">Работы в проектах</span>
						<a class="work" href="#">Проект1</a>
						<a class="work" href="#">Проект2</a>
						<a class="work" href="#">Проект3</a>
						<a class="work" href="#">Проект4</a>
						<a class="work" href="#">Проект5</a>
						<a class="work" href="#">Проект6</a>
						<a class="work" href="#">Проект7</a>
					</div>
				</div>
				<div class="additionalInfo">
					<div class="profileTextCont">
						<span class="profileText">Обо мне</span>
					</div>
					<div class="userDataCont">
						<table class="userData">
							<tr>
								<th>Имя</th>
								<th class="userDataValues">Иванов Иван</th>
							</tr>
							<tr>
								<th>Дата рождения</th>
								<th class="userDataValues">10 сентября 1992</th>
							</tr>
							<tr>
								<th>Адрес</th>
								<th class="userDataValues">г. Москва, ул. Митькина 14</th>
							</tr>
						</table>
						<table class="userData">
							<tr>
								<th>Email</th>
								<th class="userDataValues">misha123@gmail.com</th>
							</tr>
							<tr>
								<th>Телефон</th>
								<th class="userDataValues">+79191234567</th>
							</tr>
							<tr>
								<th>Skype</th>
								<th class="userDataValues">misha123</th>
							</tr>
						</table>
					</div>
					<div class="profileTextCont">
						<span class="profileText">Профессиональные навыки</span>
					</div>
					<div class="professionalSkills">
						<div class="skill1">
							<div class="skillNameCont">
								<span class="skill1Name">IT</span>
							</div>
							<div class="skill">
								<span class="skillName">Верстка сайтов</span>
								<div class="progressBarCont">
									<progress class="progressBar" value="2.4" max="5"></progress>
									<span class="skillValues">2.4</span>
								</div>
							</div>
							<div class="skill">
								<span class="skillName">Python программист</span>
								<div class="progressBarCont">
									<progress class="progressBar" value="4" max="5"></progress>
									<span class="skillValues">4.3</span>
								</div>
							</div>
							<div class="skill">
								<span class="skillName">Разработка на C++</span>
								<div class="progressBarCont">
									<progress class="progressBar" value="4.6" max="5"></progress>
									<span class="skillValues">4.6</span>
								</div>
							</div>
							<div class="skill">
								<span class="skillName">Разработка на 1С</span>
								<div class="progressBarCont">
									<progress class="progressBar" value="5" max="5"></progress>
									<span class="skillValues">5</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</main>
	</body>
</html>