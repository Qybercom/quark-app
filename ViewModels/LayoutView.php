<?php
namespace ViewModels;

use Quark\IQuarkViewResource;

use Quark\QuarkView;

use Quark\ViewResources\Google\GoogleFont;

/**
 * Class LayoutView
 *
 * @package ViewModels
 */
class LayoutView implements IViewModel {
	use ViewBehavior;

	/**
	 * @return string
	 */
	public function View () {
		return 'Layout';
	}

	/**
	 * @return IQuarkViewResource|string
	 */
	public function ViewStylesheet () {
		return $this->ThemeResource('/static/layout.css');
	}

	/**
	 * @return IQuarkViewResource|string
	 */
	public function ViewController () {
		return $this->ThemeResource('/static/layout.js');
	}

	/**
	 * @return IQuarkViewResource[]
	 */
	public function ViewResources () {
		return array(
			new GoogleFont(GoogleFont::FAMILY_OPEN_SANS, GoogleFont::SizeRange()),
		);
	}

	/**
	 * @return string
	 */
	public function Title () {
		/**
		 * @var QuarkView|IViewModel $child
		 */
		$child = $this->Child();

		return $child->Title();
	}
}