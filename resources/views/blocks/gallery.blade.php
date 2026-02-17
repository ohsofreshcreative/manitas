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

<!-- gallery --->

<section data-gsap-anim="section" @if(!empty($section_id)) id="{{ $section_id }}" @endif class="b-gallery relative -smt {{ $sectionClass }} {{ $section_class }}">
	<div class="__wrapper c-main">
		<h2 data-gsap-element="header" class="m-header">{{ $g_gallery['header'] }}</h2>

		@if (!empty($g_gallery['gallery']))
		<div data-gsap-element="images" class="lightbox-gallery grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-10">
			@foreach ($g_gallery['gallery'] as $item)
			@php
			if (!$item) continue;

			$is_video = str_starts_with($item['mime_type'], 'video');
			$video_thumbnail_field = $g_gallery['video_thumbnail'] ?? null;
			$thumbnail_url = null;

			if ($is_video) {
			// 1. Jeśli to WIDEO, w pierwszej kolejności użyj dedykowanej miniaturki z ACF.
			if ($video_thumbnail_field) {
			$thumbnail_url = $video_thumbnail_field['sizes']['large'] ?? $video_thumbnail_field['url'];
			} else {
			// 2. Jeśli nie ma miniaturki ACF, użyj ikony systemowej (zamiast czarnego tła).
			$thumbnail_url = $item['icon'];
			}
			} else {
			// 3. Jeśli to OBRAZ, użyj jego standardowej miniaturki.
			$thumbnail_url = $item['sizes']['large'] ?? $item['url'];
			}
			@endphp

			<a href="{{ $item['url'] }}" class="relative block group">
				<img class="img-m w-full radius object-cover aspect-square" src="{{ $thumbnail_url }}" alt="{{ $item['alt'] ?? '' }}">

				@if ($is_video)
				<div class="absolute inset-0 flex items-center justify-center bg-opacity-20 group-hover:bg-opacity-40 transition-all duration-300 radius">
					<div class="w-16 h-16 bg-white rounded-full flex items-center justify-center shadow-lg">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="stroke-brand-1 ml-1">
							<polygon points="5 3 19 12 5 21 5 3"></polygon>
						</svg>
					</div>
				</div>
				@endif
			</a>
			@endforeach
		</div>
		@endif

	</div>
</section>