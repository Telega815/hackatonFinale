<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="stylesheets/styles_project.css">
		<link rel="stylesheet" type="text/css" href="stylesheets/styles_win.css">
		
		<script src="scripts/app.js"></script>
		<title>Site</title>
	</head>
	<body>
		<header>
			<?php include 'header.html';?>
			<?php include 'win.html';?>
		</header>
		<main>
			<div class="mainCentr">
			<div class="left">
				<div id="photo"></div>
				<div id="nameAvtor">
					<span>Автор проекта</span>
				</div>
				<div id="nameAvtor1">
					<span>Михаил Дряев</span>
				</div>

				<div id="nameAvtor">
					<span>Ключевые слова</span>
				</div>
				<div id="nameAvtor1">
					<span>Python, C#, CSS/HTML, программист</span>
				</div>

			</div>
			<div class="right">

				<div id="projectOpisanie">
					<span>Описание проекта</span>
				</div>
				<div id="projectOpisanie1">
					<span>Менеджер проекта отвечает за разработку новой продукции. Он же готовит описание проекта, в котором берет на себя ответственность за разработку, продажи, маркетинг продукции и т. д. Менеджеры, как правило, достаточно высоко оценивают свои возможности, иногда чрезмерно расширяя границы проекта.</span>
				</div>

				<div id="RequiredStaff">
					<span>Необходимые сотрудники</span>
				</div>
				<div id="RequiredStaff1">
					<table class="userDataData">
						<tr>
							<th class="imgTH"><img src="media/images/tick.png" alt=""></th>
							<th class="THcentre sear">Java программист</th>
							<th class="del">убрать</th>
						</tr>
						<tr>
							<th class="imgTH"><img src="media/images/Xmark.png" alt=""></th>
							<th class="THcentre">Python программист</th>
							<th id="butt" class="searchButton">найти</th>
						</tr>
						<tr>
							<th class="imgTH"><img src="media/images/tick.png" alt=""></th>
							<th class="THcentre sear">Frontend-разработчик</th>
							<th class="del">убрать</th>
						</tr>
						<tr>
							<th class="imgTH"><img src="media/images/Xmark.png" alt=""></th>
							<th class="THcentre">Аналитик</th>
							<th id="buttt" class="searchButton">найти</th>
						</tr>
						<tr>
							<th class="imgTH"><img src="media/images/tick.png" alt=""></th>
							<th class="THcentre">Маркетолог</th>
							<th class="del">убрать</th>
						</tr>
					</table>
				</div>

			</div>
			</div>
		</main>
	</body>
</html>