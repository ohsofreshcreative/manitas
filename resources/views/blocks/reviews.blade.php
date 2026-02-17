@php
$sectionClass = '';
$sectionClass .= $flip ? ' order-flip' : '';
$sectionClass .= $wide ? ' wide' : '';
$sectionClass .= $nomt ? ' !mt-0' : '';
$sectionClass .= $lightbg ? ' section-light' : '';
$sectionClass .= $graybg ? ' section-gray' : '';
$sectionClass .= $whitebg ? ' section-white' : '';
$sectionClass .= $brandbg ? ' section-brand' : '';
@endphp

<!--- reviews --->

<section data-gsap-anim="section" @if(!empty($section_id)) id="{{ $section_id }}" @endif class="b-reviews -smt {{ $sectionClass }} {{ $section_class }}">
	<div class="__wrapper c-main">
		<div class="__content">
			<div data-gsap-element="header" class="__wrapper block w-full md:w-1/2 pb-10">
				<h3 class="">{{ $g_reviews['title']}}</h3>
				<div class="">{!! $g_reviews['text'] !!}</div>
			</div>

			<div class="swiper reviews-swiper !overflow-visible">
				<div data-gsap-element="swiper" class="swiper-wrapper">
					@foreach($r_reviews as $card)
					<div class="swiper-slide">
						<div class="__card relative bg-white radius px-10 py-14">

							<div class="relative z-10 flex flex-col gap-4 mt-6">
								<img class="w-20" src="http://manitas.local/wp-content/uploads/2026/02/quote.svg" />
								@if(!empty($card['txt']))
								<div>
									<div data-review="text" class="__txt max-h-24 overflow-hidden transition-all duration-300">{{ $card['txt'] }}</div>
									<button type="button" data-review="button" class="text-gray-400 self-start mt-1">Przeczytaj całość</button>
								</div>
								@endif
								<b class="font-header text-xl">{{ $card['name'] }}</b>
								<a target="_blank" href="https://www.google.com/search?sa=X&sca_esv=e77c80913438f7a0&sxsrf=ANbL-n6KvZy12rkWJK_pWyikGbzOKM_4Aw:1771305801362&q=manitice%20opinie&rflfq=1&num=20&stick=H4sIAAAAAAAAAONgkxI2tTA3NzexNDA2NTa0NDM2MDc038DI-IqRPzcxL7MkMzlVIb8gMy8zdREruggA6W8aZD4AAAA&rldimm=5877749035319630717&tbm=lcl&hl=pl-PL&ved=0CAgQ5foLahcKEwiQxeGr5N-SAxUAAAAAHQAAAAAQBQ&biw=1680&bih=845&dpr=2#lkt=LocalPoiReviews&arid=Ci9DQUlRQUNvZENodHljRjlvT2t0WVlVcE5UVVJaWmxoSGNEVTNOR3g2TW10QlJIYxAB">
									<div class="flex items-center gap-4">


										<img src="/wp-content/uploads/2026/02/google.svg" />Opinia zweryfikowana<svg xmlns="http://www.w3.org/2000/svg" width="10" height="9" viewBox="0 0 10 9" fill="none">
											<path d="M9.79198 3.98624C9.79176 3.98602 9.79159 3.98577 9.79134 3.98555L6.08553 0.211353C5.8079 -0.0713855 5.35886 -0.0703333 5.08251 0.21382C4.8062 0.497937 4.80727 0.957482 5.08489 1.24026L7.57297 3.77419L0.709219 3.77419C0.317517 3.77419 0 4.09914 0 4.5C0 4.90086 0.317517 5.22581 0.709219 5.22581H7.57294L5.08492 7.75974C4.8073 8.04252 4.80624 8.50206 5.08255 8.78618C5.3589 9.07037 5.80797 9.07135 6.08556 8.78865L9.79137 5.01445C9.79159 5.01423 9.79176 5.01398 9.79201 5.01376C10.0698 4.73004 10.0689 4.26901 9.79198 3.98624Z" fill="#E02D26" />
										</svg>
									</div>
								</a>
							</div>
						</div>
					</div>
					@endforeach
				</div>

				<div data-gsap-element="arrows" class="flex gap-2 mt-5">
					<button type="button" data-ref="prev" class="__prev slider-button slider-button--prev" aria-label="Poprzedni">
						<svg xmlns="http://www.w3.org/2000/svg" width="54" height="48" viewBox="0 0 54 48" fill="none">
							<path d="M14.3756 0C13.7514 0 13.1722 0.340101 12.8601 0.889494L0.234083 23.1105C-0.0780277 23.6599 -0.0780277 24.3401 0.234083 24.8895L12.8601 47.1105C13.1722 47.6599 13.7514 48 14.3756 48H39.6276C40.2518 48 40.831 47.6599 41.1431 47.1105L53.7659 24.8895C54.078 24.3401 54.078 23.6599 53.7659 23.1105L41.1431 0.889494C40.831 0.340101 40.2518 0 39.6276 0H14.3756Z" fill="#E02D26" />
							<path class="__arrow" d="M20.7711 17.3089C21.1516 17.7192 21.1501 18.383 20.7678 18.7915L17.342 22.4516H38.0234C38.5628 22.4516 39 22.921 39 23.5C39 24.079 38.5628 24.5484 38.0234 24.5484H17.3419L20.7679 28.2085C21.1502 28.617 21.1516 29.2808 20.7712 29.6911C20.3906 30.1016 19.7723 30.1031 19.39 29.6947L14.2873 24.2431L14.2864 24.2421C13.9051 23.8336 13.9039 23.1677 14.2864 22.7579L14.2873 22.7569L19.39 17.3053C19.7722 16.8969 20.3906 16.8984 20.7711 17.3089Z" fill="white" />
						</svg>
					</button>

					<button type="button" data-ref="next" class="__next slider-button slider-button--next" aria-label="Następny">
						<svg xmlns="http://www.w3.org/2000/svg" width="54" height="48" viewbox="0 0 54 48" fill="none">
							<path d="M39.6244 0C40.2486 0 40.8278 0.340101 41.1399 0.889494L53.7659 23.1105C54.078 23.6599 54.078 24.3401 53.7659 24.8895L41.1399 47.1105C40.8278 47.6599 40.2486 48 39.6244 48H14.3724C13.7482 48 13.169 47.6599 12.8569 47.1105L0.234083 24.8895C-0.0780277 24.3401 -0.0780277 23.6599 0.234083 23.1105L12.8569 0.889494C13.169 0.340101 13.7482 0 14.3724 0H39.6244Z" fill="#E02D26" />
							<path class="__arrow" d="M33.2289 17.3089C32.8484 17.7192 32.8499 18.383 33.2322 18.7915L36.658 22.4516H15.9766C15.4372 22.4516 15 22.921 15 23.5C15 24.079 15.4372 24.5484 15.9766 24.5484H36.6581L33.2321 28.2085C32.8498 28.617 32.8484 29.2808 33.2288 29.6911C33.6094 30.1016 34.2277 30.1031 34.61 29.6947L39.7127 24.2431L39.7136 24.2421C40.0949 23.8336 40.0961 23.1677 39.7136 22.7579L39.7127 22.7569L34.61 17.3053C34.2278 16.8969 33.6094 16.8984 33.2289 17.3089Z" fill="white" />
						</svg>
					</button>
				</div>

			</div>
			<!--- swiper end --->

			<!-- <div class="mt-10">
				<img src="/wp-content/uploads/2025/12/google-1.svg" />
				<a class="!underline">Sprawdź wszystkie opinie</a>
			</div> -->
		</div>
	</div>

</section>