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

<!-- two-cols -->

<section 
	data-gsap-anim="section" 
	@if(!empty($section_id)) id="{{ $section_id }}" @endif 
	class="b-twocols two-cols -smt {{ $sectionClass }} {{ $section_class }}">
	
	<div class="__wrapper c-main">
		<div class="__col grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-20">
			
			<div class="__first flex flex-col justify-between gap-16">
				<div>
					@if (!empty($g_twocols['title']))
					<h2 data-gsap-element="title">{{ $g_twocols['title'] }}</h2>
					@endif
					
					@if (!empty($g_twocols['button']))
					<div data-gsap-element="btn" class="main-btn">
						<a href="{{ $g_twocols['button']['url'] }}" target="{{ $g_twocols['button']['target'] ?? '_self' }}">
							{{ $g_twocols['button']['title'] }}
						</a>
					</div>
					@endif
				</div>
				
				@if (!empty($image))
				<div class="flex">
					<figure data-gsap-element="img1" class="__figure masked">
						<img 
							class="figure-image object-cover" 
							src="{{ $image['url'] }}" 
							width="{{ $image['width'] }}" 
							height="{{ $image['height'] }}" 
							alt="{{ $image['alt'] ?? '' }}">
						@if (!empty($image['caption']))
						<figcaption>{{ $image['caption'] }}</figcaption>
						@endif
					</figure>
				<!-- 	<img data-gsap-element="img2" class="__hex zindex2" src="/wp-content/uploads/2026/01/hexagon_1.svg" alt=""/>
					<img data-gsap-element="img3" class="__hex zindex3" src="/wp-content/uploads/2026/01/hexagon_2.svg" alt=""/> -->
				</div>
				@endif
			</div>

			<div class="__values self-center">
				@if (!empty($g_twocols['content']))
				<div data-gsap-element="txt" class="mb-6">
					{!! $g_twocols['content'] !!}
				</div>
				@endif
				
				@if (!empty($values))
					@foreach ($values as $item)
					<p data-gsap-element="header" class="text-h5 text-primary">{{ $item['title'] }}</p>
					@endforeach
				@endif
			</div>

		</div>
	</div>

</section>