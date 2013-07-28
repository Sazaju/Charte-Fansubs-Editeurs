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
		$content = "<p>Cette liste recense différents articles, travaux de recherche, billets de blog et autres sources particulièrement informatives dans les domaines de l'audiovisuel, du fansub, du droit d'auteur ou de la copie privée.</p>";
		$works = array(
			new Work(
				"Article L122-5",
				"Code de la propriété intellectuelle",
				"1er Août 2006",
				"http://www.legifrance.gouv.fr/affichCodeArticle.do;jsessionid=A49BB9856A165E6FB4B9BDE8EA010909.tpdjo13v_3?idArticle=LEGIARTI000006278917&cidTexte=LEGITEXT000006069414&dateTexte=20080116",
				"fr"
			),
			new Work(
				"Les droits d'auteur pour les nuls",
				"Maître Eolas",
				"20 Février 2009",
				"http://www.maitre-eolas.fr/post/2009/02/20/1321-les-droits-d-auteur-pour-les-nuls",
				"fr"
			),
			new Work(
				"Do Illegal Copies of Movies Reduce the Revenue of Legal Products? The case of TV animation in Japan",
				"Tanaka Tatsuo",
				"Janvier 2011",
				"http://www.rieti.go.jp/en/publications/summary/11010021.html",
				"jap"
			),
			new Work(
				"Différenciation des pratiques de réception des séries télévisées et mutations du secteur de la diffusion audiovisuelle : analyse critique du scénario de la mort annoncée de la télévision",
				"Guillaume Blanc",
				"28 Mars 2012",
				"http://dumas.ccsd.cnrs.fr/dumas-00683226/",
				"fr"
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
	public function __construct($title, $authors, $date, $url, $lang) {
		$lang = $lang == null ? "" : " ($lang)";
		$this->string = "<a href='$url'>\"$title\"</a>, <i>$authors</i>, $date".$lang;
	}
	
	public function __tostring() {
		return $this->string;
	}
}
?>