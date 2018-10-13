<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="stylesheets/styles_glav.css">
		<link rel="stylesheet" type="text/css" href="stylesheets/styles_reg.css">
		<script src="scripts/app.js"></script>
		<script src="scripts/app2.js"></script>
		<title>Site</title>
	</head>
	<body>
		<header>
			<?php include 'header.html';?>
			<?php include 'reg.html';?>
		</header>
		<main>
			<div class="mainContainer">
				<div class="categoriesCont">
					<div class="categoriesContainer">
						<span class="categories">КАТЕГОРИИ</span>
						<a onclick="changecategoriesBackground(event)" class="category cat1" href="#">IT</a>
						<a onclick="changecategoriesBackground(event)" class="category" href="#">Строительство</a>
						<a onclick="changecategoriesBackground(event)" class="category" href="#">Страхование</a>
						<a onclick="changecategoriesBackground(event)" class="category" href="#">Продажи</a>
						<a onclick="changecategoriesBackground(event)" class="category" href="#">Искусство</a>
						<a onclick="changecategoriesBackground(event)" class="category" href="#">Туризм</a>
						<a onclick="changecategoriesBackground(event)" class="category" href="#">Образование</a>
					</div>
				</div>
				<div class="projectsCont">
					<div class="projects">
						<div class="project">
							<a href="project.php"><img class="projectImg" src="../media/images/57206345.jpg" alt=""></a>
							<span class="projectDescription">Создание сайта</span>
						</div>
						<div class="project">
							<img class="projectImg" src="../media/images/project2.jpg" alt="">
							<span class="projectDescription">AR проект</span>
						</div>
						<div class="project">
							<img class="projectImg" src="../media/images/project3.jpg" alt="">
							<span class="projectDescription">VR проект</span>
						</div>
					</div>
					<div class="projects">
						<div class="project">
							<img class="projectImg" src="../media/images/project4.jpg" alt="">
							<span class="projectDescription">Проект</span>
						</div>
						<div class="project">
							<img class="projectImg" src="../media/images/project5.jpg" alt="">
							<span class="projectDescription">Проект</span>
						</div>
						<div class="project">
							<img class="projectImg" src="../media/images/project6.jpg" alt="">
							<span class="projectDescription">Проект</span>
						</div>
					</div>
					<div class="projects">
						<div class="project">
							<img class="projectImg" src="../media/images/project7.jpg" alt="">
							<span class="projectDescription">Проект</span>
						</div>
						<div class="project">
							<img class="projectImg" src="../media/images/project8.jpg" alt="">
							<span class="projectDescription">Проект</span>
						</div>
						<div class="project">
							<img class="projectImg" src="../media/images/project9.jpg" alt="">
							<span class="projectDescription">Проект</span>
						</div>
					</div>
				</div>
			</div>	
		</main>
	</body>
</html>