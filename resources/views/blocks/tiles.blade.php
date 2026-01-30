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

<!--- tiles -->

<section data-gsap-anim="section" @if(!empty($section_id)) id="{{ $section_id }}" @endif class="b-tiles relative -smt overflow-hidden {{ $sectionClass }} {{ $section_class }}">

	<div class="__wrapper c-main relative z-10">

		<h4 data-gsap-element="header" class="w-full md:w-1/2">{{ $g_tiles['header'] }}</h4>

		<div class="__col grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16 mt-6 lg:mt-8">

			<div class="order1 mr-0 md:mr-10">
				<div data-gsap-element="txt" class="__txt text-xl">
					{!! $g_tiles['txt'] !!}
				</div>

				@if (!empty($g_tiles['image']))
				<img data-gsap-element="image" class="object-cover w-full img-m radius-img mt-6" src="{{ $g_tiles['image']['url'] }}" alt="{{ $g_tiles['image']['alt'] ?? '' }}">
				@endif

				@if (!empty($g_tiles['button']))
				<div class="inline-buttons m-btn">
					<a data-gsap-element="button" class="second-btn left-btn"
						href="{{ $g_tiles['button']['url'] }}"
						target="{{ $g_tiles['button']['target'] }}">
						{{ $g_tiles['button']['title'] }}
					</a>
					@if (!empty($g_tiles['button2']))
					<a data-gsap-element="button" class="white-btn"
						href="{{ $g_tiles['button2']['url'] }}"
						target="{{ $g_tiles['button2']['target'] }}">
						{{ $g_tiles['button2']['title'] }}
					</a>
					@endif
				</div>
				@endif
			</div>

			<div class="order2">
				<h6 data-gsap-element="card">{!! $g_tiles['title'] !!}</h6>
				<div class="grid gap-4 mt-4">
					@foreach ($r_tiles as $item)
					<div data-gsap-element="card" class="__card">
						<div class="__content flex items-start gap-6">
							@if (!empty($item['image']))
							<img class="max-w-18 radius-img mt-2" src="{{ $item['image']['url'] }}" alt="{{ $item['image']['alt'] ?? '' }}">
							@endif
							<div>
								<p class="text-xl">{{ $item['header'] }}</p>
								@if (!empty($item['txt']))
								<p class="text-white mt-2">{!! $item['txt'] !!}</p>
								@endif
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>

</section>