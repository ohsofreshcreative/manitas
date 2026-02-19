<!doctype html>
<html @php(language_attributes())>

<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-T2SGDR79');</script>
<!-- End Google Tag Manager -->


	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	@php(do_action('get_header'))
	@php(wp_head())

	{{-- Fonts --}}
	<link rel="stylesheet" href="https://use.typekit.net/bpk8kon.css">

	@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body @php(body_class())>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T2SGDR79"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

	@php(wp_body_open())

	<div id="app">

		@include('sections.header')

		<main id="main" class="main">
			@yield('content')
		</main>

		@include('sections.footer')

	</div>

	@php(do_action('get_footer'))
	@php(wp_footer())
</body>

</html>
