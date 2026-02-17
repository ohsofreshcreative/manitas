@php
$sectionClass = '';
$sectionClass .= $flip ? ' order-flip' : '';
$sectionClass .= $nolist ? ' no-list' : '';
$sectionClass .= $wide ? ' wide' : '';
$sectionClass .= $nomt ? ' !mt-0' : '';
$sectionClass .= $gap ? ' wider-gap' : '';

if (!empty($background) && $background !== 'none') {
	$sectionClass .= ' ' . $background;
}
@endphp

<!-- hero-sub -->

<section 
	data-gsap-anim="section" 
	@if(!empty($section_id)) id="{{ $section_id }}" @endif 
	class="b-hero-sub hero relative bg-white {{ $sectionClass }} {{ $section_class }}">
	
	<div class="c-main grid grid-cols-1 lg:grid-cols-2 items-center gap-16">
		
		<div class="__content order-1 py-60 lg:py-70 z-10">
			@if (!empty($g_hero_sub['subtitle']))
			<p data-gsap-element="subtitle" class="subtitle text-primary-300">
				{{ $g_hero_sub['subtitle'] }}
			</p>
			@endif
			
			@if (!empty($g_hero_sub['title']))
			<h2 data-gsap-element="title" class="">
				{{ $g_hero_sub['title'] }}
			</h2>
			@endif
			
			@if (!empty($g_hero_sub['content']))
			<div data-gsap-element="txt" class="mt-2">
				{!! $g_hero_sub['content'] !!}
			</div>
			@endif
			
			@if (!empty($g_hero_sub['button']))
			<div data-gsap-element="btn" class="main-btn">
				<a href="{{ $g_hero_sub['button']['url'] }}" target="{{ $g_hero_sub['button']['target'] ?? '_self' }}">
					{{ $g_hero_sub['button']['title'] }}
				</a>
			</div>
			@endif
			
			<a data-gsap-element="arrow" href="#more" class="w-content block mt-6">
				<svg xmlns="http://www.w3.org/2000/svg" width="94" height="83" viewBox="0 0 94 83" fill="none">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M93.5786 39.526L91.932 36.6792L77.9642 58.3522L90.487 34.1791L88.454 30.6667L79.1571 45.0855L87.4907 29.0055L78.9163 14.1728L71.2547 26.0748L78.1266 12.7969L74.5198 6.56064L61.9577 26.0748L73.2205 4.31224L71.6075 1.5269C71.0643 0.58727 70.0562 0.00559317 68.9696 0.00559317H43.2294L32.3363 16.9134L41.09 0.00559317H32.2747L16.8619 23.9326L29.2448 0H25.0164C23.9298 0 22.9217 0.581677 22.3785 1.52131L0.407442 39.526C-0.135814 40.4657 -0.135814 41.629 0.407442 42.5687L15.8538 69.281L26.4669 52.7927L16.9515 71.1827L19.9366 76.3451L29.3624 61.7025L20.9111 78.0342L22.3785 80.5734C22.9217 81.513 23.9298 82.0947 25.0164 82.0947H34.2013L44.7696 65.7015L36.3183 82.0947H44.1367L56.9172 62.4855L46.9762 82.0947H68.9696C70.0562 82.0947 71.0643 81.513 71.6075 80.5734L93.5842 42.5687C94.1274 41.629 94.1274 40.4657 93.5842 39.526H93.5786Z" fill="#881719"/>
					<path d="M54.6912 47.2568C54.2808 46.9037 53.617 46.905 53.2085 47.2598L49.5484 50.4391V31.2461C49.5484 30.7456 49.079 30.3398 48.5 30.3398C47.921 30.3398 47.4516 30.7456 47.4516 31.2461V50.4391L43.7915 47.2597C43.383 46.905 42.7192 46.9036 42.3089 47.2567C41.8984 47.6098 41.8969 48.1836 42.3053 48.5384L47.7569 53.2739L47.7579 53.2747C48.1664 53.6286 48.8323 53.6297 49.2421 53.2747L49.2431 53.2739L54.6947 48.5385C55.1031 48.1837 55.1016 47.6099 54.6912 47.2568Z" fill="white"/>
				</svg>
			</a>
		</div>
		
		@if (!empty($g_hero_sub['image']))
		<figure data-gsap-element="img" class="__figure absolute order-2 offer-mask z-10 -bottom-[5%] lg:bottom-unset">
			<img 
				class="figure-image object-cover" 
				src="{{ $g_hero_sub['image']['url'] }}" 
				width="{{ $g_hero_sub['image']['width'] }}" 
				height="{{ $g_hero_sub['image']['height'] }}" 
				alt="{{ $g_hero_sub['image']['alt'] ?? '' }}">
			@if (!empty($g_hero_sub['image']['caption']))
			<figcaption>{{ $g_hero_sub['image']['caption'] }}</figcaption>
			@endif
		</figure>
		@endif
		
	</div>
	
	<svg data-gsap-element="left" class="__left absolute" xmlns="http://www.w3.org/2000/svg" width="407" height="1027" viewBox="0 0 407 1027" fill="none">
		<path fill-rule="evenodd" clip-rule="evenodd" d="M402.344 530.777L395.362 542.885L261.867 335.077L381.628 566.867L359.515 605.285L261.984 453.475L349.389 622.748L199.485 882.479L126.627 769.203L191.92 895.518L167.479 937.894L59.0075 769.203L156.19 957.453L126.046 1009.61C122.903 1015.08 111.963 1026.72 111.963 1026.72L0 812.86C0 812.86 4.30657 807.272 6.86705 802.965L163.987 530.777C170.039 520.299 170.039 507.261 163.987 496.783L60.6371 317.731L115.804 0.721765C115.804 0.721765 123.252 12.9458 126.162 18.0682L402.461 496.899C408.513 507.377 408.513 520.416 402.461 530.894L402.344 530.777Z" fill="#1488CA"/>
	</svg>
	
</section>