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

<!-- map -->

<section 
	data-gsap-anim="section" 
	@if(!empty($section_id)) id="{{ $section_id }}" @endif 
	class="b-map imgtxt -smt {{ $sectionClass }} {{ $section_class }}">
	
	<div class="c-main grid grid-cols-1 lg:grid-cols-[1fr_2fr] gap-16">
		
		<div class="imgtxt__content">
			@if (!empty($g_map['subtitle']))
			<p data-gsap-element="subtitle" class="subtitle text-primary">
				{{ $g_map['subtitle'] }}
			</p>
			@endif
			
			@if (!empty($g_map['title']))
			<h2 data-gsap-element="title" class="mt-2">
				{{ $g_map['title'] }}
			</h2>
			@endif
			
			@if (!empty($g_map['content']))
			<div data-gsap-element="txt" class="mt-4">
				{!! $g_map['content'] !!}
			</div>
			@endif
			
			@if (!empty($g_map['button']))
			<div data-gsap-element="btn" class="">
				<a class="main-btn mt-8" href="{{ $g_map['button']['url'] }}" target="{{ $g_map['button']['target'] ?? '_self' }}">
					{{ $g_map['button']['title'] }}
				</a>
			</div>
			@endif
		</div>
		
		@if (!empty($g_map['map_embed']))
		<div data-gsap-element="map" class="__map">
			{!! $g_map['map_embed'] !!}
		</div>
		@endif
		
	</div>
	
</section>