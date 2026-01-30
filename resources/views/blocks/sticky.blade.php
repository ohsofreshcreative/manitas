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

<!-- sticky -->

<section 
	data-gsap-anim="section" 
	@if(!empty($section_id)) id="{{ $section_id }}" @endif 
	class="b-sticky blockSticky -smt {{ $sectionClass }} {{ $section_class }}">
	
	<div class="c-main">
		
		<div class="imgtxt__content text-center">
			@if (!empty($g_sticky['subtitle']))
			<p data-gsap-element="subtitle" class="subtitle text-primary">
				{{ $g_sticky['subtitle'] }}
			</p>
			@endif
			
			@if (!empty($g_sticky['title']))
			<h1 data-gsap-element="title" class="text-center mt-2">
				{{ $g_sticky['title'] }}
			</h1>
			@endif
			
			@if (!empty($g_sticky['content']))
			<div data-gsap-element="txt" class="mt-4">
				{!! $g_sticky['content'] !!}
			</div>
			@endif
			
			@if (!empty($g_sticky['button']))
			<a data-gsap-element="btn" class="main-btn mt-8 inline-block" href="{{ $g_sticky['button']['url'] }}" target="{{ $g_sticky['button']['target'] ?? '_self' }}">
				{{ $g_sticky['button']['title'] }}
			</a>
			@endif
		</div>
		
		<div class="grid grid-cols-1 lg:grid-cols-[1fr_2fr] items-start gap-16  lg:gap-40">
			
			@if (!empty($g_sticky['image']))
			<figure data-gsap-element="img" class="__figure masked sticky top-10">
				<img 
					class="figure-image img-xl object-cover" 
					src="{{ $g_sticky['image']['url'] }}" 
					width="{{ $g_sticky['image']['width'] }}" 
					height="{{ $g_sticky['image']['height'] }}" 
					alt="{{ $g_sticky['image']['alt'] ?? '' }}">
				@if (!empty($g_sticky['image']['caption']))
				<figcaption>{{ $g_sticky['image']['caption'] }}</figcaption>
				@endif
			</figure>
			@endif
			
			@if (!empty($cards))
			<div class="__cards flex flex-col gap-16">
				@foreach ($cards as $card)
				<div data-gsap-element="card" class="card flex flex-col items-start gap-16 bg-white rounded-3xl px-8 py-8 md:px-16 md:py-16">
					@if (!empty($card['icon']))
					<img src="{{ $card['icon'] }}" alt="" class="__icon w-36 object-contain">
					@endif
					
					<div class="__content">
						@if (!empty($card['title']))
						<h5 class="__title text-secondary mb-4">{{ $card['title'] }}</h5>
						@endif
						
						@if (!empty($card['text']))
						<div class="__txt">
							{!! $card['text'] !!}
						</div>
						@endif
						
						@if (!empty($card['link']))
						<a class="underline-btn mt-4 inline-block" href="{{ $card['link']['url'] }}" target="{{ $card['link']['target'] ?? '_self' }}">
							{{ $card['link']['title'] }}
						</a>
						@endif
					</div>
				</div>
				@endforeach
			</div>
			@endif
			
		</div>
		
	</div>
	
</section>