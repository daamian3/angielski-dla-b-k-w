<!DOCTYPE html>
<html lang="pl">
	<head>

		<meta charset="UTF-8">
		<title>Angielski dla bąka</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Spectral" rel="stylesheet">
		<link rel="stylesheet" href="css/style.css">
		<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
		<script src="parallax-background.min.js"></script>
		<?php include 'detect.php'; ?>



	</head>
	<body>
		<!-- ładowanie się strony -->
		<div id="przyciemnienie" class="przyciemnienie"></div>
		<div id="loading" class="loading">
			Trwa ładowanie strony...
			<div class="loader"></div>
		</div>

		<!-- tu można wyłączyc -->
		<script>
		//document.getElementById("przyciemnienie").style.display="block";
		//document.getElementById("loading").style.display="block";
		</script>

		<header id="top" class="main-header">
					<ul class="main-nav">
						<a href="index.php"><li class="logo"><h1>Angielski dla bąka</h1></li></a>
						<div class="buttons">
							<a href="logowanie.php"><li class="button">Zaloguj się</li></a>
							<a href="rejestracja.php"><li class="button">Zarejestruj się</li></a>
						</div>
					</ul>
			<div class="container">
				<article class="o_nas">
					<h2>O nas</h2>
					<p>
						Jesteśmy tutaj, aby sprawić żeby wasze dziecko nauczyło się języka angielskiego.
						Ta niezwykle przydatna umiejętność jest bardzo ważna w dzisiejszych czasach,
						dlatego warto rozpocząć naukę jak najszybciej. Oferujemy naukę języka, poprzez
						przyjazne i zachęcające gry dzięki którym wasze maluchy nie będą myśleć o tym, że się uczą.
						</p>
					</article>
				</div>
			</header>

			<div class="container">
				<article class="graj">
					<h2>Wypróbuj już teraz!</h2>
				</article>

					<article>
						<h2>Czemu akurat Angielski dla bąka</h2>
						<p>
							Chwile poświęcone nauce na nauce z naszymi grami, zwrórcą się z pewnością w codziennych czynnościach, w których potrzebna jest znajomość języka angielskiego. Nasze gry:
						</p>
						<div class="czemu">
							<div class="icon">
								<img src="idea.svg" alt="inteligencja"><br />
								Rozwijają umysł
							</div>
							<div class="icon">
								<img src="chat.svg" alt="rozmowa"><br />
								Uczą rozmawiać
							</div>
							<div class="icon">
								<img src="clipboard.svg" alt="egzaminy"><br />
								Pomagają w szkole
							</div>
						</div>

					</article>

					<article class="english" data-parallax-bg-image="english.png" data-parallax-speed="1" data-parallax-direction="down"></article>

					<article>
						<h2>Efekty nauki widoczne po tygodniu</h2>
						Vivamus eget nunc at risus suscipit dictum sit amet egestas velit. Aliquam sagittis neque augue, vitae scelerisque massa gravida id. Maecenas laoreet posuere purus, sed ullamcorper erat molestie vel. Proin venenatis massa ut metus feugiat, at feugiat mi sodales. Mauris vulputate metus interdum leo volutpat, quis imperdiet dui tempor. Praesent tincidunt ligula metus, in sagittis velit viverra vitae. Aliquam ac odio id diam porta aliquet. Suspendisse tempor venenatis pharetra. Praesent nec mauris a lorem hendrerit suscipit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec vulputate eros justo, sit amet cursus elit consequat ut. Praesent et lectus in dolor interdum finibus id eu enim. Maecenas faucibus arcu ut vestibulum vehicula. Sed euismod sapien convallis dolor rutrum ornare.
					</article>

				</div>


			<footer class="main-footer">
				<p>&copy;2017 | Nauka angielskiego - Angielski dla bąka&reg;</p>
			</footer>

			<script>

			$(document).ready(function(){
			  // Po poprawnym załadowaniu strony wyłącza przyciemnienie
			  $("#przyciemnienie").fadeOut('fast');
			  // Po poprawnym załadowaniu strony wyłącza loading
			  $("#loading").fadeOut('fast');
			});

			(function ($) {
				$('.english').parallaxBackground();
			})(jQuery);


			</script>

	</body>
</html>
