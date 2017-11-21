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
				<span class="header__text-fon">{{ $main[0]->getTranslate('title')? $main[0]->getTranslate('title') : 'GLOBAL TOBACCO' }}</span>
				{!! $main[0]->getTranslate('short_description') ? $main[0]->getTranslate('short_description') : '<h2>GLOBAL TOBACCO</h2><h3>INTERNATIONAL</h3>' !!}
			</div>

			<div class="header__address">
				<ul>
					<li><a class="address-phone">{{ $texts->get('phone') }}</a></li>
					<li><span>{{ $texts->get('address') }}</span></li>
					<li><a class="address-email" href="mailto:{{ $texts->get('email') }}">{{ $texts->get('email') }}</a></li>
				</ul>
			</div>

			<div class="container__row">

				<div class="container__col">

					<div class="logo"><a href="/{{ App::getLocale() }}"><img src="{{ $main[0]->getAttributeTranslate('Логотип') ? $main[0]->getAttributeTranslate('Логотип') : asset("/img/frontend/logo.png") }}" alt="logo" /></a></div>

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

		<div class="header__more"><span>{{ trans('base.more') }}</span></div>

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

	@yield('content')

	<div class="hFooter"></div>

</div>

<!-- .footer -->
<footer class="footer">

	<div class="container">

		<div class="container__row">

			<div class="container__col">

				<div class="footer-logo"><a href="javascript:void(0)"><img src="{{ $main[0]->getAttributeTranslate('Логотип') ? $main[0]->getAttributeTranslate('Логотип') : asset("/img/frontend/logo.png") }}" alt="logo" /></a></div>

			</div>

			<div class="container__col">

				@include('frontend.menu')

			</div>

			<div class="container__col">

				<ul class="feedback">
					<li><a class="fb-phone">{{ $texts->get('phone') }}</a></li>
					<li><a class="fb-email" href="mailto:{{ $texts->get('email') }}">{{ $texts->get('email') }}</a></li>
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


