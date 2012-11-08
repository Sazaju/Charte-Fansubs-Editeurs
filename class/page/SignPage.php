<?php
class SignPage extends Page {
	public function getId() {
		return 'sign';
	}
	
	public function getMenuRank() {
		return 3;
	}
	
	public function getMenuTitle() {
		return 'Supporteurs';
	}
	
	public function getContent() {
		$content = "<p>La charte n'existant pas (encore ?), cette liste indique uniquement les personnes supportant l'idée d'utiliser une charte entre éditeurs et fansubbeurs. Autrement dit, cette liste montre juste combien de personnes pensent qu'il est possible d'obtenir un accord entre les différents acteurs influençant le marché de la japanimation en France. Si vous pensez manquer sur la liste, merci de le faire savoir à ".Format::toHtmlEmail('sazaju@gmail.com', "l'administrateur")." (merci de ne pas vous faire apparaître plus d'une fois {'^_^}).</p>";
		$content .= "<p>Supporteurs :</p>";
		$signs = array(
			'Sazaju HITOKAGE',
		);
		natcasesort($signs);
		$content .= "<ul>";
		foreach($signs as $sign) {
			$content .= "<li>$sign</li>";
		}
		$content .= "</ul>";
		return $content;
	}
}
?>