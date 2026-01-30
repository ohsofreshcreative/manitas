<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Hero extends Block
{
	public $name = 'Hero';
	public $description = 'Hero z wideo w tle';
	public $slug = 'hero';
	public $category = 'formatting';
	public $icon = 'format-video';
	public $keywords = ['hero', 'wideo', 'video'];
	public $mode = 'edit';
	public $supports = [
		'align' => false,
		'mode' => false,
		'jsx' => true,
	];

	public function fields()
	{
		$hero = new FieldsBuilder('hero');

		$hero
			->setLocation('block', '==', 'acf/hero')
			->addText('block-title', [
				'label' => 'Tytuł',
				'required' => 0,
			])
			->addAccordion('accordion1', [
				'label' => 'Hero',
				'open' => false,
				'multi_expand' => true,
			])
			/*--- TAB #1 ---*/
			->addTab('Treść', ['placement' => 'top'])
			->addGroup('g_hero', ['label' => 'Hero'])
			->addFile('video_file', [
				'label' => 'Wideo (plik MP4)',
				'return_format' => 'url',
				'mime_types' => 'mp4',
			])
			->addImage('poster_image', [
				'label' => 'Obraz zapasowy (poster)',
				'return_format' => 'array',
				'preview_size' => 'medium',
			])
			->addText('pretitle', [
				'label' => 'Śródtytuł',
			])
			->addText('title', [
				'label' => 'Nagłówek',
			])
			->endGroup()

			/*--- USTAWIENIA BLOKU ---*/

			->addTab('Ustawienia bloku', ['placement' => 'top'])
			->addText('section_id', [
				'label' => 'ID',
			])
			->addText('section_class', [
				'label' => 'Dodatkowe klasy CSS',
			])
			->addTrueFalse('nomt', [
				'label' => 'Usunięcie marginesu górnego',
				'ui' => 1,
				'ui_on_text' => 'Tak',
				'ui_off_text' => 'Nie',
			]);

		return $hero;
	}

	public function with()
	{
		return [
			'g_hero' => get_field('g_hero'),
			'section_id' => get_field('section_id'),
			'section_class' => get_field('section_class'),
			'nomt' => get_field('nomt'),
		];
	}
}