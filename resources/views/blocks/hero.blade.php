@php
$sectionClass = '';
$sectionClass .= $nomt ? ' !mt-0' : '';
@endphp

<!-- hero -->

<section
	data-gsap-anim="section"
	@if(!empty($section_id)) id="{{ $section_id }}" @endif
	class="b-hero hero {{ $sectionClass }} {{ $section_class }}">

	<div data-gsap-element="videoimg" class="hero__bg">
		@if (!empty($g_hero['poster_image']))
		<img 
			src="{{ $g_hero['poster_image']['url'] }}" 
			alt="{{ $g_hero['poster_image']['alt'] ?? '' }}" 
			class="hero__poster">
		@endif

		@if (!empty($g_hero['video_file']))
		<video 
			data-gsap-element="video" 
			autoplay 
			muted 
			loop 
			playsinline 
			class="hero__video">
			<source src="{{ $g_hero['video_file'] }}" type="video/mp4">
		</video>
		@endif
	</div>

	<div class="hero__content c-main grid grid-cols-1 lg:grid-cols-[2fr_1fr]">
		<div>
			@if (!empty($g_hero['pretitle']))
			<p data-gsap-element="txt" class="hero__pretitle text-light">
				{{ $g_hero['pretitle'] }}
			</p>
			@endif

			@if (!empty($g_hero['title']))
			<h1 data-gsap-element="title" class="hero__title font-bold text-white">
				{{ $g_hero['title'] }}
			</h1>
			@endif

			<a data-gsap-element="btn" href="#more" class="w-content block mt-6">
				<svg xmlns="http://www.w3.org/2000/svg" width="94" height="83" viewBox="0 0 94 83" fill="none">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M93.5786 39.526L91.932 36.6792L77.9642 58.3522L90.487 34.1791L88.454 30.6667L79.1571 45.0855L87.4907 29.0055L78.9163 14.1728L71.2547 26.0748L78.1266 12.7969L74.5198 6.56064L61.9577 26.0748L73.2205 4.31224L71.6075 1.5269C71.0643 0.58727 70.0562 0.00559317 68.9696 0.00559317H43.2294L32.3363 16.9134L41.09 0.00559317H32.2747L16.8619 23.9326L29.2448 0H25.0164C23.9298 0 22.9217 0.581677 22.3785 1.52131L0.407442 39.526C-0.135814 40.4657 -0.135814 41.629 0.407442 42.5687L15.8538 69.281L26.4669 52.7927L16.9515 71.1827L19.9366 76.3451L29.3624 61.7025L20.9111 78.0342L22.3785 80.5734C22.9217 81.513 23.9298 82.0947 25.0164 82.0947H34.2013L44.7696 65.7015L36.3183 82.0947H44.1367L56.9172 62.4855L46.9762 82.0947H68.9696C70.0562 82.0947 71.0643 81.513 71.6075 80.5734L93.5842 42.5687C94.1274 41.629 94.1274 40.4657 93.5842 39.526H93.5786Z" fill="#881719"/>
					<path d="M54.6912 47.2568C54.2808 46.9037 53.617 46.905 53.2085 47.2598L49.5484 50.4391V31.2461C49.5484 30.7456 49.079 30.3398 48.5 30.3398C47.921 30.3398 47.4516 30.7456 47.4516 31.2461V50.4391L43.7915 47.2597C43.383 46.905 42.7192 46.9036 42.3089 47.2567C41.8984 47.6098 41.8969 48.1836 42.3053 48.5384L47.7569 53.2739L47.7579 53.2747C48.1664 53.6286 48.8323 53.6297 49.2421 53.2747L49.2431 53.2739L54.6947 48.5385C55.1031 48.1837 55.1016 47.6099 54.6912 47.2568Z" fill="white"/>
				</svg>
			</a>
		</div>
	</div>

	<svg data-gsap-element="left" class="hero__left absolute top-0 left-0" xmlns="http://www.w3.org/2000/svg" width="442" height="839" viewBox="0 0 442 839" fill="none">
		<path d="M0 838.278H168.453L62.6016 655.417C47.5569 629.512 47.5569 597.487 62.6016 571.583L369.211 41.9172C384.256 16.0124 411.995 0 442 0H0V838.278Z" fill="#E02D26"/>
	</svg>

	<svg data-gsap-element="back" class="hero__back absolute bottom-0 right-0" xmlns="http://www.w3.org/2000/svg" width="968" height="331" viewBox="0 0 968 331" fill="none">
		<path d="M0.526245 330.5L183.567 13.6195C188.168 5.65324 196.706 0.721747 205.907 0.721746L968 0.72168L968 330.5L0.526245 330.5Z" fill="#881719"/>
	</svg>
</section>