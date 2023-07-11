<?php
/**
 * @var QuarkView|LayoutView $this
 */
use Quark\QuarkView;

use ViewModels\LayoutView;
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $this->Title(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

	<?php echo $this->Resources(); ?>
</head>
<body>
	<div class="quark-screen" id="app-header">
		<div class="quark-column" id="app-header-logo">
			<span>Qybercom</span>QuarkApp
		</div>
		<div class="quark-column"></div>
	</div>

	<div class="quark-screen" id="app-main">
		<?php echo $this->View(); ?>
	</div>

	<div class="quark-screen" id="app-footer">
	</div>
</body>
</html>