<?php

namespace App\Options;

use Log1x\AcfComposer\Options;

class Oreviews extends Options
{
	public $name = 'Opinie';
	public $slug = 'oreviews';
	public $title = 'Opinie';
	public $capability = 'edit_posts';
	public $redirect = false;
	public function fields(): array
	{
		return [];
	}
}
