<?php
class WorksPage extends Page {
	public function getId() {
		return 'works';
	}
	
	public function getMenuRank() {
		return 4;
	}
	
	public function getMenuTitle() {
		return 'Travaux';
	}
	
	public function getContent() {
		$content = "<p>Cette liste recense les travaux officiels effectués dans le domaine de l'audiovisuel et du fansub.</p>";
		$works = array(
			new Work(
				"Différenciation des pratiques de réception des séries télévisées et mutations du secteur de la diffusion audiovisuelle : analyse critique du scénario de la mort annoncée de la télévision",
				"Guillaume Blanc",
				"28/03/2012",
				"http://dumas.ccsd.cnrs.fr/dumas-00683226/"
			),
		);
		$content .= "<ul>";
		foreach($works as $work) {
			$content .= "<li>$work</li>";
		}
		$content .= "</ul>";
		return $content;
	}
}

class Work {
	public function __construct($title, $authors, $date, $url) {
		$this->string = "<a href='$url'>\"$title\", <i>$authors</i>, $date</a>";
	}
	
	public function __tostring() {
		return $this->string;
	}
}
?>