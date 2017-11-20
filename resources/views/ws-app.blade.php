<!DOCTYPE HTML>
<html lang="{{ App::getLocale() }}>
<head>

     <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=0, maximum-scale=1" />
<title>index</title>

<link media="all" rel="stylesheet" type="text/css" href="{{ asset('/css/frontend/libs.min.css') }}" />
<link media="all" rel="stylesheet" type="text/css" href="{{ asset('/css/frontend/styles.css') }}" />

</head>
	<link rel="shortcut icon" href="{{ asset('/img/favicon/favicon.ico') }}" type="image/x-icon">
	<link rel="apple-touch-icon" href="{{ asset('/img/favicon/apple-touch-icon.png') }}">
	<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/favicon/apple-touch-icon-72x72.png') }}">
	<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('/img/favicon/apple-touch-icon-114x114.png') }}">


	<link href="{{ asset('/css/plugins/sweetalert.css') }}" rel="stylesheet">



</head>
<body>


<div class="total-container">


	<!-- .header -->
	<div class="header">

		<div class="container">

			<div class="header__text">
				<span class="header__text-fon">GLOBAL TOBACCO</span>
				<h2>GLOBAL TOBACCO</h2>
				<h3>INTERNATIONAL</h3>
			</div>

			<div class="header__address">
				<ul>
					<li><a class="address-phone" href="javascript:void(0)">0 800 500 8 500</a></li>
					<li><span>Україна, Луцьк, вул. Вахтангова, 12 а.</span></li>
					<li><a class="address-email" href="javascript:void(0)">info@globaltobako.com</a></li>
				</ul>
			</div>

			<div class="container__row">

				<div class="container__col">

					<div class="logo"><a href="javascript:void(0)"><img src="{{ asset('/img/frontend/logo.png') }}" alt="logo" /></a></div>

				</div>

				<div class="container__col">

					@include('frontend.menu')

				</div>

				<div class="container__col">

					<div class="languages">
						<span>{{ App::getLocale() }}</span>
						<ul>
							@foreach($langs as $lang)
								<li @if(App::getLocale() == $lang->lang ) style="display: none" @endif><a href="{{str_replace(url(App::getLocale()), url($lang->lang), Request::url())}}">{{$lang->lang}}</a></li>
							@endforeach
						</ul>
					</div>

				</div>

			</div>

		</div>

		<div class="header__more"><span>Більше про нас</span></div>

		<div class="inclined inclined--bottom inclined--colorBeige"></div>

		<div class="mobileMenu">
			<div class="mobileMenu__cont"></div>
			<div class="mobileMenu__button">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>

	</div>
	<!-- END .header -->




	<!-- .aboutUs-main -->
	<div class="aboutUs-main">

		<div class="container">

			<span class="verticalText">ПРО НАС</span>
			<span class="fonText">ПРО НАС</span>

			<div class="container__row">

				<div class="container__col">

					<div class="presenBox">
						<h2>GLOBAL TOBACCO</h2>
						<h3>INTERNATIONAL</h3>
						<p>Український виробник тютюнових виробів. Компанія започаткована у 2007 році на базі Монастириської тютюнової фабрики. Потужності виробництва дозволяють компанії надавати послуги з підготовки і переробки сировини. Сьогодні Глобал Тобако Інтернешнл активно розвиває цей напрямок і налагоджує зв’язки з новими клієнтами.</p>
						<a class="button" href="javascript:void(0)">Детальніше</a>
					</div>

				</div>

				<div class="container__col">

					<ul class="aboutUs-main__photo">
						<li><a href="javascript:void(0)"><img src="pictures/aboutUs-main/img-1.jpg" alt="img" /></a></li>
						<li><a href="javascript:void(0)"><img src="pictures/aboutUs-main/img-2.jpg" alt="img" /></a></li>
						<li><a href="javascript:void(0)"><img src="pictures/aboutUs-main/img-1.jpg" alt="img" /></a></li>
					</ul>

				</div>

			</div>

		</div>

	</div>
	<!-- END .aboutUs-main -->




	<!-- .inform -->
	<div class="inform">

		<div class="container">

			<span class="verticalText">ПЕРЕВАГИ</span>

			<div class="container__row">

				<div class="container__col">

					<div class="inform__box">
						<div class="inform__icon inform__icon--people"></div>
						<h3>ІННОВАЦІЇ</h3>
						<p>Компанія GLOBAL TOBACO широко визнана в усьому світі як інноваційний лідер своєї галузі.</p>
					</div>

				</div>

				<div class="container__col">

					<div class="inform__box">
						<div class="inform__icon inform__icon--people"></div>
						<h3>ІННОВАЦІЇ</h3>
						<p>Компанія GLOBAL TOBACO широко визнана в усьому світі як інноваційний лідер своєї галузі.</p>
					</div>

				</div>

				<div class="container__col">

					<div class="inform__box">
						<div class="inform__icon inform__icon--people"></div>
						<h3>ІННОВАЦІЇ</h3>
						<p>Компанія GLOBAL TOBACO широко визнана в усьому світі як інноваційний лідер своєї галузі.</p>
					</div>

				</div>

			</div>

		</div>

		<div class="informSlider">
			<div class="informSlider__box">
				<div class="inform__box">
					<div class="inform__icon inform__icon--people"></div>
					<h3>ІННОВАЦІЇ</h3>
					<p>Компанія GLOBAL TOBACO широко визнана в усьому світі як інноваційний лідер своєї галузі.</p>
				</div>
			</div>
			<div class="informSlider__box">
				<div class="inform__box">
					<div class="inform__icon inform__icon--people"></div>
					<h3>ІННОВАЦІЇ</h3>
					<p>Компанія GLOBAL TOBACO широко визнана в усьому світі як інноваційний лідер своєї галузі.</p>
				</div>
			</div>
			<div class="informSlider__box">
				<div class="inform__box">
					<div class="inform__icon inform__icon--people"></div>
					<h3>ІННОВАЦІЇ</h3>
					<p>Компанія GLOBAL TOBACO широко визнана в усьому світі як інноваційний лідер своєї галузі.</p>
				</div>
			</div>
		</div>

	</div>
	<!-- END .inform -->




	<!-- .production-main -->
	<div class="production-main">

		<div class="container">

			<span class="verticalText">ПРОДУКЦІЯ</span>
			<span class="fonText">ПРОДУКЦІЯ</span>

			<div class="container__row">

				<div class="container__col">

					<div class="prodBox">
						<div class="prodBox__substrate"><img src="pictures/substrate/img-1.jpg" alt="img" /></div>
						<h3>GLOBAL TOBACCO</h3>
						<h4>INTERNATIONAL</h4>
						<img src="pictures/production/img-1.png" alt="img" />
						<p>Український виробник тютюнових виробів. Компанія започаткована у 2007 році на базі Монастириської тютюнової фабрики.</p>
					</div>

				</div>

				<div class="container__col">

					<div class="prodBox">
						<div class="prodBox__substrate"><img src="pictures/substrate/img-2.jpg" alt="img" /></div>
						<h3>GLOBAL TOBACCO</h3>
						<h4>INTERNATIONAL</h4>
						<img src="pictures/production/img-1.png" alt="img" />
						<p>Український виробник тютюнових виробів. Компанія започаткована у 2007 році на базі Монастириської тютюнової фабрики.</p>
					</div>

				</div>

			</div>

		</div>

	</div>
	<!-- END .production-main -->




	<!-- .partners-main -->
	<div class="partners-main">

		<div class="inclined inclined--top inclined--colorBeige"></div>
		<div class="inclined inclined--bottom inclined--colorWhite"></div>

		<div class="container">

			<span class="verticalText verticalText--white">ПАРТНЕРАМ</span>

			<div class="presenBox presenBox--white">
				<h2>GLOBAL TOBACCO</h2>
				<h3>INTERNATIONAL</h3>
				<p>Український виробник тютюнових виробів. Компанія започаткована у 2007 році на базі Монастириської тютюнової фабрики. </p>
				<a class="button" href="javascript:void(0)">Детальніше</a>
			</div>

		</div>

	</div>
	<!-- END .partners-main -->




	<!-- .disposition -->
	<div class="disposition disposition--weAreOpen">

		<div class="container">

			<span class="verticalText">МИ ВІДКРИТІ</span>

			<div class="container__row">

				<div class="container__col">

					<div class="presenBox">
						<h2>GLOBAL TOBACCO</h2>
						<h3>INTERNATIONAL</h3>
						<p>Український виробник тютюнових виробів. Компанія започаткована у 2007 році на базі Монастириської тютюнової фабрики.</p>
					</div>

				</div>

				<div class="container__col">

					<div class="disposition__map"></div>

				</div>

			</div>

		</div>

	</div>
	<!-- END .disposition -->





	<div class="hFooter"></div>

