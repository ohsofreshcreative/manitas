<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Contact extends Block
{
	public $name = 'Kontakt';
	public $description = 'Contact';
	public $slug = 'contact';
	public $category = 'formatting';
	public $icon = 'email';
	public $keywords = ['formularz', 'kontakt'];
	public $mode = 'edit';
	public $supports = [
		'align' => false,
		'mode' => false,
		'jsx' => true,
	];

	public function fields()
	{
		$contact = new FieldsBuilder('contact');

		$contact
			->setLocation('block', '==', 'acf/contact')
			->addText('block-title', [
				'label' => 'Tytuł',
				'required' => 0,
			])
			->addAccordion('accordion1', [
				'label' => 'Kontakt',
				'open' => false,
				'multi_expand' => true,
			])
			/*--- TAB #1 ---*/
			->addTab('Treść', ['placement' => 'top'])
			->addGroup('g_contact', ['label' => 'Kontakt'])
			->addText('subtitle', [
				'label' => 'Śródtytuł',
			])
			->addText('title', [
				'label' => 'Nagłówek',
			])
			->addWysiwyg('content', [
				'label' => 'Opis',
				'tabs' => 'all',
				'toolbar' => 'full',
				'media_upload' => false,
			])
			->addLink('button', [
				'label' => 'Przycisk',
				'return_format' => 'array',
			])
			->endGroup()

			/*--- TAB #2 ---*/
			->addTab('Dane kontaktowe', ['placement' => 'top'])
			->addGroup('contact_one', ['label' => 'Osoba #1'])
			->addImage('image', [
				'label' => 'Zdjęcie',
				'return_format' => 'array',
				'preview_size' => 'medium',
			])
			->addText('name', [
				'label' => 'Imię i nazwisko',
			])
			->addText('phone', [
				'label' => 'Numer telefonu',
			])
			->addText('email', [
				'label' => 'Adres e-mail',
			])
			->endGroup()

			->addGroup('contact_two', ['label' => 'Osoba #2'])
			->addImage('image', [
				'label' => 'Zdjęcie',
				'return_format' => 'array',
				'preview_size' => 'medium',
			])
			->addText('name', [
				'label' => 'Imię i nazwisko',
			])
			->addText('phone', [
				'label' => 'Numer telefonu',
			])
			->addText('email', [
				'label' => 'Adres e-mail',
			])
			->endGroup()

			/*--- TAB #3 ---*/
			->addTab('Formularz', ['placement' => 'top'])
			->addText('form_title', [
				'label' => 'Tytuł formularza',
				'default_value' => 'Formularz kontaktowy',
			])
			->addText('shortcode', [
				'label' => 'Kod formularza',
				'instructions' => 'Wklej kod formularza: [contact-form-7 id="24a7dfe" title="Contact form 1"]',
				'default_value' => '[contact-form-7 id="24a7dfe" title="Contact form 1"]',
			])

			/*--- USTAWIENIA BLOKU ---*/

			->addTab('Ustawienia bloku', ['placement' => 'top'])
			->addText('section_id', [
				'label' => 'ID',
			])
			->addText('section_class', [
				'label' => 'Dodatkowe klasy CSS',
			])
			->addTrueFalse('nolist', [
				'label' => 'Brak punktatorów',
				'ui' => 1,
				'ui_on_text' => 'Tak',
				'ui_off_text' => 'Nie',
			])
			->addTrueFalse('flip', [
				'label' => 'Odwrotna kolejność',
				'ui' => 1,
				'ui_on_text' => 'Tak',
				'ui_off_text' => 'Nie',
			])
			->addTrueFalse('wide', [
				'label' => 'Szeroka kolumna',
				'ui' => 1,
				'ui_on_text' => 'Tak',
				'ui_off_text' => 'Nie',
			])
			->addTrueFalse('nomt', [
				'label' => 'Usunięcie marginesu górnego',
				'ui' => 1,
				'ui_on_text' => 'Tak',
				'ui_off_text' => 'Nie',
			])
			->addTrueFalse('gap', [
				'label' => 'Większy odstęp',
				'ui' => 1,
				'ui_on_text' => 'Tak',
				'ui_off_text' => 'Nie',
			])
			->addSelect('background', [
				'label' => 'Kolor tła',
				'choices' => [
					'none' => 'Brak (domyślne)',
					'section-white' => 'Białe',
					'section-light' => 'Jasne',
					'section-gray' => 'Szare',
					'section-brand' => 'Marki',
					'section-gradient' => 'Gradient',
					'section-dark' => 'Ciemne',
				],
				'default_value' => 'none',
				'ui' => 0,
				'allow_null' => 0,
			]);

		return $contact;
	}

	public function with()
	{
		return [
			'g_contact' => get_field('g_contact'),
			'contact_one' => get_field('contact_one'),
			'contact_two' => get_field('contact_two'),
			'form_title' => get_field('form_title'),
			'shortcode' => get_field('shortcode'),
			'section_id' => get_field('section_id'),
			'section_class' => get_field('section_class'),
			'nolist' => get_field('nolist'),
			'flip' => get_field('flip'),
			'wide' => get_field('wide'),
			'nomt' => get_field('nomt'),
			'gap' => get_field('gap'),
			'background' => get_field('background'),
		];
	}
}