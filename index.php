<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Мед. центр №1</title>
	<link rel="stylesheet" href="style.css">
<?php $path = $_SERVER['DOCUMENT_ROOT']; ?>
<link rel="stylesheet" type="text/css" href="<?php echo $path; ?>/style.css">
</head>
<body>
	<header>
		<h1><a class="a" href="./index.html"</a>Медицинский центр №1</h1>
		<nav>
			<ul>
				<li><a href="#about">О нас</a></li>
				<li><a href="#services">Услуги</a></li>
				<li><a href="#team">Команда</a></li>
				<li><a href="#contacts">Контакты</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<section id="about" class="about_css">
			<h2>О нас</h2>
			<h3>Медицинский центр №1 - это современный медицинский центр, где каждый пациент может получить качественную помощь и лечение. У нас работают опытные и квалифицированные врачи, а наша клиника оснащена современным оборудованием и профессиональным медицинским инструментом. Мы гарантируем безопасность и комфорт к каждому пациенту.</h3>
		</section>
		<section id="services">
			<h2>Услуги</h2>
			<ul>
				<li><h3>Общая практика</h3></li>
				<li><h3>Стоматология</h3></li>
				<li><h3>Офтальмология</h3></li>
				<li><h3>Неврология</h3></li>
			</ul>
			<h3 class="p_mi">Мы готовы предоставить широкий спектр услуг в области медицины. Здесь вы можете получить квалифицированную консультацию врача, сдать все необходимые анализы и пройти диагностику организма в целом.</h3>
		</section>
		<section id="team">
			<h2>Команда</h2>
			<ul>
				<li>
					<img src="./images/Gamolina.jpg" alt="Врач 1">
					<h3>Гамолина Ольга Владимировна</h3>
					<p>Врач-терапевт</p>
                    <p>Стаж: 13 лет</p>
                    <h4>Услуги врача:</h4>
                    <p>Гинекология - Терапия</p>
                    <p>Время приема: ПН-ПТ: 16:00 - 20:00</p>
                    <p>СБ-ВС: нет приема</p>
				</li>
                <hr>
				<li>
					<img src="./images/Maslova.png" alt="Врач 2">
					<h3>Маслова Яна Юрьевна</h3>
					<p>Детский кардиолог</p>
                    <p>Стаж: 7 лет</p>
                    <h4>Услуги врача:</h4>
                    <p>Детская кардиология - Ревматология - Педиатрия</p>
                    <p>Время приема: ПН-СР: нет приема</p>
                    <p>ЧТ: 17:00 - 19:00</p>
                    <p>СБ-ВС: нет приема</p>
				</li>
                <hr>
				<li>
					<img src="./images/Zimnyakov.png" alt="Врач 3">
					<h3>Зимняков Владислав Вячеславович</h3>
					<p>Врач- хирург, онколог, маммолог</p>
                    <p>Стаж: 2 года</p>
                    <h4>Услуги врача:</h4>
                    <p>Хирургия - Онкология</p>
                    <p>Время приема: ПН-ЧТ: нет приема</p>
                    <p>СБ-ВС: 17:00 - 20:00</p>
				</li>
                <hr>
			</ul>
		</section>
		<section id="contacts" class="contacts_style">
			<h2>Контакты</h2>
			<p>Адрес: г. Брянск, ул. Проспект Станке-Димитрова, 67</p>
			<p>Телефон: 8 (920) 866-10-31</p>
			<p>E-mail: mr.vlad1945@mail.ru</p>
		</section>
	</main>

	<footer class="footer">
        <hr>
		<p>Медицинский центр №1 &copy; 2023</p>
	</footer>
</body>
</html>