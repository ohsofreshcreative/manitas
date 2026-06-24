<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Oreviews extends Field
{
	public $name = 'Slider - Opinie';
	public $description = 'reviews';
	public $slug = 'oreviews';
	public $category = 'formatting';
	public $icon = 'format-quote';
	public $keywords = ['reviews', 'kafelki'];
	public $mode = 'edit';
	public $supports = [
		'align' => false,
		'mode' => false,
		'jsx' => true,
	];

	public function fields(): array
	{
		$oreviews = new FieldsBuilder('oreviews');

		$oreviews
			->setLocation('options_page', '==', 'oreviews')
			->addText('block-title', [
				'label' => 'Tytuł',
				'required' => 0,
			])
			->addAccordion('accordion1', [
				'label' => 'Slider - Opinie',
				'open' => false,
				'multi_expand' => true,
			])
			/*--- FIELDS ---*/
			->addTab('Treści', ['placement' => 'top'])
			->addGroup('g_reviews', ['label' => ''])
			->addText('title', ['label' => 'Tytuł'])
			->addWysiwyg('text', ['label' => 'Opis', 'media_upload' => 0, 'tabs' => 'visual'])
			->endGroup()

			/*--- OPINIE ---*/

			->addTab('Opinie', ['placement' => 'top'])
			->addRepeater('r_reviews', [
				'label' => 'Slider - Opinie',
				'layout' => 'table',
				'min' => 1,
				'max' => 15,
				'button_label' => 'Dodaj kafelek',
			])
			->addTextarea('txt', [
				'label' => 'Opis',
				'rows' => 4,
				'new_lines' => 'br',
			])
			->addText('name', [
				'label' => 'Klient',
			])
			->endRepeater()

			/*--- USTAWIENIA BLOKU ---*/

			->addTab('Ustawienia bloku', ['placement' => 'top'])
			->addText('section_id', [
				'label' => 'ID',
			])
			->addText('section_class', [
				'label' => 'Dodatkowe klasy CSS',
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
			->addTrueFalse('lightbg', [
				'label' => 'Jasne tło',
				'ui' => 1,
				'ui_on_text' => 'Tak',
				'ui_off_text' => 'Nie',
			])
			->addTrueFalse('graybg', [
				'label' => 'Szare tło',
				'ui' => 1,
				'ui_on_text' => 'Tak',
				'ui_off_text' => 'Nie',
			])
			->addTrueFalse('whitebg', [
				'label' => 'Białe tło',
				'ui' => 1,
				'ui_on_text' => 'Tak',
				'ui_off_text' => 'Nie',
			])
			->addTrueFalse('brandbg', [
				'label' => 'Tło marki',
				'ui' => 1,
				'ui_on_text' => 'Tak',
				'ui_off_text' => 'Nie',
			]);

		return [$oreviews];
	}
}
