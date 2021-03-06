<?php

namespace app;

require_once('admin/DBUtils.php');

$teachers = DBUtils::getAllTeachers();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Кинолагерь</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1">
	<link rel="icon" href="img/logo.png">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/libs.min.css">
	<link rel="stylesheet" href="css/font.css">
</head>
<body>

	<div id="p_loader">
		<div class="loader"></div>
	</div>


	<!--<button class="btn btn_accept" id="mainButton">Принять участие</button>-->
	<header id="header">
		<div class="header_content">
			<button class="btn header_btn_accept btn_accept">ПРИНЯТЬ УЧАСТИЕ</button>
			<nav>
				<ul>
					<li>
						<a href="#main">Главная</a>
					</li>
					<li>
						<a href="#aboutCamp">О лагере</a>
					</li>
					<li>
						<a href="#place">Размещение</a>
					</li>
					<li>
						<a href="#programm">Программа</a>
					</li>
					<li>
						<a href="#contacts">Контакты</a>
					</li>
					<li>
						<a href="faq.html">FAQ</a>
					</li>
				</ul>
			</nav>
			<div id="burger">
				Меню
			</div>
			<a class="phone" href="tel:88007700916">8-800-77-00-916</a>
			<button class="btn callMe">ПЕРЕЗВОНИТЕ МНЕ</button>
		</div>
	</header>
	<div class="firstBlock" id="main">
		<a href="#"><img class="logo" src="img/logo.png" alt="КиноКэмп"></a>
		<h1>
			СЕМЕЙНЫЙ ДЕТСКО-МОЛОДЁЖНЫЙ КИНОЛАГЕРЬ <br>
			НА БЕРЕГУ ЧЁРНОГО МОРЯ <br>
			С 16-го ПО 29-е ИЮЛЯ 2018г. <br>
			14 ДНЕЙ, 7-17 лет.
		</h1>
		<div class="firstBlock_buttons">
			<button id="actor">
				ДЛЯ ТЕХ, КТО ХОЧЕТ <br>
				СНИМАТЬСЯ В КИНО
			</button>
			<button id="producer">
				ДЛЯ ТЕХ, КТО ХОЧЕТ <br>
				СНИМАТЬ КИНО
			</button>
		</div>
	</div>
	<div class="secondBlock" id="aboutCamp">
		<div class="secondBlock__part">
			<img src="img/second_block_photo1.png" alt="Фото">
			<div class="textPart">
				<p>
					<img src="img/second_block_icon1.png" alt="Камера">
					<span class="blueText">
						КИНОКЭМП <br>
						МЫ САМИ СНИМАЕМ КИНО! <br>
					</span>
					Летний кинолагерь в Сочи «КИНОКЭМП» - это образовательно- развлекательная площадка предпрофессиональной подготовки для съемок в игровом и документальном кино
				</p>

				<p>
					<img src="img/second_block_icon2.png" alt="Костёр">
					<span class="blueText">
						НАША ГЛАВНАЯ ЗАДАЧА -
					</span>
					сделать ваш отдых в «КИНОКЭМПе» полезным, интересным и комфортным! И у нас есть все, что для этого нужно - всевозможные мастерские на все вкусы и пожелания, разные активности, спорт, походы, интеллектуальные и творческие игры, разные киномероприятия.
				</p>
			</div>
		</div>
		<div class="secondBlock__part">
			<img src="img/second_block_photo2.png" alt="Фото">
			<div class="textPart">
				<p>
					<img src="img/second_block_icon3.png" alt="Дети">
					<span class="blueText">
						МЫ ИНДИВИДУАЛЬНО ПОДХОДИМ К КАЖДОМУ РЕБЕНКУ
					</span>
					и строим его программу исходя из его интересов  и пожеланий.
				</p>
				<br>

				<p>
					<img src="img/second_block_icon4.png" alt="Звезды">
					Участников программы ожидают<span class="blueText"> ЗНАКОМСТВА СО ЗВЁЗДАМИ ОТЕЧЕСТВЕННОГО КИНЕМАТОГРАФА</span> и работа с ними на одной киноплощадке, мастер-классы, съёмка собственного фильма, создание личного портфолио, игры на природе, купание в море, киноэкскурсии, творческие занятия, а также знакомства с новыми друзья со всех уголков Мира.
				</p>
			</div>
		</div>
	</div>
	<div class="thirdBlock">
		<img src="img/third_block_photo.png" alt="Кинокэмп">
		<div class="topText">
			<h2>Сделай свой первый шаг в кино - прими участие в КИНОКЭМПе!</h2>
			<h3>ЭКСКЛЮЗИВНОЕ ПРЕИМУЩЕСТВО НАШЕГО КИНОЛАГЕРЯ</h3>
			<p>Обучение строится на основе глубоких знаний о психосоматике человека, то есть <span>о знаниях работы тела и душевных эмоций:</span> </p>
		</div>
		<div class="blockContent">
			<div class="blockGroup">
				<div class="blockItem blockItem_left">
					<p>
						Личный подход, позволяющий выявить амплуа актера и профиль работы сценариста и режиссера, раскрыть индивидуальность студента, поработать над минусами и развить его плюсы;
					</p>
				</div>
				<div class="blockItem blockItem_right">
					<p>
						Совмещение классических и современных подходов в обучении актерскому мастерству (от системы Станиславского и техник М.Чехова до современных инструментов, используемых в Голливуде);
					</p>
				</div>
			</div>

			<div class="blockGroup">
				<div class="blockItem blockItem_left">
					<p>
						Концентрированная подача теории и упор на практику, где каждый участник сможет поработать в кино: сыграть роли, снять фильм, придумать сценарий;
					</p>
				</div>
				<div class="blockItem blockItem_right">
					<p>
						КиноКэмп дает возможность всем участникам практиковаться и обучаться производству кино в одном из красивейших мест страны, купаться в море и загорать под жарким южным солнцем, а вечером, после занятий и съёмок, отдыхать в прохладе свежего горного воздуха!;
					</p>
				</div>
			</div>

			<div class="blockGroup">
				<div class="blockItem blockItem_left">
					<p>
						Постановка реальных практических навыков работы в кинопроизводстве на основе практических упражнений ведущих отечественных и зарубежных киношкол;
					</p>
				</div>
				<div class="blockItem blockItem_right">
					<span>
						Совместить <br> обучение и отдых <br> теперь реально!
					</span>
				</div>
			</div>
		</div>
	</div>

	<div class="fourthBlock">
		<div class="fourthBlock__content">
			<p class="blueTitle">
				7 ГЛАВНЫХ ПРИНЦИПОВ <br> ЖИЗНИ КОНОЛАГЕРЯ:
			</p>
			<div class="leftPart">
				<p class="redTitle">
					Свобода выбора
				</p>
				<p>
					– у нас кинолагере НЕТ обязаловки быть там, где не хочется быть, участвовать в чём-то только потому, что участвуют все. Программа каждого – индивидуальна...
				</p>

				<p class="redTitle">
					Самостоятельность
				</p>
				<p>
					– мы никого не тащим за уши: на зарядку, мастер-классы, экскурсии, в
					столовую, на море...
				</p>

				<p class="redTitle">
					Творчество
				</p>
				<p>
					– это способность смотреть НА ВСЁ с разных сторон и искать разные подходы и
					решения. Именно по ...
				</p>
			</div>

			<div  class="infographic">
				<img src="img/infoGraphic.png" alt="Инфографик">
			</div>

			<div class="rightPart">
				<p class="redTitle">
					Уважение
				</p>
				<p>
					– является ПЕРВОСТЕПЕННЫМ принципом жизни в нашем лагере. И это означает: соблюдать и ни в коем случае...
				</p>

				<p class="redTitle">
					Безопастность
				</p>
				<p>
					- внутренняя безопасность участников (физическая и психологическая) обеспечивается всеми работниками проекта...
				</p>

				<p class="redTitle">
					Ответственность
				</p>
				<p>
					– у нас нет двойных стандартов и за каждое сказанное слово мы все и
					организаторы, и сотрудники, и участники несём ОТВЕТ.
				</p>

				<p class="redTitle">
					Развитие
				</p>
				<p>
					– статики не существует, возможен только прогресс или регресс, но нас интересует
					только движение вверх и только вперед…
				</p>
			</div>
		</div>
	</div>

	<div class="fifthBlock">
		<p class="redTitle">ЗВЁЗДНЫЙ ДЕСАНТ</p>
		<div class="fifthBlock__content">
			<?php
				foreach ($teachers as $teacher)
				{
					echo '<div class="fifthBlock__item speaker">';
					echo '<img src="' . $teacher['image'] . '" alt="' . $teacher['name'] . '">';
					echo '<p class="item__name  blueTitle">' . $teacher['name'] . '</p>';
					echo '<span class="item__description">' . $teacher['role'] . '</span>';
					echo '<p class="item__fullDescription">' . $teacher['text'] . '</p>';
					echo '</div>';
				}
			?>

		</div>
		<button class="moreBtn">Показать больше</button>
		<img class="bgStripe" src="img/sixBlockBG.png" alt="Кинолента">
	</div>

	<div class="sixBlock">
		<a href="#"><img class="logo" src="img/logo.png" alt="КоноКемп"></a>
		<div class="sixBlock__content">
			<div class="sixBlock__item">
				<p class="redTitle">Киноактер</p>
				<div class="item__priceList">
					<p>Что вы получаете</p>
					<ol>
						<li>Актёрское мастерство</li>
						<li>Сценическая речь</li>
						<li>Сценическое движение и пластика</li>
						<li>Работа на камеру: работа в кадре</li>
					</ol>
					<p class="priceTitle">ПОЛНЫЙ ПАКЕТ</p>
					<p class="price"><span>44900/</span>39900</p>
					<p class="priceTitle">ДНЕВНОЙ ПАКЕТ</p>
					<p class="price"><span>34900/</span>39900</p>
					<button class="btn_accept">ПРИНЯТЬ УЧАСТИЕ</button>
				</div>
			</div>
			<div class="sixBlock__item">
				<p class="redTitle">Фильммейкер</p>
				<div class="item__priceList">
					<p>Что вы получаете</p>
					<ol>
						<li>Подготовительный период
							(предпродакшн)
						</li>
						<li>Съемочный период (продакшн)</li>
						<li>Монтажно-тонировочный период
							(постпродакшн)
						</li>
					</ol>

					<p class="priceTitle">ПОЛНЫЙ ПАКЕТ</p>
					<p class="price"><span>44900/</span>39900</p>
					<p class="priceTitle">ДНЕВНОЙ ПАКЕТ</p>
					<p class="price"><span>34900/</span>39900</p>
					<button class="btn_accept">ПРИНЯТЬ УЧАСТИЕ</button>
				</div>
			</div>
			<div class="sixBlock__item">
				<p class="redTitle">Сопровождающие</p>
				<div class="item__priceList">
					<div class="imgWrapper">
						<img src="img/logo.png" alt="Кинолагерь" class="logo">
					</div>
					<p class="priceTitle">ПОЛНЫЙ ПАКЕТ</p>
					<p class="price"><span>44900/</span>39900</p>
					<p class="priceTitle">ДНЕВНОЙ ПАКЕТ</p>
					<p class="price"><span>34900/</span>39900</p>
					<button class="btn_accept">ПРИНЯТЬ УЧАСТИЕ</button>
				</div>
			</div>
		</div>
		<button class="pay">Оплатить онлайн</button>
	</div>

	<div class="seventhBlock">
		<p class="blueTitle">ВЫИГРАЙ ПУТЕВКУ</p>
		<a href="#"><img src="img/seventh_blockIMG.png" alt=""></a>
	</div>

	<div class="eighthBlock">
		<div class="eighthBlock__content">

			<div class="leftPart">
				<p class="blueTitle">В КИНОКЭМПЕ МОГУТ <br> УЧАСТВОВАТЬ ВСЕ ЖЕЛАЮЩИЕ</p>
				<p><img src="img/check_icon.png" alt="Галочка"> В сопровождении родителей;</p>
				<p><img src="img/check_icon.png" alt="Галочка"> Без сопровождения родителей.</p>
			</div>
			<div class="rightPart">
				<img src="img/eighth_block_photo1.png" alt="Фото">
			</div>
			<div class="leftPart">
				<p class="blue">Возраст участников кинолагеря:</p>
				<div class="ageBlock">

					<p class="leftAge"><strong>Семейные отряды</strong></p>
					<p class="rightAge"> - дети с родителями от 3-х лет – получают Сертификат «КИНОМАН»</p>

					<p class="leftAge"><strong>Детские отряды</strong></p>
					<p class="rightAge">– от 7 до 12 лет – получают Сертификат «КИНОВЕД»</p>

					<p class="leftAge"><strong>Подростковые отряды</strong></p>
					<p class="rightAge">- от 12 до 17 лет – проходят курс по специальной программе и получают в итоге Сертификат «КИНОНАСТАВНИК», который могут  предъявить в своём городе  директору своей школы и организовать по нашей программе свою Киностудию. </p>
				</div>

				<p class="blue">Длительность одной киносмены:</p>
				<p>
					<strong>14 дней</strong> без дороги при самостоятельном заезде; <br>
					<strong>17 дней</strong> с дорогой из Москвы при организованном заезде.
				</p>

			</div>
			<div class="rightPart secondImg">
				<img src="img/eighth_block_photo2.png" alt="Фото">
			</div>

		</div>
	</div>

	<div class="ninethBlock" id="place">
		<p class="redTitle">Место проведения</p>
		<div class="ninethBlock__content">
			<div class="photoCont">
				<a class="popUp" href="img/nine_block_photo1.png"><img src="img/nine_block_photo1.png" alt="Здание"></a>
				<a class="popUp" href="img/nine_block_photo2.png"><img src="img/nine_block_photo2.png" alt="Здание"></a>
				<a class="popUp" href="img/nine_block_photo3.png"><img src="img/nine_block_photo3.png" alt="Апартаменты"></a>
			</div>

			<div class="textBlock">
				<p>
					Проживание в отеле «Бархатные сезоны» возле Олимпийского парка. <br><br>
					<strong>Об отеле:</strong> <br> <br>
					Город-отель «Бархатные сезоны» - это настоящий город с собственной, широко развитой инфраструктурой, где гостям открывается полный спектр услуг, необходимый для комфортного отдыха. <br> <br>

					Общая территория города-отеля «Бархатные сезоны» составляет 300 га. Гостиничный комплекс располагается в 3,5 км от Олимпийского парка, в 2,5 км от тематического парка приключений «Сочи Парк», в 7 км от торгово-развлекательного центра «Мандарин», в 12 км от дельфинария, океанариума, аквапарка «Амфибиус». <br> <br>

					В городе-отеле «Бархатные сезоны» представлены номера различной стоимости и уровня комфорта. Это самый большой апартаментный комплекс, в котором могут разместиться более 16 000 человек. <br> <br>

					В городе-отеле «Бархатные сезоны» есть два собственных оборудованных галечных пляжа.«Екатерининский» пляж - самый южный на Черноморском побережье. Ширина пляжей около 40 метров. Протяженность набережной - 6,5 км. На набережной работает прокат пляжного инвентаря, роликов и велосипедов.

				</p>
			</div>


			<div class="photoCont">
				<a class="popUp" href="img/nine_block_photo4.png"><img src="img/nine_block_photo4.png" alt="Апартаменты"></a>
				<a class="popUp" href="img/nine_block_photo5.png"><img src="img/nine_block_photo5.png" alt="Ванная"></a>
				<a class="popUp" href="img/nine_block_photo6.png"><img src="img/nine_block_photo6.png" alt="Ночь"></a>
			</div>
		</div>
	</div>

	<div class="tenthBlock">
		<p class="blueTitle">РАСПИСАНИЕ</p>
		<div class="tenthBlock__content">
			<div class="photoCont">
				<img src="img/ten_block_photo1.png" alt="Лагерь">
				<img src="img/ten_block_photo2.png" alt="МЧС">
				<img src="img/ten_block_photo3.png" alt="Лошадь">
			</div>

			<div class="sliderCont">
				<ul class="navigation">
					<li id="day">ПРИМЕРНОЕ РАСПИСАНИЕ ДНЯ</li>
				</ul>
				<div class="slideElem fade">
					<p class="time">11.00</p>
					<p class="description"> - прибытие в д. Ветка </p>

					<p class="time">11.00 - 11.30</p>
					<p class="description">
						– встреча и знакомство с педагогами  дополнительного образования, 	        		размещение.
					</p>

					<p class="time">11.30 - 12.00</p>
					<p class="description">- завтрак </p>

					<p class="time">12.00 - 13.30</p>
					<p class="description">- обзорная экскурсия  </p>

					<p class="time">13.30 - 14.00</p>
					<p class="description">- обед </p>

					<p class="time">14.00 - 16.00</p>
					<p class="description">- время отдыха </p>

					<p class="time">16.00 - 16.30</p>
					<p class="description">- полдник  </p>

					<p class="time">16.30 - 18.00</p>
					<p class="description">
						- Огонек знакомств «Вместе весело живется».
					</p>

					<p class="time">18.00 - 18.30</p>
					<p class="description">
						- ужин
					</p>

					<p class="time">18.30 - 21.30</p>
					<p class="description">
						- конкурсно-игровая программа «В мире творчества», дискотека «И снова здравствуйте…»
					</p>

					<p class="time">21.30 - 22.00</p>
					<p class="description">
						- выполнение гигиенических процедур
					</p>

					<p class="time">22.00</p>
					<p class="description">
						- отбой
					</p>

				</div>

			</div>
		</div>
	</div>

	<div class="eleventhBlock" id="programm">
		<p class="textBlock">
			1. <span class="blue"> Особенностями</span> нашей программы является, что мы заменили некоторые обязательные в обычных лагерях моменты на более оптимизированные, удобные и креативные.
			<br><br>
			2. У нас в КиноКэмпе с участниками работают <span class="blue"> не просто «вожатые», а «киновожатые»</span>, которые прошли подготовку по специальной программе в соответствии с принципами нашего лагеря по следующим дисциплинам: кинопроизводство, педагогика, психология, а так же оказание первой медицинской помощи.
			<br><br>
			3. В самом начале все, кто приедут в лагерь, и дети и родители, примут участие в большой командообразующей игре в ходе, которой все познакомятся и подружатся, но в итоге произойдет объединение в команды-киностудии по 10-15 человек. В каждую киностудию методом игры, будет выбран один <span class="blue">режиссёр-педагог</span> и два киновожатых.
		</p>

		<p class="textBlock">
			<span class="redTitle">
				ДЛЯ РОДИТЕЛЕЙ <br>ВАЖНО!
			</span>
			4. Мы заменили утреннюю <span class="blue">ЗАРЯДКУ</span> на занятие по <span class="blue">АКТЁРСКОМУ МАСТЕРСТВУ:</span> ритмика, сцен.движение, сцен.речь, йога и др., которые будут вести каждый день педагоги из «Звёздного десанта», а кто именно, возможно будет узнать только тогда, когда придёте на зарядку. А подъём будет не в 8-00 утра, как во всех нормальных лагерях, а 9-00 и отбой соответственно тоже на час позже в 23-00.
			<br><br>
			5. Мы считаем, что <span class="blue">еда - это одна из основных критериев для отличного настроения участников</span> и поэтому решили, что «шведский стол» это самый лучший вариант. Полдник и сонник мы выдаем в качестве сухого пайка и поэтому не нужно будет ходить в столовую специально.
		</p>

		<p class="textBlock">
			6. Вся смена будет проходит в виде<span class="blue"> одной большой «киноигры»:</span> каждый день каждый участник будет получать индивидуальные и групповые задания за выполнение которых будет получать индивидуальные и групповые подарки и бонусы, которые помогут в съёмках фильмов.
			<br><br>
			7. <span class="blue">В нашем лагере есть правила и табу</span>, за нарушение которых мы коллективно будем придумывать наказания или просто отчислять из лагеря. А также договорённости, инструкции, рекомендации, просьбы и советы.
			<br><br>
			8. Одним из правил кинолагеря является то, что мы с каждым потенциальным участником, который планирует приехать к нам в лагерь <span class="blue">проводим совместную с родителями скайп встречу знакомства</span>, в ходе которой выясняем мотивацию, нюансы, рассказываем о кинолагере и правилах участия.
		</p>
	</div>

	<div class="twelvethBlock">
		<div class="twelvethBlock__content">
			<p>ДО НАЧАЛА СМЕНЫ ОСТАЛОСЬ:</p>
			<div id="clock"></div>
			<div id="message"></div>
			<button class="btn btn_accept">Принять участие</button>
		</div>
	</div>

	<div class="teamBlock">
		<p class="blueTitle">НАША КОМАНДА</p>
		<div class="teamBlock__content">
			<div class="teamBlock__item speaker" id="teamBlockContent">
				<div class="item__photo">
					<img src="img/team/team1.jpg" alt="Тимур Хамидуллин">
				</div>
				<p class="item__name">
					Тимур Хамидуллин
				</p>
				<p class="item__description">
					Генеральный директор.
					Академик Евразийской Академии Телевидения и Радио.
					Организационные вопросы, сотрудничество, реклама, СМИ.
				</p>
				<p class="item__fullDescription">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, quidem alias? Ducimus officiis dicta totam in sed, necessitatibus, beatae atque et molestias minus nemo nostrum voluptatem asperiores nesciunt dignissimos! Repellendus.
				</p>
			</div>

			<div class="teamBlock__item speaker">
				<div class="item__photo">
					<img src="img/team/team2.jpg" alt="Андрей Скрипцов">
				</div>
				<p class="item__name">
					Андрей Скрипцов
				</p>
				<p class="item__description">
					Руководитель проекта. Программный директор.
					Тренер по коммуникациям и созданию персонального бренда.
				</p>
				<p class="item__fullDescription">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, quidem alias? Ducimus officiis dicta totam in sed, necessitatibus, beatae atque et molestias minus nemo nostrum voluptatem asperiores nesciunt dignissimos! Repellendus.
				</p>
			</div>

			<div class="teamBlock__item speaker">
				<div class="item__photo">
					<img src="img/team/team3.jpg" alt="Элен Шиллер">
				</div>
				<p class="item__name">
					Элен Шиллер
				</p>
				<p class="item__description">
					Руководитель проекта. Программный директор. Директор по подбору персонала.
					Тренер по коммуникациям и созданию персонального бренда.
				</p>
				<p class="item__fullDescription">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, quidem alias? Ducimus officiis dicta totam in sed, necessitatibus, beatae atque et molestias minus nemo nostrum voluptatem asperiores nesciunt dignissimos! Repellendus.
				</p>
			</div>

			<div class="teamBlock__item speaker">
				<div class="item__photo">
					<img src="img/team/team4.jpg" alt="Ольга Ожерельева">
				</div>
				<p class="item__name">
					Ольга Ожерельева
				</p>
				<p class="item__description">
					Творческий руководитель
				</p>
				<p class="item__fullDescription">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, quidem alias? Ducimus officiis dicta totam in sed, necessitatibus, beatae atque et molestias minus nemo nostrum voluptatem asperiores nesciunt dignissimos! Repellendus.
				</p>
			</div>

			<div class="teamBlock__item speaker">
				<div class="item__photo">
					<img src="img/team/team4.jpg" alt="Ольга Ожерельева">
				</div>
				<p class="item__name">
					Ольга Ожерельева
				</p>
				<p class="item__description">
					Творческий руководитель
				</p>
				<p class="item__fullDescription">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, quidem alias? Ducimus officiis dicta totam in sed, necessitatibus, beatae atque et molestias minus nemo nostrum voluptatem asperiores nesciunt dignissimos! Repellendus.
				</p>
			</div>


			<div class="teamBlock__item speaker">
				<div class="item__photo">
					<img src="img/team/team4.jpg" alt="Ольга Ожерельева">
				</div>
				<p class="item__name">
					Ольга Ожерельева
				</p>
				<p class="item__description">
					Творческий руководитель
				</p>
				<p class="item__fullDescription">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, quidem alias? Ducimus officiis dicta totam in sed, necessitatibus, beatae atque et molestias minus nemo nostrum voluptatem asperiores nesciunt dignissimos! Repellendus.
				</p>
			</div>


			<div class="teamBlock__item speaker">
				<div class="item__photo">
					<img src="img/team/team4.jpg" alt="Ольга Ожерельева">
				</div>
				<p class="item__name">
					Ольга Ожерельева
				</p>
				<p class="item__description">
					Творческий руководитель
				</p>
				<p class="item__fullDescription">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, quidem alias? Ducimus officiis dicta totam in sed, necessitatibus, beatae atque et molestias minus nemo nostrum voluptatem asperiores nesciunt dignissimos! Repellendus.
				</p>
			</div>


			<div class="teamBlock__item speaker">
				<div class="item__photo">
					<img src="img/team/team4.jpg" alt="Ольга Ожерельева">
				</div>
				<p class="item__name">
					Ольга Ожерельева
				</p>
				<p class="item__description">
					Творческий руководитель
				</p>
				<p class="item__fullDescription">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, quidem alias? Ducimus officiis dicta totam in sed, necessitatibus, beatae atque et molestias minus nemo nostrum voluptatem asperiores nesciunt dignissimos! Repellendus.
				</p>
			</div>

		</div>

		<button class="moreBtn">Показать больше</button>
	</div>

	<div class="sovietBlock">
		<p class="blueTitle">ПОПЕЧИТЕЛЬСКИЙ СОВЕТ</p>
		<div class="teamBlock__content">
			<div class="teamBlock__item speaker" id="sovietBlockContent">
				<div class="item__photo">
					<img src="img/soviet/soviet1.jpg" alt="Рузин">
				</div>
				<p class="item__name">
					Рузин
					Валерий
					Давыдович
				</p>
				<p class="item__description">
					Президент Евразийской Академии Телевидения и Радио, академик Международной Академии Менеджмента, Почетный кинематографист России.
				</p>
				<p class="item__fullDescription">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, quidem alias? Ducimus officiis dicta totam in sed, necessitatibus, beatae atque et molestias minus nemo nostrum voluptatem asperiores nesciunt dignissimos! Repellendus.
				</p>
			</div>

			<div class="teamBlock__item speaker">
				<div class="item__photo">
					<img src="img/soviet/soviet2.jpg" alt="Костинский">
				</div>
				<p class="item__name">
					Костинский
					Даниил
					Владимирович
				</p>
				<p class="item__description">
					Продюсер и директор проекта «Ночь пожирателей рекламы» в России, организатор международного фестиваля рекламы "Каннские львы".
				</p>
				<p class="item__fullDescription">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, quidem alias? Ducimus officiis dicta totam in sed, necessitatibus, beatae atque et molestias minus nemo nostrum voluptatem asperiores nesciunt dignissimos! Repellendus.
				</p>
			</div>


			<div class="teamBlock__item speaker">
				<div class="item__photo">
					<img src="img/soviet/soviet3.jpg" alt="Рапопорт">
				</div>
				<p class="item__name">
					Рапопорт
					Александр
					Григорьевич
				</p>
				<p class="item__description">
					Актёр театра и кино, врач-психотерапевт, телеведущий.
				</p>
				<p class="item__fullDescription">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, quidem alias? Ducimus officiis dicta totam in sed, necessitatibus, beatae atque et molestias minus nemo nostrum voluptatem asperiores nesciunt dignissimos! Repellendus.
				</p>
			</div>

			<div class="teamBlock__item speaker">
				<div class="item__photo">
					<img src="img/soviet/soviet4.jpg" alt="Гаврилов">
				</div>
				<p class="item__name">
					Гаврилов
					Георгий
					Юрьевич
				</p>
				<p class="item__description">
					Режиссёр, сценарист, продюсер, актёр, преподаватель ВГИК
				</p>
				<p class="item__fullDescription">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, quidem alias? Ducimus officiis dicta totam in sed, necessitatibus, beatae atque et molestias minus nemo nostrum voluptatem asperiores nesciunt dignissimos! Repellendus.
				</p>
			</div>


			<div class="teamBlock__item speaker" id="sovietBlockContent">
				<div class="item__photo">
					<img src="img/soviet/soviet1.jpg" alt="Рузин">
				</div>
				<p class="item__name">
					Рузин
					Валерий
					Давыдович
				</p>
				<p class="item__description">
					Президент Евразийской Академии Телевидения и Радио, академик Международной Академии Менеджмента, Почетный кинематографист России.
				</p>
				<p class="item__fullDescription">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, quidem alias? Ducimus officiis dicta totam in sed, necessitatibus, beatae atque et molestias minus nemo nostrum voluptatem asperiores nesciunt dignissimos! Repellendus.
				</p>
			</div>


			<div class="teamBlock__item speaker" id="sovietBlockContent">
				<div class="item__photo">
					<img src="img/soviet/soviet1.jpg" alt="Рузин">
				</div>
				<p class="item__name">
					Рузин
					Валерий
					Давыдович
				</p>
				<p class="item__description">
					Президент Евразийской Академии Телевидения и Радио, академик Международной Академии Менеджмента, Почетный кинематографист России.
				</p>
				<p class="item__fullDescription">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, quidem alias? Ducimus officiis dicta totam in sed, necessitatibus, beatae atque et molestias minus nemo nostrum voluptatem asperiores nesciunt dignissimos! Repellendus.
				</p>
			</div>



			<div class="teamBlock__item speaker" id="sovietBlockContent">
				<div class="item__photo">
					<img src="img/soviet/soviet1.jpg" alt="Рузин">
				</div>
				<p class="item__name">
					Рузин
					Валерий
					Давыдович
				</p>
				<p class="item__description">
					Президент Евразийской Академии Телевидения и Радио, академик Международной Академии Менеджмента, Почетный кинематографист России.
				</p>
				<p class="item__fullDescription">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, quidem alias? Ducimus officiis dicta totam in sed, necessitatibus, beatae atque et molestias minus nemo nostrum voluptatem asperiores nesciunt dignissimos! Repellendus.
				</p>
			</div>


			<div class="teamBlock__item speaker" id="sovietBlockContent">
				<div class="item__photo">
					<img src="img/soviet/soviet1.jpg" alt="Рузин">
				</div>
				<p class="item__name">
					Рузин
					Валерий
					Давыдович
				</p>
				<p class="item__description">
					Президент Евразийской Академии Телевидения и Радио, академик Международной Академии Менеджмента, Почетный кинематографист России.
				</p>
				<p class="item__fullDescription">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, quidem alias? Ducimus officiis dicta totam in sed, necessitatibus, beatae atque et molestias minus nemo nostrum voluptatem asperiores nesciunt dignissimos! Repellendus.
				</p>
			</div>


		</div>

		<button class="moreBtn">Показать больше</button>

		<p class="blueTitle">А ТАКЖЕ</p>

		<div class="andBlock">
			<div class="andItem">
				<p class="blue">
					Транспортный отдел
					и логистика:
				</p>
				<p>
					Денис Басов
				</p>
			</div>
			<div class="andItem">
				<p class="blue">
					Съёмочная группа:
				</p>
				<p>
					Сергей Романюк <br>
					Лилия Рукосуева <br>
					Виктория Скиба <br>
					Ольга Олефиренко
				</p>
			</div>
			<div class="andItem">
				<p class="blue">
					PR- команда:
				</p>
				<p>
					Елена Макарова <br>
					Вероника Коренчук <br>
					Наталья Котт <br>
					Максим Андреев <br>
					Олеся Авдеенкова
				</p>
			</div>
		</div>

	</div>

	<div class="fifteenBlock">
		<p class="blueTitle">
			Все съемочное оборудование <br>
			любезно предоставлено компанией <br> "Кинозавод"</p>
			<a href="#"><img src="img/fifteen_blockBg.png" alt="Кинозавод"></a>
		</div>

		<div class="partners">
			<p class="blueTitle">НАШИ ПАРТНЁРЫ</p>
			<div class="partners__Content">
				<a href="https://www.google.com" class="partnerItem"><img src="img/partners/partners1.png" alt="Ресторан Шинто"></a>
				<a href="https://www.sberbank.ru/ru/person" class="partnerItem"><img src="img/partners/partners2.png" alt="Сбербанк"></a>
				<a href="#" class="partnerItem"><img src="img/partners/partners3.png" alt="Вeer King"></a>
				<a href="#" class="partnerItem"><img src="img/partners/partners4.png" alt="Билайн"></a>
				<a href="#" class="partnerItem"><img src="img/partners/partners5.png" alt="А"></a>
				<a href="#" class="partnerItem"><img src="img/partners/partners6.png" alt="KVFilm"></a>
				<a href="#" class="partnerItem"><img src="img/partners/partners7.png" alt=""></a>
				<a href="#" class="partnerItem"><img src="img/partners/partners8.png" alt=""></a>
				<a href="#" class="partnerItem"><img src="img/partners/partners9.png" alt=""></a>
				<a href="#" class="partnerItem"><img src="img/partners/partners10.png" alt=""></a>
				<a href="#" class="partnerItem"><img src="img/partners/partners11.png" alt=""></a>
				<a href="#" class="partnerItem"><img src="img/partners/partners12.png" alt=""></a>
				<a href="#" class="partnerItem"><img src="img/partners/partners13.png" alt=""></a>
				<a href="#" class="partnerItem"><img src="img/partners/partners14.png" alt=""></a>
				<a href="#" class="partnerItem"><img src="img/partners/partners15.png" alt=""></a>

			</div>



			<p class="blueTitle">ИНФОРМАЦИОННЫЕ ПАРТНЁРЫ</p>
			<div class="partners__Content">
				<a href="#" class="partnerItem"><img src="img/infoPartners/infoPartners1.png" alt="Ресторан Шинто"></a>
				<a href="#" class="partnerItem"><img src="img/infoPartners/infoPartners2.png" alt="Сбербанк"></a>
				<a href="#" class="partnerItem"><img src="img/infoPartners/infoPartners3.png" alt="Вeer King"></a>
				<a href="#" class="partnerItem"><img src="img/infoPartners/infoPartners4.png" alt="Билайн"></a>
			</div>


			<p class="blueTitle">ПРИ ПОДДЕРЖКЕЫ</p>
			<div class="partners__Content">
				<a href="#" class="partnerItem"><img src="img/ourSupporting/supporting1.png" alt="Ресторан Шинто"></a>
				<a href="#" class="partnerItem"><img src="img/ourSupporting/supporting2.png" alt="Сбербанк"></a>
				<a href="#" class="partnerItem"><img src="img/ourSupporting/supporting3.png" alt="Вeer King"></a>
				<a href="#" class="partnerItem"><img src="img/ourSupporting/supporting4.png" alt="Билайн"></a>
				<a href="#" class="partnerItem"><img src="img/ourSupporting/supporting5.png" alt="А"></a>

			</div>
		</div>


		<footer id="contacts">
			<div class="footer__content">
				<div class="footer__LeftItem">
					<p>ТО "Кинокэмп"<br>
						Евразийская Ассоциация Телевидения и Радио <br>
						Молодежный центр Союза кинематографистов Российской Федерации
					</p>
					<a href="tg://resolve?domain=89925050000" class="socialLink"><img src="img/tg_icon.png" alt="Telegram"></a>
					<a href="https://api.whatsapp.com/send?phone=89925050000" class="socialLink"><img src="img/vapp_icon.png" alt="WApp"></a>
					<a href="skype:89925050000?chat" class="socialLink"><img src="img/skype_icon.png" alt="Skype"></a> <br>
					<a href="tel:+89925050000" class="redTitle">+89925050000</a>

				</div>
				<div class="footer__rightItem">
					<div id="map"></div>
				</div>
				<div class="footer__LeftItem bottomContacts">
					<a href="https://www.google.com.ua/maps/place/%D1%83%D0%BB.+%D0%9B%D1%83%D1%87%D0%B5%D0%B7%D0%B0%D1%80%D0%BD%D0%B0%D1%8F,+74,+%D0%A3%D1%87-%D0%94%D0%B5%D1%80%D0%B5,+%D0%9A%D1%80%D0%B0%D1%81%D0%BD%D0%BE%D0%B4%D0%B0%D1%80%D1%81%D0%BA%D0%B8%D0%B9+%D0%BA%D1%80%D0%B0%D0%B9,+%D0%A0%D0%BE%D1%81%D1%81%D0%B8%D1%8F,+354208/@43.6699501,39.6108692,16z/data=!4m5!3m4!1s0x40f43477cdf593b7:0xb55fca1339da27d2!8m2!3d43.6702217!4d39.6101611"> <img src="img/place_icon.png" alt="Место">
						Место проведения: г. Сочи, ул. Лучезарная, д. 74
						Адрес: 107078, Москва, Ул. Новая Басманная, д.12, а/я 281
					</a>
					<a href="tel:+88007700916"> <img src="img/phone_icon.png" alt="Телефон">
						8-800-77-00-916 - бесплатно по РФ
					</a>
					<a href="mailto:kinocamp@mail.ru"> <img src="img/mail_icon.png" alt="Почта">
						kinocamp@mail.ru
					</a>
				</div>
				<div class="footer__rightItem">
					<a href="https://vk.com/kino.camp"><img src="img/vk_icon.png" alt="vk">kino.camp</a>
					<a href="https://www.instagram.com/kinocamp"><img src="img/ins_icon.png" alt="Inst">kinocamp</a>
					<a href="https://www.facebook.com/pg/kinocampsochi/about/"><img src="img/fb_icon.png" alt="vk">kinocampsochi</a>
				</div>
			</div>
			<p>© Все права защищены. Кинокэмп 2018</p>
		</footer>

		<div class="modal">

			<div id="speakerFullInfo" class="modalContent">
				<img id="fullPhoto" src="" alt="Фотография">
				<h3 id="name"></h3>
				<p id="biography"></p>
				<span class="close">&times;</span>
			</div>

			<div id="formBlock" class="modalContent">

			</div>

			<div id="forActors" class="modalContent">
				<h2>
					ДЛЯ ТЕХ, КТО ХОЧЕТ СНИМАТЬСЯ В КИНО
					<br><br>
					ПРОГРАММА "КИНОАКТЁР"
				</h2>
				<h4>Стань героем!</h4>
				<p>Программа «Киноактер» предназначена для тех, кто хочет освоить профессию киноактера: стремится получить уникальный опыт, участвуя в сьемках, а также усовершенствовать навыки необходимые для органичного «диалога» с камерой. <br><br>

					В программу курса входит 26 часов (2 часа в день) теоретических и 26 часов (2 часа в день) практических занятий. Таким образом, получив хорошие теоретические знания, участники получает возможность закрепить их на практике, работая с режиссёрами, операторами и всей съёмочной группой в течение одной кино-смены. <br> <br>

					В ходе реализации Программы проводятся регулярные занятия по теоретическим дисциплинам, мастер-классы, встречи с профессионалами кинематографа и звёздами кино, коучинг, индивидуальные занятия, участие в реальных съёмках, кино-квесты, кино-экскурсии, кейсы, командная работа над проектами, неформальное общение и отдых на море.
				</p>

				<h3>Теоретическая база:</h3>

				<p>
					<strong>1.</strong> Актёрское мастерство: комплекс занятий на раскрепощение и освобождение от зажимов; развития внимания и концентрации; взаимодействие с партнёром; развитие креативности, быстроты ума и логики мышления. <br> <br>

					<strong>2.</strong> Сценическая речь: большой комплекс упражнений, направленных на развитие артикуляции, логики речи, интонирования; управление резонаторами и силой голоса. <br> <br>

					<strong>3.</strong> Сценическое движение и пластика: координация, ритмика, взаимодействие с партнёром и группой, основы сценического боя. <br> <br>

					<strong>4.</strong> Работа на камеру: работа в кадре; позирование, мимика и жестикуляция; выгодные ракурсы, взаимодействие с оператором: работа с гримом, костюмами и реквизитом. <br> <br>

					<strong>5.</strong> Развитие рационального и эмоционального интеллекта: улучшение возможностей обоих полушарий мозга, расширение кругозора, работа над уверенностью и памятью; управление эмоциональной сферой, расширение эмоционального диапазона, эмпатия, харизма, влияние на людей. <br> <br>

					<strong>6.</strong> Основы каскадёрского дела: психология трюковой работы. Акробатика. Высотная подготовка. Подводная подготовка. Практическое и тактическое владение огнестрельным оружием. Основы единоборств и работы с холодным оружием. Практические навыки падения в страховку. Движение в кадре.
					<br> <br>
					<strong>7.</strong> Кино-нетворкинг: как создать свое портфолио, как пройти кастинг, как заводить взаимовыгодные связи и выстроить эффективные коммуникации с продюсерами, режиссёрами, агентами и кастинг директорами.
				</p>

				<h3>Практический опыт:</h3>
				<p>Участники курса делятся на команды. Под руководством опытных преподавателей и спикеров каждая команда снимает свой собственный фильм. В ходе съемочного процесса, участник получает уникальную возможность:</p>

				<ul>
					<li>поработать в съёмочной команде в кадре и за кадром;</li>
					<li>принять участие в съёмках короткометражных игровых фильмов;</li>
					<li>узнать и применить секреты нанесения кино-грима;
						поработать с художником по костюмам и декораторами;
					</li>
					<li>прослушать мастер-класс от метров кинематографа;</li>
					<li>пообщаться со ЗВЕЗДОЙ по теме кино-видео производства;</li>
					<li>получить опыт совместной работы над собственным проектом;</li>
					<li>поработать с художником по костюмам и декораторами;</li>
				</ul>

				<h3>Результаты:</h3>
				<ul>
					<li>получение основных актёрских навыков;</li>
					<li>развитие харизмы и эмоционального интеллекта;</li>
					<li>овладение основами правильной речи;</li>
					<li>получение навыков импровизационных техник;</li>
					<li>практика реальных съёмок;</li>
					<li>создание личного портфолио;</li>
					<li>включение в актёрские базы;</li>
					<li>незабываемые впечатления и обретение новых знакомств.</li>
				</ul>
				<h3>В стоимость программы входит:</h3>
				<ul>
					<li>проживание в оразовательно- развлекательном центре «Илона» на территории санатория Аквалоо;</li>
					<li>3-х разовое питание шведский стол;</li>
					<li>обучающая и практическая программа;</li>
					<li>культурно-развлекательная программа;</li>
					<li>встречи со «звёздами» кино;</li>
					<li>работа педагогов-вожатых (2 вожатых на 10 детей);</li>
					<li>оборудование и реквизит для съёмок;</li>
					<li>создание портфолио (фотосессия, шоурил) и постановка в разные актёрские базы;</li>
					<li>показ снятого в кинолагере фильма на различных кинофестивалях;</li>
					<li>диплом участника;</li>
					<li>стилизованная кино-форма (футболка, бандана, кружка);</li>
				</ul>
				<p>Куратор программы «Киноактёр» <strong>ЛЕОНИД БУЛДАКОВ</strong>  выпускник Школы-студии МХАТ, актёр театра и кино, режиссёр, преподаватель по сценическому движению и актёрскому мастерству. Автор тренинга для актёров «Биохимия движения».</p>

				<span class="close">&times;</span>
			</div>

			<div id="forProducer" class="modalContent">
				<h2>
					ДЛЯ ТЕХ, КТО ХОЧЕТ СНИМАТЬ КИНО <br><br>
					ПРОГРАММА "ФИЛЬММЕЙКЕР"
				</h2>
				<h5>(режиссеры, сценаристы, операторы, продюсеры)</h5>
				<h4>Сними СВОЙ фильм!</h4>
				<p>
					Практический курс-интенсив (14 дней /13 ночей - одна киносмена) <br><br>

					Программа «ФИЛЬММЕЙКЕР» предназначена для тех, кто хочет освоить все аспекты кинопроизводства от "А до Я": сценарное дело, операторское мастерство, режиссуру и продюсирование. <br> <br>

					В программу курса входит: 32 часа (3 часа в день) теоретических и 32 часа (3 часа в день) практических занятий + участие в кинофестивале со своим фильмом. Таким образом, усвоив теоретические знания, участник имеет возможность закрепить их на практике, и получить опыт и навыки работы на съёмочной площадке. <br> <br>

					В ходе реализации Программы проводятся регулярные занятия по теоретическим дисциплинам, мастер-классы, встречи с профессионалами кинематографа и звёздами кино, индивидуальные занятия, киноклубы с обсуждением шедевров мирового кино, командная работа над проектами, неформальное общение и отдых на море.
				</p>
				<h3>За 14 дней интересной и напряженной работы участники узнают:</h3>

				<p>

					<strong>1.</strong>	 Подготовительный период к съемке (препродакшн) <br>
					-что должно быть в хорошем фильме, а чего в нем быть не должно; <br>
					-каков должен быть хронометраж фильма в зависимости от замысла и формата; <br>
					-основные отличия подготовки к производству короткого, полного метра и сериала; <br>
					-как выбрать хороший сценарий или написать его самому; <br>
					-что такое логлайн и синопсис, и как их правильно написать; <br>
					-как построить драматургию характеров и сюжета; <br>
					-что такое раскадровка, и как подготовить режиссерскую экспликацию; <br>
					-как провести кастинг, подобрать актеров, ставить актерские задачи и репетировать; <br>
					-как подобрать оператора и других членов съемочной бригады; <br>
					-правильный подход к подбору локаций; <br>
					-грамотное управление бюджетом и работа продюсера; <br>

					<strong>2.</strong> Съемочный период (продакшн) <br>
					-грамотное построение съемочного дня; <br>
					-логистика съемки (транспорт, люди, реквизит); <br>
					-работа с актерами на площадке; <br>
					-работа со звуком на площадке; <br>
					-работа с большим количеством людей на площадке (массовка и групповка); <br>
					-планы и ракурсы в операторской работе; <br>
					-драматургия света в кадре; <br>
					-цветовое решение фильма; <br>
					-движение камеры и композиция изображения; <br>
					-опасности, непредвиденные обстоятельства, и как решать возникающие проблемы; <br>

					<strong>3.</strong> Монтажно-тонировочный период (постпродакшн) <br>
					-работа по монтажу отснятого материала; <br>
					-цветокоррекция и визуальные эффекты; <br>
					-работа с композитором по написанию саундтрека к фильму; <br>
					-тонировка (озвучивание) фильма; <br>
					-диктор, шумы, звуковые эффекты <br>
					-продвижение фильма и его дальнейшая судьба.
				</p>
				<h3>Практический опыт:</h3>
				<p>
					Каждый участник получает возможность снять свой собственный фильм и получить признание на Кинофестивале «Мы сами снимаем кино», который пройдет по итогам киносмены.
					В ходе съемочного процесса, участник получает уникальную возможность:
				</p>

				<ul>
					<li>понаблюдать и непосредственно поучаствовать в процессе киносъемок;</li>
					<li>принять участие в постановке кадра, развить свои навыки композиции, цветового решения, движения камеры, художественной постановке света и др.;</li>
					<li>получить опыт работы в режиссуре, освоить навыки кинодраматургии;</li>
					<li>прослушать мастер-классы от мэтров кинематографа</li>
					<li>пообщаться со ЗВЕЗДОЙ;</li>
					<li>получить опыт совместной работы над собственным проектом.</li>
				</ul>

				<h3>Результаты:</h3>

				<ul>
					<li>получение навыков и опыта в кинопроизводстве;</li>
					<li>получение ответов на вопросы по актуальным темам;</li>
					<li>получение опыта работы с актёрами и другими специалистами, участвующими в создании фильмов;</li>
					<li>получение опыта съемки в павильоне и на натуре;</li>
					<li>создание личного портфолио;</li>
					<li>опыт участия (а, может, и победы!) на кинофестивале;</li>
					<li>незабываемые впечатления и обретение новых знакомств.</li>
				</ul>

				<h3>Стоимость программы за 14 дней/13 ночей:</h3>

				<ul>
					<li><strong>44 900 на одного человека;</strong></li>
					<li><strong>24 900 на одного сопровождающего без программ;</strong></li>
					<li><strong>20 000 без проживания и питания;</strong></li>
				</ul>

				<h3>В стоимость программы входит:</h3>

				<ul>
					<li>проживание 14 дней/13 ночей в образовательно развлекательном центре «Илона» в 3- х местных номерах со всеми удобствами;</li>
					<li>3-х разовое питание шведский стол;</li>
					<li>участие в съёмках проектов кинолагеря;</li>
					<li>обучающая и практическая программа;</li>
					<li>культурно-развлекательная программа;</li>
					<li>встречи со Звёздами;</li>
					<li>создание портфолио (фотосессия, шоурил или фильм);</li>
					<li>стилизованная киноформа (футболка, бандана);</li>
				</ul>

				<h3>Куратор программы:</h3>

				<p>
					АНДРЕЙ СКРИПЦОВ – режиссер, сценарист, обладатель Приза Кшиштофа Занусси (2017 г.), автор семи художественных фильмов – участников и лауреатов международных кинофестивалей в России, Германии, Бразилии, Украине, Армении и др. <br><br>

					Кроме этого, участники узнают: как определить, сможет ли человек быть хорошим сценаристом и режиссером, освоить на практике создание драматургического поворота в кино, а также смогут снять свой собственный фильм по методике Кшифтофа Занусси – всемирно известного режиссера, лауреата Каннского и Венецианского фестивалей.
				</p>
				<h3>14 дней интенсивной работы в кино ждут тебя!</h3>

				<span class="close">&times;</span>
			</div>


			<div id="callModal" class="modalContent">
				<form action="#">
					<label for="nameField">Ваше имя</label><br>
					<input id="nameField" type="text" placeholder="Ваше имя" required>
					<br>
					<br>
					<label for="phoneNumber">Номер телефона</label><br>
					<input type="tel" placeholder="89890001623" required>
					<button>Отрпавить</button>
				</form>
				<span class="close">&times;</span>
			</div>

			<div id="mainForm" class="modalContent">
				<form action="mail.php" method="post">
					<div class="leftPart">
						<p class="blueTitle">Анкета</p>
						<div class="inputField">
							<label for="fio">
								ФИО:
							</label>
							<input id="fio" name="fio" type="text" placeholder="Ивагова Катерина" required>
						</div>

						<div class="inputField">
							<label for="age">
								ВОЗРАСТ(ПОЛНЫХ ЛЕТ):
							</label>
							<input type="text" id="age" name="age" placeholder="9 лет" required>
						</div>

						<div class="inputField">
							<label for="format">
								ИНТЕРЕСУЮЩИЙ ФОРМАТ УЧАСТИЯ:
							</label>
							<select name="format" id="format">
								<option value="acter">Киноактер</option>
								<option value="producer">Режиссер</option>
							</select>
						</div>

						<div class="inputField">
							<label for="period">
								СМЕНА:
							</label>
							<select name="perion" id="period">
								<option value="summer">Лето 2018</option>
								<option value="producer">Режиссер</option>
							</select>
						</div>

						<div class="inputField">
							<label for="city">
								ГОРОД:
							</label>
							<input id="city" name="city" type="text" required>
						</div>

						<div class="inputField">
							<label for="phone">
								ТЕЛЕФОН:
							</label>
							<input id="phone" name="phone" type="tel" required>
						</div>

						<div class="inputField">
							<label for="mail">
								E-MAIL:
							</label>
							<input id="mail" name="mail" type="mail" required>
						</div>

						<div class="inputField">
							<label for="where">
								ОТКУДА ВЫ УЗНАЛИ О ПРОЕКТЕ?:
							</label>
							<input id="where" name="where" type="text" required>
						</div>

						<div class="checkboxField firstCheck">
							<label for="personalData">
								<input type="checkbox" name="personalData" checked required id="personalData">
								<span class="check"></span>
								Я согласен(на) на обработку персональных данных
							</label>
						</div>

						<div class="checkboxField">
							<label for="accept">
								<input type="checkbox" name="accept" checked required id="accept">
								<span class="check"></span>
								Я согласен(на получать новостную рассылку)
							</label>
						</div>
					</div>


				<div class="clear"></div>
				<button>Отправить анкету</button>

			</form>
			<span class="close">&times;</span>
		</div>

	</div>

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCa3Fm9wmo5FGw51fA9jUxwvydeuTW62qM&callback=initMap"
	async defer></script>
	<script src="js/libs.min.js"></script>
	<script src="js/common.js"></script>
</body>
</html>
