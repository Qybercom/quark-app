<?php
namespace ViewModels;

use Quark\IQuarkViewModel;
use Quark\IQuarkViewModelInLocalizedTheme;
use Quark\IQuarkViewModelWithComponents;
use Quark\IQuarkViewModelWithResources;

/**
 * Interface IViewModel
 *
 * @package ViewModels
 */
interface IViewModel extends IQuarkViewModel, IQuarkViewModelInLocalizedTheme, IQuarkViewModelWithResources, IQuarkViewModelWithComponents {
	/**
	 * @return string
	 */
	public function Title();
}