</div>





<!-- .footer -->
<footer class="footer">

	<div class="container">

		<div class="container__row">

			<div class="container__col">

				<div class="footer-logo"><a href="javascript:void(0)"><img src="{{ asset('/img/frontend/logo.png') }}" alt="logo" /></a></div>

			</div>

			<div class="container__col">

				@include('frontend.menu')

			</div>

			<div class="container__col">

				<ul class="feedback">
					<li><a class="fb-phone" href="javascript:void(0)">0 800 500 8 500</a></li>
					<li><a class="fb-email" href="javascript:void(0)">info@globaltobako.com</a></li>
				</ul>

			</div>

		</div>

	</div>

	<div class="footer-bottom">

		<div class="container">

			<span class="footer-info">2017 © Global Tobacco International</span>

		</div>

	</div>

</footer>
<!-- END .footer -->
{{--Файл переводов--}}
<script>
	var trans = {
		'base.success': '{{ trans('base.success_send_contact') }}',
		'base.error': '{{ trans('base.error_send_contact') }}',
	};
</script>
{{--/Файл переводов--}}
{{-- JS --}}

<script src="{{ asset('/js/plugins/sweetalert.min.js') }}"></script>
<script src="{{ asset('/js/frontend/jquery.min.js') }}"></script>
<script src="{{ asset('/js/frontend/libs.min.js') }}"></script>
<script src="{{ asset('/js/frontend/main.js') }}"></script>

{{-- /JS --}}

</body>
</html>


