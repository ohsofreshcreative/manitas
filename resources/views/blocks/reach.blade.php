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

<!-- reach -->

<section
	data-gsap-anim="section"
	@if(!empty($section_id)) id="{{ $section_id }}" @endif
	class="b-reach relative bg-gradient rounded-3xl py-16 -smt {{ $sectionClass }} {{ $section_class }}">

	<div class="c-main grid grid-cols-1 md:grid-cols-2 items-center py-20">

		<div class="__content relative z-10 m-auto">
			<h4 data-gsap-element="header" class="text-white mt-2">{{ $g_reach['header'] }}</h4>
			<div data-gsap-element="txt" class="text-white mt-2">{!! $g_reach['txt'] !!}</div>
			<div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
				<div data-gsap-element="data" class="__data flex flex-col gap-4">
					<a href="tel:{{ preg_replace('/\s+/', '', $g_reach['phone']) }}" class="__phone flex items-center text-xl !text-white hover:!text-primary-light">{{ $g_reach['phone'] }}</a>
					<a href="tel:{{ preg_replace('/\s+/', '', $g_reach['phone2']) }}" class="__phone flex items-center text-xl !text-white hover:!text-primary-light">{{ $g_reach['phone2'] }}</a>
					<a href="mailto:{{ $g_reach['mail'] }}" class="__mail flex items-center text-xl !text-white hover:!text-primary-light">{{ $g_reach['mail'] }}</a>
				</div>
			</div>

			@if (!empty($g_reach['button']))
			<div class="inline-buttons m-btn">
				<a data-gsap-element="button" class="second-btn left-btn"
					href="{{ $g_reach['button']['url'] }}"
					target="{{ $g_reach['button']['target'] }}">
					{{ $g_reach['button']['title'] }}
				</a>
				@if (!empty($g_reach['button2']))
				<a data-gsap-element="button" class="white-btn"
					href="{{ $g_reach['button2']['url'] }}"
					target="{{ $g_reach['button2']['target'] }}">
					{{ $g_reach['button2']['title'] }}
				</a>
				@endif
			</div>
			@endif

		</div>

		<div data-gsap-element="form" class="bg-white radius p-10">
			<h5 >Formularz kontaktowy</h5>
			<div class="mt-4">
				@if (!empty($shortcode))
				{!! do_shortcode($shortcode) !!}
				@endif
			</div>
		</div>


	</div>
</section>