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

<!-- contact -->

<section 
	data-gsap-anim="section" 
	@if(!empty($section_id)) id="{{ $section_id }}" @endif 
	class="b-contact relative bg-gradient rounded-3xl py-16 -smt {{ $sectionClass }} {{ $section_class }}">
	
	<div class="c-main grid grid-cols-1 lg:grid-cols-2 gap-16 relative z-10">
		
		<div class="contact__data">
			@if (!empty($g_contact['subtitle']))
			<p data-gsap-element="subtitle" class="subtitle text-primary-300">
				{{ $g_contact['subtitle'] }}
			</p>
			@endif
			
			@if (!empty($g_contact['title']))
			<h2 data-gsap-element="title" class="text-white mt-2">
				{{ $g_contact['title'] }}
			</h2>
			@endif
			
			@if (!empty($g_contact['content']))
			<div data-gsap-element="txt" class="text-white mt-4">
				{!! $g_contact['content'] !!}
			</div>
			@endif
			
			<div data-gsap-element="data" class="flex flex-col lg:flex-row gap-28 mt-12">
				@if (!empty($contact_one))
				<div>
					@if (!empty($contact_one['image']))
					<figure data-gsap-element="img" class="__figure offer-mask">
						<img 
							class="figure-image object-cover" 
							src="{{ $contact_one['image']['url'] }}" 
							width="{{ $contact_one['image']['width'] }}" 
							height="{{ $contact_one['image']['height'] }}" 
							alt="{{ $contact_one['image']['alt'] ?? '' }}">
					</figure>
					@endif
					
					@if (!empty($contact_one['name']))
					<h5 class="text-white mt-8 mb-4">{{ $contact_one['name'] }}</h5>
					@endif
					
					@if (!empty($contact_one['phone']))
					<a class="phone flex items-center !text-white hover:!text-primary-200 w-max text-lg" href="tel:{{ $contact_one['phone'] }}">
						{{ $contact_one['phone'] }}
					</a>
					@endif
					
					@if (!empty($contact_one['email']))
					<a class="mail flex items-center !text-white hover:!text-primary-200 w-max text-lg font-bold" href="mailto:{{ $contact_one['email'] }}">
						{{ $contact_one['email'] }}
					</a>
					@endif
				</div>
				@endif
				
				@if (!empty($contact_two))
				<div>
					@if (!empty($contact_two['image']))
					<figure data-gsap-element="img" class="__figure offer-mask">
						<img 
							class="figure-image object-cover" 
							src="{{ $contact_two['image']['url'] }}" 
							width="{{ $contact_two['image']['width'] }}" 
							height="{{ $contact_two['image']['height'] }}" 
							alt="{{ $contact_two['image']['alt'] ?? '' }}">
					</figure>
					@endif
					
					@if (!empty($contact_two['name']))
					<h5 class="text-white mt-8 mb-4">{{ $contact_two['name'] }}</h5>
					@endif
					
					@if (!empty($contact_two['phone']))
					<a class="phone flex items-center !text-white hover:!text-primary-200 w-max text-lg" href="tel:{{ $contact_two['phone'] }}">
						{{ $contact_two['phone'] }}
					</a>
					@endif
					
					@if (!empty($contact_two['email']))
					<a class="mail flex items-center !text-white hover:!text-primary-200 w-max text-lg font-bold" href="mailto:{{ $contact_two['email'] }}">
						{{ $contact_two['email'] }}
					</a>
					@endif
				</div>
				@endif
			</div>
			
			@if (!empty($g_contact['button']))
			<div data-gsap-element="btn">
				<a class="main-btn mt-12" href="{{ $g_contact['button']['url'] }}" target="{{ $g_contact['button']['target'] ?? '_self' }}">
					{{ $g_contact['button']['title'] }}
				</a>
			</div>
			@endif
		</div>

		<div data-gsap-element="form" class="__form bg-white p-8 md:p-14 w-full rounded-3xl">
			@if (!empty($form_title))
			<h4 class="mb-3">{{ $form_title }}</h4>
			@endif
			
			@if (!empty($shortcode))
			{!! do_shortcode($shortcode) !!}
			@endif
		</div>
		
	</div>
	
</section>