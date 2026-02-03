@php
$sectionClass = '';
$sectionClass .= $nomt ? ' !mt-0' : '';
@endphp

<!-- connect -->

<section data-gsap-anim="section" @if(!empty($section_id)) id="{{ $section_id }}" @endif class="b-connect relative overflow-hidden -smt bg-primary-700 radius {{ $sectionClass }} {{ $section_class }}">
	<div class="c-main grid grid-cols-1 md:grid-cols-2 items-center py-20">

		<div class="__content relative z-10 m-auto">
			<h6 data-gsap-element="txt" class="text-primary-light">
				{!! $bottom['txt'] !!}
			</h6>
			<h4 data-gsap-element="header" class="text-white mt-2">{{ $bottom['header'] }}</h4>
			<div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
					<div data-gsap-element="data" class="__data flex flex-col gap-4">
						<a href="tel:{{ preg_replace('/\s+/', '', $bottom['phone']) }}" class="__phone flex items-center text-xl !text-white hover:!text-primary-light">{{ $bottom['phone'] }}</a>

						<a href="tel:{{ preg_replace('/\s+/', '', $bottom['phone2']) }}" class="__phone flex items-center text-xl !text-white hover:!text-primary-light">{{ $bottom['phone2'] }}</a>
						<a href="mailto:{{ $bottom['mail'] }}" class="__mail flex items-center text-xl !text-white hover:!text-primary-light">{{ $bottom['mail'] }}</a>
					</div>
				</div>

			@if (!empty($bottom['button']))
			<div class="inline-buttons m-btn">
				<a data-gsap-element="button" class="second-btn left-btn"
					href="{{ $bottom['button']['url'] }}"
					target="{{ $bottom['button']['target'] }}">
					{{ $bottom['button']['title'] }}
				</a>
				@if (!empty($bottom['button2']))
				<a data-gsap-element="button" class="white-btn"
					href="{{ $bottom['button2']['url'] }}"
					target="{{ $bottom['button2']['target'] }}">
					{{ $bottom['button2']['title'] }}
				</a>
				@endif
			</div>
			@endif

		</div>

		<div data-gsap-element="form" class="bg-white radius p-10">
			{!! do_shortcode($bottom['shortcode']) !!}
		</div>


	</div>
</section>