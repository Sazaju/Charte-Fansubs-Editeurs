<?php
require_once('baseImport.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Charte Éditeurs-Fansubs</title>
		<meta charset="utf-8">
		<meta name="description" content="Charte Éditeurs-Fansubs">
		<meta name="keywords" content="charte, éditeurs, fansubs">
		<link href="style.css" rel="stylesheet" type="text/css" />
		<?php
			if (TEST_MODE_ACTIVATED) {
				echo '<link href="debug-style.css" rel="stylesheet" type="text/css" />';
			} else {
				// do not use the debug style
			}
		?>
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/sin/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<?php
			if (TEST_MODE_ACTIVATED) {
				echo '<div id="test">';
				$url = Url::getCurrentUrl();
				$url->setQueryVar('noTest');
				echo '<a href="'.$url.'">Deactivate testing mode</a>';
				echo '</div>';
			} else {
				// do not display testing stuff
			}
		?>
		<header>
			<h1>Charte Éditeurs-Fansubs</h1>
			<h2>Tentative d'accord à l'amiable entre des acteurs voulant promouvoir la Japanimation en France</h2>
		</header>
		<nav>
			<?php
				$url = Url::getCurrentUrl();
				$displayedPage = Page::getDisplayedPage();
				foreach(Page::getAvailablePages() as $page) {
					$url = new Url();
					$url->setQueryVar('page', $page->getId());
					echo '<a '.($displayedPage == $page ? 'class="selected"' : '').' href="'.$url.'">'.$page->getMenuTitle().'</a>';
				}
				echo Format::toHtmlEmail('sazaju@gmail.com', "Contact");
			?>
		</nav>
		<article>
			<?php
				$page = Page::getDisplayedPage();
				echo '<div id="lastUpdateTime">Last update: '.date ("d/m/Y H:i:s", $page->getLastUpdateTime()).'</div>';
				echo $page->getContent();
			?>
		</article>
		<footer><?php require_once("copyright.php"); ?></footer>
	</body>
</html>